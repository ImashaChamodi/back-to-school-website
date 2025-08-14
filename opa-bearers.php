<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- HERO SECTION (Modern Split Layout, Navbar Safe) -->
<section class="hero-modern-section position-relative" style="background-color: #212529;">
  <div class="container py-5">
    <div class="row align-items-center">
      
      <!-- Left Text Content -->
      <div class="col-lg-6 text-white text-center text-lg-start mb-4 mb-lg-0">
        <h1 class="fw-bold mb-3" style="color: #f8f9fa;">Office Bearers & Advisors</h1>
        <p class="lead mb-4" style="color: #f8f9fa;">Together, our Office Bearers and Advisors carry forward the spirit of unity and hope.</p>
       
      </div>

      <!-- Right Image -->
      <div class="col-lg-6">
        <div class="hero-img-wrapper rounded shadow overflow-hidden">
          <img src="images/aboutus.jpg" class="img-fluid w-100 h-100" alt="OPA Image" style="object-fit: cover; max-height: 300px;">
        </div>
      </div>

    </div>
  </div>
</section>


<!-- OFFICE BEARERS -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color: #212529;">Office Bearers</h2>
      <p class="text-muted">The core team behind our vision and mission</p>
    </div>
    
    <div class="row text-center">
      <!-- President -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="images/president.jpg" class="card-img-top" style="height: 280px; object-fit: cover;" alt="President">
          <div class="card-body">
            <h5 class="fw-bold" style="color: #212529;">Janaki Hill</h5>
            <p style="color: #24c1dd; margin-bottom: 0;">President</p> 
            <p style="color: #24c1dd; margin-bottom: 0;">Managing Director & Founder at Arakavila Dance & Theatre Foundation</p> <!-- Light blue post title, normal weight -->
          </div>
        </div>
      </div>

      <!-- Secretary -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="images/secretary.jpg" class="card-img-top" style="height: 280px; object-fit: cover;" alt="Secretary">
          <div class="card-body">
            <h5 class="fw-bold" style="color: #212529;">Pushpa Damayanthi</h5>
            <p style="color: #24c1dd; margin-bottom: 0;">Secretary</p>
            <p style="color: #24c1dd; margin-bottom: 0;">Owner of Star solution</p>  <!-- Light blue post title, normal weight -->
          </div>
        </div>
      </div>

      <!-- Treasurer -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="images/treasurer.jpg" class="card-img-top" style="height: 280px; object-fit: cover;" alt="Treasurer">
          <div class="card-body">
            <h5 class="fw-bold" style="color: #212529;">Asanga Raigama</h5>
            <p style="color: #24c1dd; margin-bottom: 0;">Treasurer</p> <!-- Light blue post title, normal weight -->
            <p style="color: #24c1dd; margin-bottom: 0;">CEO JFS Holdings</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Committee Members -->
    <div class="row mt-4 text-center">
      <div class="col-12 mb-4">
        <h4 class="fw-bold" style="color: #212529;">Committee Members</h4>
      </div>

      <!-- Example Committee Member -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="images/member1.jpg" class="card-img-top" style="height: 220px; object-fit: cover;" alt="Member">
          <div class="card-body">
            <h6 class="fw-bold" style="color: #212529;">Ajith Sisira Kumara</h6>
            <p style="color: #24c1dd; margin-bottom: 0;">Member</p> 
            <!-- Light blue post title, normal weight -->
          </div>
        </div>
      </div>
      <!-- Example Committee Member -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="images/member1.jpg" class="card-img-top" style="height: 220px; object-fit: cover;" alt="Member">
          <div class="card-body">
            <h6 class="fw-bold" style="color: #212529;">Nandana Kumara</h6>
            <p style="color: #24c1dd; margin-bottom: 0;">Member</p> <!-- Light blue post title, normal weight -->
          </div>
        </div>
      </div>
      <!-- Repeat as needed -->
    </div>
  </div>
</section>

<!-- ADVISORS SECTION -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color: #212529;">Advisory Team</h2>
      <p class="text-muted">Guided by experience and wisdom</p>
    </div>

    <div class="row text-center">
      <!-- Advisor 1 -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="images/advisor1.jpg" class="card-img-top" style="height: 220px; object-fit: cover;" alt="Advisor">
          <div class="card-body">
            <h6 class="fw-bold" style="color: #212529;">Madura Sampath Naapatage</h6>
            <p style="color: #24c1dd; margin-bottom: 0;">Principal-Kadanapitiya Primary School</p> <!-- Light blue post title, normal weight -->
          </div>
        </div>
      </div>

      <!-- Advisor 2 -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="images/advisor2.jpg" class="card-img-top" style="height: 220px; object-fit: cover;" alt="Advisor">
          <div class="card-body">
            <h6 class="fw-bold" style="color: #212529;">Y. Senevirathna</h6>
            <p style="color: #24c1dd; margin-bottom: 0;">Retired Teacher</p> <!-- Light blue post title, normal weight -->
          </div>
        </div>
      </div>

      <!-- Advisor 3 -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="images/advisor3.jpg" class="card-img-top" style="height: 220px; object-fit: cover;" alt="Advisor">
          <div class="card-body">
            <h6 class="fw-bold" style="color: #212529;">Sriyani Hemalatha</h6>
            <p style="color: #24c1dd; margin-bottom: 0;">Retired Teacher</p> <!-- Light blue post title, normal weight -->
          </div>
        </div>
      </div>

      <!-- Advisor 4 -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="images/advisor4.jpg" class="card-img-top" style="height: 220px; object-fit: cover;" alt="Advisor">
          <div class="card-body">
            <h6 class="fw-bold" style="color: #212529;">-----</h6>
            <p style="color: #24c1dd; margin-bottom: 0;">-----</p> <!-- Light blue post title, normal weight -->
          </div>
        </div>
      </div>
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
