<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">


  <!-- HERO SECTION -->
  <section class="hero"
    style="
    background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('images/About_image.jpg') no-repeat center center fixed; 
    background-size: cover; 
    min-height: 55vh; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    text-align: center;
    padding: 60px 20px;
">
    <div class="container text-white" style="max-width: 700px;">
      <h1 class="mb-3" style="font-weight: 600; font-size: 2.8rem; letter-spacing: 1px;">Audit Reports</h1>
      <p class="lead" style="line-height: 1.8; color: #e8e8e8; font-size: 1.1rem;">
        Audit reports reflect our commitment to transparency, accountability, and proper utilization of resources received from donors for the benefit of our students and school development.
      </p>
    </div>
  </section>

  <!-- CONTENT SECTION -->
  <section class="py-5" style="background-color: #f7fafd;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="p-5 rounded shadow-sm" style="background: #ffffff; border-left: 6px solid #24c1dd;">
            <p style="line-height:1.8; color:#333;">
              ⚠️ <strong>Note:</strong> The current section is still under preparation. The financial year is not yet completed, and the processes are ongoing. We expect to finalize everything by <strong>March 31, 2026</strong>. After that, the relevant documents and reports will be uploaded. Thank you for your patience as we complete the necessary procedures.
            </p>
            <p style="line-height:1.8; color:#555;">
              <strong>Reminder:</strong> Reports will be uploaded after audit completion.
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