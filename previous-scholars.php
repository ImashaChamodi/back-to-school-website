<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

// Fetch previous scholars
$result = $conn->query("SELECT * FROM previous_scholars ORDER BY period_from ASC");
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- HERO / Page Header with Gradient -->
<section class="hero" style="background: linear-gradient(135deg, #24c1dd, #000000); color: #fff; padding: 150px 0 100px;">
  <div class="container text-center" style="max-width: 900px;">
      <h1 class="mb-4" style="font-weight: 700; font-size: 3rem;">Previous Scholars</h1>
      <p class="lead" style="line-height: 1.8; font-size: 1.15rem;">
        At Kadanapitiya Primary School, we honor our past pupils who have carried the values of knowledge, discipline, and service into the world. 
        These scholars, once students here, have excelled in diverse fields — educators, professionals, and community leaders. 
        Their journeys inspire the current generation to dream big and achieve greater heights.
      </p>
  </div>
</section>

<!-- SCHOLARS MASONRY SECTION -->
<section class="py-5" style="background-color: #f7fafd;">
  <div class="container">
    <?php if($result && $result->num_rows > 0): ?>
      <div class="row g-4" data-masonry='{"percentPosition": true }'>
        <?php while($row = $result->fetch_assoc()): ?>
          <div class="col-md-6 col-lg-4">
            <div class="scholar-masonry-card p-4 h-100"
                 style="background: #fff; border-radius: 16px; border-left: 6px solid #24c1dd; 
                        box-shadow: 0 8px 20px rgba(0,0,0,0.08); transition: transform 0.3s, box-shadow 0.3s;">
              
              <!-- Scholar Name -->
              <h4 style="color:#000; font-weight:600; margin-bottom:8px; font-size:1.25rem;">
                <?= htmlspecialchars($row['name']) ?>
              </h4>

              <!-- Scholar Designation -->
              <p style="color:#555; font-size:1rem; margin-bottom:6px;">
                <?= htmlspecialchars($row['designation']) ?>
              </p>

              <!-- Scholar Period -->
              <p style="color:#777; font-size:0.9rem; margin-top:6px;">
                <?= htmlspecialchars($row['period_from']) ?> - <?= htmlspecialchars($row['period_to']) ?>
              </p>
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

<!-- Custom CSS -->
<style>
body {
    scroll-padding-top: 100px; /* fix navbar overlap */
    font-family: 'Poppins', sans-serif;
}

/* HERO SECTION */
.hero h1 {
    font-weight: 700;
    color: #fff;
}
.hero p {
    color: #f0f0f0;
}

/* SCHOLAR CARDS */
.scholar-masonry-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
}

.scholar-masonry-card h4 {
    color: #24c1dd;
}

.scholar-masonry-card p {
    margin-bottom: 4px;
}

/* Responsive */
@media (max-width: 991px) {
    .hero {
        padding: 120px 0 80px;
    }
    .hero h1 {
        font-size: 2.2rem;
    }
    .hero p {
        font-size: 1rem;
    }
}
</style>
</body>
</html>
