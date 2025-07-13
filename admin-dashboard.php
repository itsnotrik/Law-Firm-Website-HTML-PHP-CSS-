<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: admin-login.php");
    exit();
}

// Filters
$statusFilter = $_GET['filter'] ?? 'all';
$search = $_GET['search'] ?? '';

// Pagination
$limit = 10;
$page = $_GET['page'] ?? 1;
$offset = ($page - 1) * $limit;

// Summary counts
$confirmed = $conn->query("SELECT COUNT(*) AS total FROM appointments WHERE status='Confirmed'")->fetch_assoc()['total'];
$cancelled = $conn->query("SELECT COUNT(*) AS total FROM appointments WHERE status='Cancelled'")->fetch_assoc()['total'];
$pending = $conn->query("SELECT COUNT(*) AS total FROM appointments WHERE status='Pending'")->fetch_assoc()['total'];

// Build query
$where = "1";
if ($statusFilter !== 'all') $where .= " AND status='$statusFilter'";
if (!empty($search)) $where .= " AND (name LIKE '%$search%' OR email LIKE '%$search%' OR purpose LIKE '%$search%')";
$totalResults = $conn->query("SELECT COUNT(*) AS total FROM appointments WHERE $where")->fetch_assoc()['total'];
$totalPages = ceil($totalResults / $limit);

$appointments = $conn->query("SELECT * FROM appointments WHERE $where ORDER BY created_at DESC LIMIT $offset, $limit");

// Handle status updates
if (isset($_GET['status']) && isset($_GET['id'])) {
    $conn->query("UPDATE appointments SET status='{$_GET['status']}' WHERE id=" . intval($_GET['id']));
    header("Location: admin-dashboard.php");
    exit();
}

// Handle delete
if (isset($_GET['delete'])) {
    $conn->query("DELETE FROM appointments WHERE id=" . intval($_GET['delete']));
    header("Location: admin-dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #ffffff;
            color: #121518;
        }
        .dashboard-summary, .filters, .appointments {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .dashboard-summary h2 {
            font-size: 28px;
            color: #aa9166;
        }
        .dashboard-summary p {
            font-size: 18px;
            color: #333;
        }
        .filters select, .filters input, .filters button {
            padding: 8px;
            font-size: 14px;
            margin-right: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        table th {
            background-color: #aa9166;
            color: #fff;
        }
        table td {
            background-color: #f9f9f9;
        }
        .nav-icons a {
            color: #aa9166;
            font-weight: bold;
        }
        .btn-appointment, .filters button {
            background: #121518;
            color: #aa9166;
            border: 2px solid #aa9166;
            cursor: pointer;
        }
        .btn-appointment:hover, .filters button:hover {
            background: #aa9166;
            color: #121518;
        }
    </style>
</head>
<body>
<header class="navbar">
    <div class="logo"><img src="img/logo.png" alt="DKM Law Logo" style="height: 40px;"></div>
    <div class="logo">Admin Dashboard</div>
    <div class="nav-icons"><a href="logout.php">Logout</a></div>
</header>

<section class="dashboard-summary">
    <h2>Welcome, <?php echo $_SESSION['admin']; ?></h2>
    <p><strong>Confirmed:</strong> <?= $confirmed ?> | 
       <strong>Cancelled:</strong> <?= $cancelled ?> | 
       <strong>Pending:</strong> <?= $pending ?></p>
</section>

<section class="filters">
    <form method="GET">
        <select name="filter">
            <option value="all" <?= $statusFilter == 'all' ? 'selected' : '' ?>>All</option>
            <option value="Confirmed" <?= $statusFilter == 'Confirmed' ? 'selected' : '' ?>>Confirmed</option>
            <option value="Cancelled" <?= $statusFilter == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
            <option value="Pending" <?= $statusFilter == 'Pending' ? 'selected' : '' ?>>Pending</option>
        </select>
        <input type="text" name="search" placeholder="Search..." value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Filter</button>
    </form>
</section>
<section class="appointments">
    <table>
        <tr>
            <th>ID</th>
            <th>Client</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Purpose</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

<?php
if ($appointments && $appointments->num_rows > 0) {
    while ($row = $appointments->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['contact']}</td>
            <td>{$row['purpose']}</td>
            <td>{$row['appointment_date']}</td>
            <td>{$row['appointment_time']}</td>
            <td>{$row['status']}</td>
            <td>
                <a href='?status=Confirmed&id={$row['id']}'>Confirm</a> |
                <a href='?status=Cancelled&id={$row['id']}'>Cancel</a> |
                <a href='?delete={$row['id']}' onclick=\"return confirm('Are you sure?')\">Delete</a>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No appointments found.</td></tr>";
}
?>




    </table>

    <div style="margin-top: 15px; text-align: center;">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?= $i ?>&filter=<?= $statusFilter ?>&search=<?= urlencode($search) ?>"
               style="margin: 0 5px; <?= $page == $i ? 'font-weight: bold; color: #aa9166;' : '' ?>">
                <?= $i ?>
            </a>
        <?php endfor; ?>
    </div>
</section>
</body>
</html>
