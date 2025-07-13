<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Law Firm Appointment Booking</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- Header/Navbar -->
<header class="navbar">
      <div class="logo">
  <img src="img/logo.png" alt="DKM Law Logo">
</div>
  <div class="logo">Your Firm in the Philippines</div>
  <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="about us.php">About</a></li>
    <li><a href="practice.php">Practice</a></li>
    <li><a href="case-studies.php">Case Studies</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
  <div class="nav-icons">
   
    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    <a href="#form" class="btn-appointment">Get Appointment</a>

  </div>
</header>
<!-- Carousel Section -->
<section class="carousel">
  <div class="slides">
    <img src="img/carousel1.jpg" class="slide active" alt="Slide 1">
    <img src="img/carousel 2.jpg" class="slide" alt="Slide 2">
    <img src="img/carousel 3.jpg" class="slide" alt="Slide 3">
  </div>
  <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
  <button class="next" onclick="moveSlide(1)">&#10095;</button>
</section>


<!-- Hero Section -->
<section class="hero">
  <div class="overlay">
    <h1>We prepared to oppose for you</h1>
    <p>Book your consultation today with our top legal experts</p>
    <a href="#form" class="btn-consult">Get Free Consultation</a>
  </div>
</section>

<!-- Appointment Form -->
<section id="form" class="form-container">
  <h2>Book an Appointment</h2>
  <form action="submit.php" method="POST">
    <label>Full Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Contact Number:</label>
    <input type="text" name="contact" required>

    <label>Purpose of Appointment:</label>
    <textarea name="purpose" rows="4" required></textarea>

    <label>Appointment Date:</label>
    <input type="date" name="appointment_date" min="<?php echo date('Y-m-d'); ?>" required>


    <label>Appointment Time:</label>
    <input type="time" name="appointment_time" min="09:00" max="17:00" required>


    <input type="submit" name="submit" value="Book Appointment">
  </form>
</section>
<!-- Footer -->
<footer class="site-footer">
  <div class="footer-content">
    <div class="footer-left">
      <h3>Salengga Law Firm</h3>
      <p>5th Floor Pasig Revolving Tower, Market Avenue, San Nicolas,Pasig City, Philippines, 1600</p>
      <p>Email: samplelawfirm.com | Phone: +63 123456789</p>
    </div>

    <div class="footer-links">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="about us.php">About</a></li>
        <li><a href="practice.php">Practice Areas</a></li>
        <li><a href="case-studies.php">Case Studies</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul>
       <li><a href="admin-login.php">Login as Admin</a></li> 
</ul>
    </div>

    <div class="footer-social">
      <h4>Follow Us</h4>
      <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; Designed By <a href="https://www.linkedin.com/in/your-linkedin-username" target="_blank">Rik Danielle Argarin</a>.</p>

  </div>
</footer>

</body>
<script>
  let currentSlide = 0;
  const slides = document.querySelectorAll('.slide');

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove('active');
      if (i === index) slide.classList.add('active');
    });
  }

  function moveSlide(step) {
    currentSlide = (currentSlide + step + slides.length) % slides.length;
    showSlide(currentSlide);
  }

  // Auto-play every 5 seconds
  setInterval(() => {
    moveSlide(1);
  }, 5000);

  // Show initial slide
  showSlide(currentSlide);
</script>

</html>
