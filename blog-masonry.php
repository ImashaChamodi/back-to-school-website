<?php include 'includes/header.php'; ?>
<div class="custom-navbar-dark">
  <?php include 'includes/navbar.php'; ?>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center justify-content-center text-center" style="background: url('images/success-hero.jpg') center center / cover no-repeat; height: 70vh; position: relative;">
  <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position:absolute; top:0; left:0; right:0; bottom:0;"></div>
  <div class="container position-relative z-1 text-white">
    <h1 class="display-4 fw-bold">Success Stories</h1>
    <p class="lead">Real lives changed through your support.</p>
  </div>
</section>

<!-- Stories Section -->
<section class="py-5 bg-light-gray">
  <div class="container">
    <div class="row mb-5 text-center">
      <div class="col-md-12">
        <h2 class="fw-bold" style="color: #212529;">How Your Support Makes a Difference</h2>
        <p style="color: #212529;">Here are a few inspiring stories from children, schools, and communities uplifted by your help.</p>
      </div>
    </div>

    <div class="row g-4">
      <!-- Story 1 -->
      <div class="col-md-6">
        <div class="card border-0 shadow-sm h-100">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="images/story1.jpg" class="img-fluid h-100 w-100 object-fit-cover" alt="Story 1">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title" style="color:#24c1dd;">Asha’s Journey Back to School</h5>
                <p class="card-text">After her school closed due to poor conditions, 9-year-old Asha is now back in class with new uniforms and hope thanks to donor support.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Story 2 -->
      <div class="col-md-6">
        <div class="card border-0 shadow-sm h-100">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="images/story2.jpg" class="img-fluid h-100 w-100 object-fit-cover" alt="Story 2">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title" style="color:#24c1dd;">New Classrooms, New Dreams</h5>
                <p class="card-text">An old rural school got renovated and now accommodates over 120 students who had stopped attending due to unsafe structures.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Story 3 -->
      <div class="col-md-6">
        <div class="card border-0 shadow-sm h-100">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="images/story3.jpg" class="img-fluid h-100 w-100 object-fit-cover" alt="Story 3">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title" style="color:#24c1dd;">Volunteer Power Transforms Lives</h5>
                <p class="card-text">With help from volunteers, 30+ kids now enjoy proper classrooms, sanitation, and a garden they maintain as part of learning.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Story 4 -->
      <div class="col-md-6">
        <div class="card border-0 shadow-sm h-100">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="images/story4.jpg" class="img-fluid h-100 w-100 object-fit-cover" alt="Story 4">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title" style="color:#24c1dd;">A School Saved from Closure</h5>
                <p class="card-text">One rural school was weeks away from shutting down. After urgent funding, it now thrives with new furniture and teaching tools.</p>
              </div>
            </div>
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
