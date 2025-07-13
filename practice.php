<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Practice Areas</title>
  <link rel="stylesheet" href="style.css"> <!-- Link your CSS here -->
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
 


<section class="practice-header">
  <h2>Practices Areas</h2>
  <p>Home / Practices Areas</p>
</section>

<section class="practice-section">
  <h3>Our Practices Areas</h3>
  <div class="practice-grid">
    <!-- Repeat this block for each law type -->
    <div class="practice-box">
      <i class="fas fa-university"></i>
      <h4>Civil Law</h4>
      <p> Civil law deals with non-criminal disputes between individuals, organizations, or both. This area covers a wide range of issues, including contracts, property, and family disputes. Whether you're dealing with a personal injury case or a property disagreement, our attorneys are here to ensure
         that your rights are protected and that you receive the justice you deserve.</p>
      <a href="#" class="learn-btn">Learn More</a>
    </div>

    <div class="practice-box">
      <i class="fas fa-users"></i>
      <h4>Family Law</h4>
      <p>Family law governs legal matters that affect family relationships, including divorce, child custody, adoption, and spousal support. We understand that these cases can be emotionally challenging, which is why we provide compassionate legal guidance to help you navigate these difficult times while 
        securing the best outcome for you and your loved ones.</p>
      <a href="#" class="learn-btn">Learn More</a>
    </div>

    <div class="practice-box">
      <i class="fas fa-hand-holding-usd"></i>
      <h4>Business Law</h4>
      <p>Business law encompasses a wide range of legal services designed to support businesses of all sizes. From incorporation and contracts to intellectual property and disputes, we provide expert legal counsel to help protect your business interests, ensure compliance with regulations, and resolve any challenges
         that may arise as your business grows.</p>
      <a href="#" class="learn-btn">Learn More</a>
    </div>

    <div class="practice-box">
      <i class="fas fa-graduation-cap"></i>
      <h4>Education Law</h4>
      <p>Education law focuses on legal issues related to schools, universities, students, and educators. Whether you're a parent seeking to resolve a school-related dispute or a student facing disciplinary action, we offer effective legal solutions to protect your rights and ensure a fair and just outcome in 
        educational matters.</p>
      <a href="#" class="learn-btn">Learn More</a>
    </div>

    <div class="practice-box">
      <i class="fas fa-gavel"></i>
      <h4>Criminal Law</h4>
      <p>Criminal law covers offenses that are considered harmful to society, from minor infractions to serious criminal charges. If you're facing criminal charges, it’s essential to have an experienced defense attorney by your side. Our team will provide a rigorous defense to help protect your rights and work towards the best 
        possible resolution for your case..</p>
      <a href="#" class="learn-btn">Learn More</a>
    </div>

    <div class="practice-box">
      <i class="fas fa-globe"></i>
      <h4>Cyber Law</h4>
      <p>Cyber law addresses legal issues related to the internet, digital communication, and online transactions. This rapidly evolving field covers topics like data protection, intellectual property, online privacy, and cybercrime. We offer expert advice and representation to help navigate the complex landscape of digital law and
         ensure your online interests are safeguarded.</p>
      <a href="#" class="learn-btn">Learn More</a>
    </div>
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
        <li><a href="contact.php">Contact</a></li>

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