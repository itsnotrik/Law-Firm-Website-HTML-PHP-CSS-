<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Case Studies</title>
  <link rel="stylesheet" href="style.css">
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
<!-- About Header -->
<section class="practice-header">
  <h2>Case Studies</h2>
  <p>Home / Case Studies</p>
</section>
 

  <!-- Case Study Portfolio Section -->
  <section class="portfolio">
    <div class="section-header">
      <h2>Our Case Studies</h2>
    </div>
<div class="row">
  <div class="col-12">
    <ul id="portfolio-flters">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".civil">Civil</li>
      <li data-filter=".criminal">Criminal</li>
      <li data-filter=".business">Business</li>
    </ul>
  </div>
</div>


    <div class="portfolio-container">
  
      <!-- Criminal Case -->
<div class="portfolio-item criminal">
  <div class="portfolio-wrap">
    <img src="img/murder.jpg" alt="Case 1">
    <figure>
      <p>Crime</p>
      <a href="#">Murder Case</a>
      <span>06-Jul-2025</span>
    </figure>
  </div>
</div>

<!-- Business Case -->
<div class="portfolio-item business">
  <div class="portfolio-wrap">
    <img src="img/contract.jpg" alt="Case 2">
    <figure>
      <p>Business</p>
      <a href="#">Contract Dispute</a>
      <span>06-Jul-2025</span>
    </figure>
  </div>
</div>

<div class="portfolio-item civil">
      <div class="portfolio-wrap">
        <img src="img/divorce.png" alt="Portfolio Image">
        <figure>
          <p>Family</p>
          <a href="#">Divorce Case</a>
          <span>06-Jul-2025</span>
        </figure>
      </div>
    </div>

    <div class="portfolio-item civil">
      <div class="portfolio-wrap">
        <img src="img/moneylaundering.jpg" alt="Portfolio Image">
        <figure>
          <p>Finance</p>
          <a href="#">Money Laundering</a>
          <span>06-Jul-2025</span>
        </figure>
      </div>
    </div>

    <div class="portfolio-item business">
      <div class="portfolio-wrap">
        <img src="img/labor.jpg" alt="Portfolio Image">
        <figure>
          <p>Business</p>
          <a href="#">Labor Violations</a>
          <span>06-Jul-2025 </span>
        </figure>
      </div>
    </div>

    <div class="portfolio-item business">
      <div class="portfolio-wrap">
        <img src="img/propertycases.jpg" alt="Portfolio Image">
        <figure>
          <p>Finance</p>
          <a href="#">Property Sharing Case</a>
          <span>06-Jul-2025</span>
        </figure>
      </div>
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
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="footer-social">
      <h4>Follow Us</h4>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
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
