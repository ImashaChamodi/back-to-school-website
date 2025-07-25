<?php include 'includes/header.php'; ?>
<div class="custom-navbar-dark">
  <?php include 'includes/navbar.php'; ?>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center justify-content-center text-center" style="background: url('images/insight-hero.jpg') center center / cover no-repeat; height: 70vh; position: relative;">
  <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position:absolute; top:0; left:0; right:0; bottom:0;"></div>
  <div class="container position-relative z-1 text-white">
    <h1 class="display-4 fw-bold">Education Insights</h1>
    <p class="lead">Explore research, trends, and expert opinions on improving rural education.</p>
  </div>
</section>

<!-- Insights Section -->
<section class="py-5 bg-light-gray">
  <div class="container">
    <div class="row mb-5 text-center">
      <div class="col-md-12">
        <h2 class="fw-bold" style="color: #212529;">Featured Educational Insights</h2>
        <p style="color: #212529;">Our curated articles and reports offer a deeper understanding of the challenges and opportunities in rural education.</p>
      </div>
    </div>

    <div class="row g-4">
      <!-- Insight 1 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="images/insight1.jpg" class="card-img-top" alt="Insight 1">
          <div class="card-body">
            <h5 class="card-title" style="color:#24c1dd;">Bridging the Digital Divide</h5>
            <p class="card-text">A look at how mobile technology is helping students in remote villages access quality learning tools.</p>
            <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>

      <!-- Insight 2 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="images/insight2.jpg" class="card-img-top" alt="Insight 2">
          <div class="card-body">
            <h5 class="card-title" style="color:#24c1dd;">The Impact of Nutrition on Learning</h5>
            <p class="card-text">How school meals improve student focus, attendance, and academic performance in low-resource areas.</p>
            <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>

      <!-- Insight 3 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="images/insight3.jpg" class="card-img-top" alt="Insight 3">
          <div class="card-body">
            <h5 class="card-title" style="color:#24c1dd;">Training Rural Teachers for the Future</h5>
            <p class="card-text">Innovative training models helping rural educators adapt to 21st-century learning techniques.</p>
            <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>

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
