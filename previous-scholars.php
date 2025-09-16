<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

// Fetch scholarship students grouped by year
$result = $conn->query("SELECT * FROM scholarship_students ORDER BY year DESC, marks DESC");
$students = [];
while ($row = $result->fetch_assoc()) {
  $students[$row['year']][] = $row;
}
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
      Celebrating the achievements of our students who excelled in academics and the Grade 5 Scholarship.
      Their dedication, curiosity, and success inspire the next generation to aim high, embrace learning, and make a positive impact in the world.
    </p>
    <div class="hero-divider"></div>
  </div>
  <!-- Floating Shapes -->
  <div class="hero-shape shape1"></div>
  <div class="hero-shape shape2"></div>
  <div class="hero-shape shape3"></div>
  <div class="hero-shape shape4"></div>
</section>

<!-- SCHOLARS SECTION -->
<section class="scholars-section py-5">
  <div class="container">
    <?php if (!empty($students)): ?>
      <?php foreach ($students as $year => $year_students): ?>

        <div class="row g-4 mb-5" data-masonry='{"percentPosition": true }'>
          <?php foreach ($year_students as $student): ?>
            <div class="col-md-6 col-lg-4">
              <div class="scholar-masonry-card p-4 h-100">
                <h4><?= htmlspecialchars($student['name']) ?></h4>
                <p><strong>Year:</strong> <?= htmlspecialchars($student['year']) ?></p>
                <p><strong>Marks:</strong> <?= htmlspecialchars($student['marks']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="alert alert-info text-center">
        No scholarship students added yet. Please check back later.
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