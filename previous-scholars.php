<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

// Fetch previous scholars
$result = $conn->query("SELECT * FROM previous_scholars ORDER BY period_from ASC");
?>



<!-- Loader -->
<div class="loader" id="loader-fade">
  <div class="loader-container center-block">
    <div class="grid-row">
      <div class="col center-block">
        <ul class="loading reversed">
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav"></body>

<!-- HERO / Page Header -->
<section class="hero-advanced d-flex align-items-center">
  <div class="container text-center hero-content">
    <h1 class="hero-title">Previous Scholars</h1>
    <p class="hero-subtitle mx-auto">
      Celebrating the journey of our past pupils who carried knowledge, discipline, and service into the world.
      Their success stories inspire the next generation to dream big and achieve greater heights.
    </p>
    <div class="hero-divider"></div>
  </div>

  <!-- Floating Shapes -->
  <div class="hero-shape shape1"></div>
  <div class="hero-shape shape2"></div>
  <div class="hero-shape shape3"></div>
  <div class="hero-shape shape4"></div>
</section>

<!-- SCHOLARS MASONRY SECTION -->
<section class="scholars-section py-5">
  <div class="container">
    <?php if ($result && $result->num_rows > 0): ?>
      <div class="row g-4" data-masonry='{"percentPosition": true }'>
        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="col-md-6 col-lg-4">
            <div class="scholar-masonry-card p-4 h-100">

              <!-- Scholar Name -->
              <h4><?= htmlspecialchars($row['name']) ?></h4>

              <!-- Scholar Designation -->
              <p class="designation"><?= htmlspecialchars($row['designation']) ?></p>

              <!-- Scholar Period -->
              <p class="period"><?= htmlspecialchars($row['period_from']) ?> - <?= htmlspecialchars($row['period_to']) ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <div class="alert alert-info text-center">
        No previous scholars added yet. Please check back later.
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- Masonry JS -->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<?php include 'includes/footer.php'; ?>

<!-- JS FILES -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

<!-- External CSS -->
<link rel="stylesheet" href="css/previous-scholars.css">



</body>

</html>