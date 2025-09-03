<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- External CSS -->

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- HERO SECTION -->
<section class="hero-modern-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
        <h1>Office Bearers & Advisors</h1>
        <p1>Together, our Office Bearers and Advisors carry forward the spirit of unity and hope.</p1>
      </div>
      <div class="col-lg-6 text-center">
        <div class="image-frame">
          <img src="images/opa.jpeg" alt="Office Bearers" class="hero-img">
          <div class="image-overlay"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OFFICE BEARERS -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2>Office Bearers</h2>
      <p class="text-muted">The core team behind our vision and mission</p>
    </div>
    <div class="row text-center justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card fixed-card">
          <img src="images/President.png" alt="President">
          <div class="card-body">
            <h5>Janaki Hill</h5>
            <p>President</p>
            <p>Managing Director & Founder at Arakavila Dance & Theatre Foundation</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card fixed-card">
          <img src="images/secretary.png" alt="Secretary">
          <div class="card-body">
            <h5>Pushpa Damayanthi</h5>
            <p>Secretary</p>
            <p>Owner of Star Solution</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card fixed-card">
          <img src="images/Treasurer.jpg" alt="Treasurer">
          <div class="card-body">
            <h5>Asanga Raigama</h5>
            <p>Treasurer</p>
            <p>CEO JFS Holdings</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COMMITTEE MEMBERS -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h4>Committee Members</h4>
    </div>
    <div class="row text-center justify-content-center">
      <div class="col-md-3 mb-4">
        <div class="card committee-card">
          <img src="images/Memberone.png" alt="Ajith Sisira Kumara">
          <div class="card-body">
            <h6>Ajith Sisira Kumara</h6>
            <p>Member</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card committee-card">
          <img src="images/Membertwo.png" alt="Nandana Kumara">
          <div class="card-body">
            <h6>Nandana Kumara</h6>
            <p>Member</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ADVISORY TEAM -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2>Advisory Team</h2>
      <p class="text-muted">Guided by experience and wisdom</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-6 mb-3 text-center advisory-member">
        <h6>Madura Sampath Naapatage</h6>
        <p>Principal - Kadanapitiya Primary School</p>
      </div>
      <div class="col-md-3 col-sm-6 mb-3 text-center advisory-member">
        <h6>Y. Senevirathna</h6>
        <p>Retired Teacher</p>
      </div>
      <div class="col-md-3 col-sm-6 mb-3 text-center advisory-member">
        <h6>Sriyani Hemalatha</h6>
        <p>Retired Teacher</p>
      </div>
      <div class="col-md-3 col-sm-6 mb-3 text-center advisory-member">
        <h6>Venerable Batugampala Chandananda Thero</h6>
        <p>The chief incumbent of the Purwararama Temple, Kadanapitiya</p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
