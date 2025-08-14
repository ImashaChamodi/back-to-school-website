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

<!-- HERO SECTION (Full Width, Template Colors) -->
<section class="hero-section position-relative" style="background-color: #212529;">
  <div class="container py-5">
    <div class="row align-items-center">

      <!-- Left Content -->
      <div class="col-lg-6 text-white text-center text-lg-start mb-4 mb-lg-0">
        <h1 class="fw-bold display-5" style="color: #f8f9fa;">
          Our Generous Donors
        </h1>
        <p class="lead mb-4" style="color: #e9ecef;">
          Every contribution brings us closer to a brighter future for the students of Kadanapitiya School. 
          Together, we build dreams.
        </p>
        <a href="#donate-now" class="btn btn-lg shadow-sm" 
           style="background-color: #24c1dd; color: #fff; border-radius: 50px;">
          Become a Donor
        </a>
      </div>

      <!-- Right Image -->
      <div class="col-lg-6">
        <div class="rounded shadow overflow-hidden" style="max-height: 350px;">
          <img src="images/donors-hero.jpg" 
               class="img-fluid w-100 h-100" 
               alt="Donors Image" 
               style="object-fit: cover;">
        </div>
      </div>

    </div>
  </div>
</section>



<!-- CURRENT DONORS -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color: #212529;">Current Donors</h2>
      <p class="text-muted">Meet the generous individuals who help us create brighter futures.</p>
    </div>
    
    <div class="row">
      <?php
      if($result && $result->num_rows > 0){
          while($row = $result->fetch_assoc()){
              echo "<div class='col-md-4 mb-4'>";
              echo "<div class='card shadow-sm border-0 h-100'>";
              echo "<div class='card-body'>";
              echo "<h5 class='fw-bold' style='color: #212529;'>".htmlspecialchars($row['full_name'])."</h5>";
              echo "<p class='mb-1'><strong>Type:</strong> ".htmlspecialchars(ucfirst($row['donation_type']))."</p>";
              if($row['donation_type'] == 'finance'){
                  echo "<p class='mb-1'><strong>Amount:</strong> ".htmlspecialchars($row['amount'])."</p>";
              } else {
                  echo "<p class='mb-1'><strong>Resource:</strong> ".htmlspecialchars($row['resource_details'])."</p>";
              }
              echo "<p class='text-muted mb-0'><small>".htmlspecialchars($row['submitted_at'])."</small></p>";
              echo "</div></div></div>";
          }
      } else {
          echo "<div class='col-12 text-center'><p class='text-muted'>No donors yet.</p></div>";
      }
      ?>
    </div>
  </div>
</section>

<!-- DONATION FORM -->
<section id="donation-form" class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color: #212529;">Become a Donor</h2>
      <p class="text-muted">Your contribution, whether financial or resource-based, helps transform lives.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form action="submit_donation.php" method="POST" class="card shadow-sm border-0 p-4">
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Telephone</label>
            <input type="tel" name="telephone" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Donation Type</label>
            <select name="donation_type" class="form-select" id="donationType" required>
              <option value="">Select Type</option>
              <option value="finance">Finance</option>
              <option value="resource">Resource</option>
            </select>
          </div>

          <div class="mb-3" id="financeAmount" style="display:none;">
            <label class="form-label">Amount (LKR)</label>
            <input type="number" name="amount" class="form-control" min="1">
          </div>

          <div class="mb-3" id="resourceDetails" style="display:none;">
            <label class="form-label">Resource Details</label>
            <textarea name="resource_details" class="form-control" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-lg" style="background-color: #24c1dd; color: white;">Submit Donation</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
  document.getElementById('donationType').addEventListener('change', function(){
    document.getElementById('financeAmount').style.display = this.value === 'finance' ? 'block' : 'none';
    document.getElementById('resourceDetails').style.display = this.value === 'resource' ? 'block' : 'none';
  });
</script>
</body>
</html>
