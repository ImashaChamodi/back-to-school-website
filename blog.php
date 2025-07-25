<?php include 'includes/header.php'; ?>
<div class="custom-navbar-dark">
  <?php include 'includes/navbar.php'; ?>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- Custom Hero Section with Different Design -->
<section class="hero-news-section position-relative" style="height: 75vh; background: url('images/news-hero.jpg') center center / cover no-repeat;">
  <div class="overlay position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.6); top: 0; left: 0;"></div>
  <div class="container h-100 position-relative z-1 d-flex align-items-center justify-content-center text-center">
    <div class="text-white">
      <h1 class="display-4 fw-bold">Latest News & Updates</h1>
      <p class="lead">Stay informed on how we’re helping rural schools and the lives we’re changing.</p>
    </div>
  </div>
</section>

<!-- News Cards Section -->
<section class="py-5 bg-light-gray">
  <div class="container">
    <div class="row mb-4 text-center">
      <div class="col-md-12">
        <h2 class="fw-bold" style="color:#212529;">Recent Articles & Stories</h2>
        <p style="color:#212529;">Catch up on our latest work, school events, community support, and success stories.</p>
      </div>
    </div>

    <div class="row g-4">
      <!-- News Item 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="images/news1.jpg" class="card-img-top" alt="News 1">
          <div class="card-body">
            <h5 class="card-title" style="color:#24c1dd;">Back-to-School Donation Drive Success</h5>
            <p class="card-text" style="color:#212529;">Over 500 students received new school supplies thanks to your support.</p>
            <a href="news-detail1.php" class="text-decoration-none" style="color:#24c1dd;">Read More →</a>
          </div>
        </div>
      </div>

      <!-- News Item 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="images/news2.jpg" class="card-img-top" alt="News 2">
          <div class="card-body">
            <h5 class="card-title" style="color:#24c1dd;">Volunteers Rebuild Rural School Roof</h5>
            <p class="card-text" style="color:#212529;">With teamwork and effort, an old classroom gets a fresh start.</p>
            <a href="news-detail2.php" class="text-decoration-none" style="color:#24c1dd;">Read More →</a>
          </div>
        </div>
      </div>

      <!-- News Item 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="images/news3.jpg" class="card-img-top" alt="News 3">
          <div class="card-body">
            <h5 class="card-title" style="color:#24c1dd;">New Partnership with ABC Foundation</h5>
            <p class="card-text" style="color:#212529;">Corporate collaboration brings new hope for underserved children.</p>
            <a href="news-detail3.php" class="text-decoration-none" style="color:#24c1dd;">Read More →</a>
          </div>
        </div>
      </div>

      <!-- Add more items as needed -->
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
