<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<section class="hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/About_image.jpg') no-repeat center center fixed; background-size: cover; padding-top: 120px; padding-bottom: 80px;">
  <div class="container text-center text-white" style="max-width: 900px;">
      <h1 class="mb-3" style="font-weight: 500;">The Board</h1>
      <p class="lead" style="line-height: 1.7; color: #f1f1f1;">
        Our Board of Directors oversees school management and strategic planning. Currently, the board has not been finalized. 
        Once the selection process is complete, all members and their roles will be updated here. The Board ensures that school operations remain transparent, accountable, and focused on student welfare.
      </p>
  </div>
</section>

<section class="py-5" style="background-color: #f7fafd;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="p-5 rounded shadow-sm" style="background: #ffffff; border-left: 6px solid #24c1dd;">
            <p style="line-height:1.8; color:#333;">
                Why a Board? It ensures proper governance, effective decision-making, and responsible use of school funds. 
                All decisions made by the Board aim to improve education, infrastructure, and student development.
            </p>
            <p style="line-height:1.8; color:#555;">
                <strong>Note:</strong> Details will be updated after board finalization.
            </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
