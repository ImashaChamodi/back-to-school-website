<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

// Fetch approved donors
$result = $conn->query("SELECT * FROM donations WHERE status='approved' ORDER BY submitted_at DESC");
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- HERO SECTION (Full Width Image + Overlay) -->
<section class="position-relative text-white" style="background: url('images/donors-hero.jpg') center/cover no-repeat; min-height: 60vh;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(33,37,41,0.7);"></div>
  <div class="container position-relative z-1 d-flex flex-column justify-content-center align-items-center text-center h-100">
    <h1 class="fw-bold mb-3" style="color: #24c1dd;">Our Generous Donors</h1>
    <p class="lead mb-4" style="max-width: 700px;">
      Every gift — whether financial or in-kind — strengthens the future of Kadanapitiya School.  
      Thank you for being part of our mission.
    </p>
    <a href="#donors-list" class="btn btn-lg" style="background-color: #24c1dd; color: #fff;">View Donors</a>
  </div>
</section>

<!-- ABOUT DONATION MISSION -->
<section class="py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="fw-bold text-center mb-4" style="color: #212529;">Why We Appreciate Every Donor</h2>
        <p class="text-muted fs-5">
          BackToSchool’s mission thrives on the generosity of individuals and organizations who believe in the power of education.  
          Each donor contributes in their own way — through financial support or valuable resources — ensuring that the students of  
          Kadanapitiya Primary School have access to the tools and opportunities they deserve.
        </p>
        <p class="text-muted fs-5 mb-0">
          This page celebrates those who have stepped forward to make a difference. Every contribution, big or small, plays a role in  
          shaping brighter futures for our children.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CURRENT DONORS LIST -->
<section id="donors-list" class="py-5">
  <div class="container">
    <h2 class="fw-bold text-center mb-5" style="color: #212529;">List of Approved Donors</h2>
    <div class="row">
      <?php
      if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<div class='col-md-4 mb-4'>";
              echo "  <div class='card shadow-sm h-100 border-0'>";
              echo "    <div class='card-body'>";
              echo "      <h5 class='card-title fw-bold' style='color: #24c1dd;'>".htmlspecialchars($row['full_name'])."</h5>";
              echo "      <p class='text-muted mb-1'><strong>Type:</strong> ".ucfirst(htmlspecialchars($row['donation_type']))."</p>";
              if ($row['donation_type'] == 'finance') {
                  echo "  <p class='text-muted mb-1'><strong>Amount:</strong> ".htmlspecialchars($row['amount'])."</p>";
              } else {
                  echo "  <p class='text-muted mb-1'><strong>Resource:</strong> ".htmlspecialchars($row['resource_details'])."</p>";
              }
              echo "      <p class='text-muted mb-0'><small>Donated on ".date('F j, Y', strtotime($row['submitted_at']))."</small></p>";
              echo "    </div>";
              echo "  </div>";
              echo "</div>";
          }
      } else {
          echo "<p class='text-center text-muted'>No donors have been approved yet.</p>";
      }
      ?>
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
