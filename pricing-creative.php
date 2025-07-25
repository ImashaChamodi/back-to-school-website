<?php include 'includes/header.php'; ?>

<!-- Navbar (Dark Style Wrapper) -->
<div class="custom-navbar-dark" style="position: relative; z-index: 10;">
    <?php include 'includes/navbar.php'; ?>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">
    
<!-- Hero Section -->
<section class="position-relative" style="background-color: #24c1dd; padding: 140px 0 80px 0; z-index: 1;">
  <div class="container">
    <div class="row align-items-center justify-content-between flex-column-reverse flex-md-row">
      
      <!-- Text Column -->
      <div class="col-md-6 text-center text-md-start">
        <h1 class="display-4 fw-bold text-white">Support a School</h1>
        <p class="lead" style="color:#ffffffcc;">Bring life-changing support to underserved classrooms</p>
        <a href="#donate" class="btn btn-outline-light px-4 py-2 mt-3">Donate Now</a>
      </div>

      <!-- Image Column -->
      <div class="col-md-5 mb-4 mb-md-0">
        <div class="rounded shadow overflow-hidden">
          <img src="images/aboutus.jpg" class="img-fluid" alt="School Support Image" style="opacity: 0.9;">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Needs and Stories -->
<section class="py-5 bg-light-gray">
  <div class="container">
    <!-- Needs Overview -->
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color:#212529;">Urgent Needs of Schools</h2>
      <p class="lead">Your help can provide vital classroom materials and safe environments.</p>
    </div>

    <!-- Impact Cards -->
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow">
          <img src="images/aboutus.jpg" class="card-img-top" alt="Books" style="height: 250px; object-fit: cover;">
          <div class="card-body">
            <h5 class="fw-bold" style="color:#212529;">Books for Every Child</h5>
            <p>Donations enabled 500+ children to receive textbooks in remote villages.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow">
          <img src="images/impact2.jpg" class="card-img-top" alt="Classroom Renovation" style="height: 250px; object-fit: cover;">
          <div class="card-body">
            <h5 class="fw-bold" style="color:#212529;">Classroom Transformations</h5>
            <p>Old, broken schools rebuilt into safe learning spaces, thanks to your generosity.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- How You Can Help -->
    <div class="row text-center mt-5">
      <div class="col-md-12">
        <h2 class="fw-bold mb-4" style="color:#212529;">Ways You Can Help</h2>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="ti ti-package" style="font-size: 48px; color:#24c1dd;"></i>
          <h5 class="mt-3">One-Time Donation</h5>
          <p>Make an immediate difference to schools in critical need.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="ti ti-box" style="font-size: 48px; color:#24c1dd;"></i>
          <h5 class="mt-3">Donate Supplies</h5>
          <p>Books, stationery, uniforms — all help transform education quality.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="ti ti-hand-heart" style="font-size: 48px; color:#24c1dd;"></i>
          <h5 class="mt-3">Volunteer</h5>
          <p>Join school projects, learning events, or community drives to help in person.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Donation Form -->
<section id="donate" class="bg-white py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card p-4 shadow">
          <h3 class="fw-bold text-center mb-4" style="color:#212529;">Make a Donation</h3>
          <form action="process_donation.php" method="POST">
            <div class="mb-3">
              <label for="donorName" class="form-label">Name</label>
              <input type="text" class="form-control" id="donorName" name="donorName" required>
            </div>
            <div class="mb-3">
              <label for="donorEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="donorEmail" name="donorEmail" required>
            </div>
            <div class="mb-3">
              <label for="donationAmount" class="form-label">Donation Amount (USD)</label>
              <input type="number" class="form-control" id="donationAmount" name="donationAmount" min="1" required>
            </div>
            <div class="mb-3">
              <label for="donationMessage" class="form-label">Message (optional)</label>
              <textarea class="form-control" id="donationMessage" name="donationMessage" rows="3"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-summer-sky text-white px-5 py-2">Donate Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JS files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>
</body>
</html>
