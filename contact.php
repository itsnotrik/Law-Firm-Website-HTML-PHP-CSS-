<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link rel="stylesheet" href="style.css"> <!-- Your global styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- Navbar -->
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
      <li><a href="#">Contact</a></li>
    </ul>
    <div class="nav-icons">
      
      <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
      <a href="index.php#form" class="btn-appointment">Get Appointment</a>
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

<!-- Header Section -->
<section class="practice-header">
  <h2>Contact Us</h2>
  <p>Home / Contact Us</p>
</section>

<!-- Contact Section -->
<section class="contact-page">
  <h3 class="section-title">Contact Us</h3>
  <div class="contact-container">
    <!-- Left: Info -->
    <div class="contact-info">
      <div class="info-box">
        <i class="fas fa-map-marker-alt"></i>
        <div>
          <h4>Location</h4>
          <p>5th Floor Pasig Revolving Tower,Market Avenue, San Nicolas,Pasig City, Philippines, 1600</p>
        </div>
      </div>
      <div class="info-box">
        <i class="fas fa-phone"></i>
        <div>
          <h4>Phone</h4>
          <p>+63 91234567</p>
        </div>
      </div>
      <div class="info-box">
        <i class="fas fa-envelope"></i>
        <div>
          <h4>Email</h4>
          <p>Contactus@salengga.com</p>
        </div>
      </div>
    </div>

    <!-- Right: Form -->
    <form class="contact-form" action="submit-contact.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="text" name="subject" placeholder="Subject" required>
      <textarea name="message" placeholder="Message" rows="5" required></textarea>
      <button type="submit">SUBMIT</button>
    </form>
  </div>
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
        <li><a href="#">Contact</a></li>
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
  document.addEventListener('DOMContentLoaded', () => {
    const filters = document.querySelectorAll('#portfolio-flters li');
    const items = document.querySelectorAll('.portfolio-item');

    filters.forEach(filter => {
      filter.addEventListener('click', () => {
        filters.forEach(f => f.classList.remove('filter-active'));
        filter.classList.add('filter-active');

        const filterValue = filter.getAttribute('data-filter');

        items.forEach(item => {
          if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  });
</script>
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

</body>
</html>
