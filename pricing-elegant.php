<?php include 'includes/header.php'; ?>
<div class="custom-navbar-dark">
  <?php include 'includes/navbar.php'; ?>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- Hero Section -->
<section class="position-relative" style="background-color: #24c1dd; padding: 140px 0 80px 0; z-index: 1;">
  <div class="container">
    <div class="row align-items-center justify-content-between flex-column-reverse flex-md-row">
      
      <!-- Text Column -->
      <div class="col-md-6 text-center text-md-start">
        <h1 class="display-4 fw-bold text-white">Monthly Giving</h1>
        <p class="lead" style="color:#24c1dd;">Be a Sustainer of Education Every Month</p>
          <p style="color:#212529;">
            Small monthly contributions make a big difference. Join our community of consistent supporters and help schools thrive every day.
          </p>
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

<!-- Info Section -->
<section class="py-5 bg-light-gray">
  <div class="container">
    <!-- What It Means -->
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="fw-bold" style="color:#212529;">Why Give Monthly?</h2>
        <p class="lead" style="color:#212529;">
          Monthly donations allow us to plan long-term solutions and provide continuous support to schools in need. 
          Even a small amount can ensure children get uninterrupted access to education.
        </p>
      </div>
    </div>

    <!-- Benefits Section -->
    <div class="row text-center mb-5">
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="ti ti-loop" style="font-size: 48px; color:#24c1dd;"></i>
          <h5 class="mt-3" style="color:#212529;">Consistent Impact</h5>
          <p style="color:#212529;">Monthly gifts help us respond quickly to urgent needs without delay.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="ti ti-calendar" style="font-size: 48px; color:#24c1dd;"></i>
          <h5 class="mt-3" style="color:#212529;">Long-Term Planning</h5>
          <p style="color:#212529;">We can build sustainable programs with your ongoing support.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="ti ti-gift" style="font-size: 48px; color:#24c1dd;"></i>
          <h5 class="mt-3" style="color:#212529;">Easy & Flexible</h5>
          <p style="color:#212529;">Pause or change your donation anytime with just one click.</p>
        </div>
      </div>
    </div>

    <!-- Monthly Donation Form -->
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow p-4">
          <h3 class="mb-4 fw-bold text-center" style="color:#212529;">Start Your Monthly Gift</h3>
          <form action="process_donation.php" method="POST">
            <input type="hidden" name="type" value="monthly">
            <div class="mb-3">
              <label for="name" class="form-label" style="color:#212529;">Full Name</label>
              <input type="text" class="form-control" id="name" name="donorName" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label" style="color:#212529;">Email Address</label>
              <input type="email" class="form-control" id="email" name="donorEmail" required>
            </div>
            <div class="mb-3">
              <label for="amount" class="form-label" style="color:#212529;">Monthly Amount (USD)</label>
              <input type="number" class="form-control" id="amount" name="donationAmount" min="1" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-summer-sky text-white px-5 py-2">Start Giving Monthly</button>
            </div>
          </form>
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
