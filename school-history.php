<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- HERO SECTION (Dark Background + Image) -->
<section class="hero-modern-section position-relative" style="background-color: #212529;">
  <div class="container py-5">
    <div class="row align-items-center">

      <!-- Left Text Content -->
      <div class="col-lg-6 text-white text-center text-lg-start mb-4 mb-lg-0">
        <h1 class="fw-bold mb-3" style="color: #f8f9fa;">History of Our School</h1>
        <p class="lead mb-4" style="color: #f8f9fa;">
          A journey through time—how our institution grew from humble beginnings to a beacon of education.
        </p>
      </div>

      <!-- Right Image -->
      <div class="col-lg-6">
        <div class="hero-img-wrapper rounded shadow overflow-hidden">
          <img src="images/school-history.jpg" class="img-fluid w-100 h-100" alt="School History" style="object-fit: cover; max-height: 300px;">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- HISTORY CONTENT SECTION -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color: #212529;">Our Legacy</h2>
      <p class="text-muted">From vision to reality – the evolution of excellence in education</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card border-0 shadow-sm p-4 bg-white">
          <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
            Our school was established in the year <strong>19XX</strong> with the vision of providing quality education
            to children from all backgrounds. What began as a small group of passionate educators has grown into a
            fully developed academic institution with modern facilities, a diverse student body, and a reputation for
            excellence in both academics and extracurricular activities.
          </p>
          <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
            Over the decades, the school has adapted to the changing times while holding fast to its core values:
            integrity, discipline, curiosity, and compassion. Major milestones include the introduction of advanced
            science labs in the 1980s, the launch of digital classrooms in the 2000s, and the implementation of a
            student-centered learning approach in recent years.
          </p>
          <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
            Today, we continue to grow under strong leadership and with unwavering support from our community. The
            success of our alumni in various fields stands as a testament to the strength of our educational foundation.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JS FILES -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
