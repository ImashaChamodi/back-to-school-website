<?php include 'includes/header.php'; ?>
<div class="custom-navbar-dark">
  <?php include 'includes/navbar.php'; ?>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- Hero Section -->
<section style="height: 80vh;">
  <div class="container-fluid h-100">
    <div class="row h-100">

      <!-- Left Image -->
      <div class="col-md-6 p-0">
        <div style="height: 100%; background: url('images/corporate-support.jpg') center center / cover no-repeat;"></div>
      </div>

      <!-- Right Content -->
      <div class="col-md-6 d-flex align-items-center justify-content-center bg-light text-center">
        <div class="p-4">
          <h1 class="display-4 fw-bold" style="color:#212529;">Corporate Support</h1>
          <p class="lead" style="color:#24c1dd;">Partner with Us to Make a Lasting Impact</p>
          <p style="color:#212529;">
            We invite companies to join us in transforming the future of education for rural children.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Partnership Benefits -->
<section class="py-5 bg-light-gray">
  <div class="container">
    <div class="row mb-5 text-center">
      <div class="col-md-12">
        <h2 class="fw-bold" style="color:#212529;">Why Partner with Us?</h2>
        <p class="lead" style="color:#212529;">
          Corporate sponsorships enable real change. By joining hands, we can improve infrastructure, provide supplies, and empower communities.
        </p>
      </div>
    </div>

    <div class="row text-center mb-5">
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="ti ti-handshake" style="font-size: 48px; color:#24c1dd;"></i>
          <h5 class="mt-3" style="color:#212529;">CSR Integration</h5>
          <p style="color:#212529;">Align your corporate social responsibility goals with impactful education initiatives.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="ti ti-megaphone" style="font-size: 48px; color:#24c1dd;"></i>
          <h5 class="mt-3" style="color:#212529;">Brand Visibility</h5>
          <p style="color:#212529;">Your support is recognized across our events, publications, and school campaigns.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="ti ti-users" style="font-size: 48px; color:#24c1dd;"></i>
          <h5 class="mt-3" style="color:#212529;">Employee Engagement</h5>
          <p style="color:#212529;">Involve your team through volunteering days, school visits, and fundraising challenges.</p>
        </div>
      </div>
    </div>

    <!-- Sponsorship Models -->
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="fw-bold" style="color:#212529;">Ways to Support</h2>
        <p class="lead" style="color:#212529;">We offer customized partnership models to fit your company’s size and CSR vision.</p>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm border-0 text-center h-100">
          <div class="card-body">
            <h4 class="fw-bold" style="color:#24c1dd;">Adopt a School</h4>
            <p style="color:#212529;">Sponsor the complete renovation and support of one rural school for a year.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm border-0 text-center h-100">
          <div class="card-body">
            <h4 class="fw-bold" style="color:#24c1dd;">Event Sponsorship</h4>
            <p style="color:#212529;">Partner in our fundraising events, educational drives, or awareness campaigns.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm border-0 text-center h-100">
          <div class="card-body">
            <h4 class="fw-bold" style="color:#24c1dd;">Matching Gifts</h4>
            <p style="color:#212529;">Double the impact by matching employee donations made to our cause.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Us Form -->
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow p-4">
          <h3 class="mb-4 fw-bold text-center" style="color:#212529;">Interested in Partnering?</h3>
          <p class="text-center" style="color:#212529;">Fill out the form and we’ll get in touch with you to discuss the best way to collaborate.</p>
          <form action="corporate_inquiry.php" method="POST">
            <div class="mb-3">
              <label for="companyName" class="form-label" style="color:#212529;">Company Name</label>
              <input type="text" class="form-control" id="companyName" name="companyName" required>
            </div>
            <div class="mb-3">
              <label for="contactName" class="form-label" style="color:#212529;">Contact Person</label>
              <input type="text" class="form-control" id="contactName" name="contactName" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label" style="color:#212529;">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label" style="color:#212529;">Your Message</label>
              <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-summer-sky text-white px-5 py-2">Submit Inquiry</button>
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
