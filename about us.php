<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About</title>
  <link rel="stylesheet" href="style.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> <!-- For icons -->
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
    <a  href="index.php#form" class="btn-appointment">Get Appointment</a>


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

<!-- About Header -->
<section class="practice-header">
  <h2>About Us</h2>
  <p>Home / About</p>
</section>

<!-- About Us Section -->
<div class="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-6">
        <div class="about-img">
          <img src="img/about.jpg" alt="About Image">
        </div>
      </div>
      <div class="col-lg-7 col-md-6">
        <div class="section-header">
          <h2>Learn About Us</h2>
        </div>
        <div class="about-text">
          <p>
           Salengga Law Firm has been dedicated to serving the Filipino people with professionalism, integrity, and commitment. We provide expert legal services in family law, 
           criminal defense, corporate consultation, and more.
          </p>
          <p>
            With years of experience and a trusted reputation, we take pride in helping our clients 
            navigate complex legal challenges with confidence.
          </p>
          <a class="btn" href="#">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Timeline Section -->
<div class="timeline">
  <div class="container">
    <div class="section-header">
      <h2>Learn About Our Journey</h2>
    </div>
    <div class="timeline-start">
      <div class="timeline-container left">
        <div class="timeline-content">
          <h2><span>2020</span> Expanded to Corporate Law</h2>
          <p>
            We began serving more local businesses with their corporate needs.
          </p>
        </div>
      </div>
      <div class="timeline-container right">
        <div class="timeline-content">
          <h2><span>2018</span> Moved to  Main Office</h2>
          <p>
            Our new headquarters opened in the heart of the legal district for better access and service.
          </p>
        </div>
      </div>
     
    </div>
  </div>
</div>



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
 