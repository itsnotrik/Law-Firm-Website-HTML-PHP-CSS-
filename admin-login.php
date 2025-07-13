<?php
session_start();
include 'db.php';

// Redirect to dashboard if already logged in
if (isset($_SESSION['admin'])) {
    header("Location: admin-dashboard.php");
    exit();
}

// Handle login
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple check (replace with hashed password check in real apps)
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin'] = $username;
        header("Location: admin-dashboard.php");
        exit();
    } else {
        $error = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600&family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #121518;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .login-box {
      background-color: #1e1e1e;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
      width: 350px;
      animation: fadeIn 1s ease;
    }

    .login-box .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-box .logo img {
      max-width: 80px;
    }

    .login-box h2 {
      text-align: center;
      color: #aa9166;
      font-family: 'EB Garamond', serif;
      margin-bottom: 25px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      background: #2a2a2a;
      border: 1px solid #444;
      color: #fff;
      font-size: 14px;
      border-radius: 4px;
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      font-weight: bold;
      font-size: 16px;
      background: #aa9166;
      color: #121518;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .login-box button:hover {
      background: #8e794f;
    }

    .error {
      color: red;
      text-align: center;
      margin-bottom: 10px;
    }

    .toggle-password {
      position: absolute;
      right: 15px;
      top: 10px;
      cursor: pointer;
      color: #ccc;
    }

    .password-container {
      position: relative;
    }
  </style>
</head>
<body>

<div class="login-box">
  <div class="logo">
    <img src="img/logo.png" alt="DKM Logo">
  </div>
  <h2>Admin Panel Login</h2>

  <?php if ($error): ?>
    <div class="error"><?php echo $error; ?></div>
  <?php endif; ?>

  <form method="POST">
    <input type="text" name="username" placeholder="Username" required>

    <div class="password-container">
      <input type="password" name="password" placeholder="Password" id="password" required>
      <i class="fas fa-eye toggle-password" id="togglePassword"></i>
    </div>

    <button type="submit">Login</button>
  </form>
</div>

<script>
  //  password visibility
  const toggle = document.getElementById('togglePassword');
  const password = document.getElementById('password');

  toggle.addEventListener('click', function () {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
  });
</script>

</body>
</html>
