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
        <h1 class="fw-bold mb-3" style="color: #f8f9fa;">Support Our Mission</h1>
        <p class="lead mb-4" style="color: #f8f9fa;">
          Your generosity fuels education. Whether financial or resource-based, every donation makes a difference.
        </p>
        <a href="#donationForm" class="btn btn-lg" style="background-color: #24c1dd; color: white;">
          Donate Now
        </a>
      </div>

      <!-- Right Image -->
      <div class="col-lg-6">
        <div class="hero-img-wrapper rounded shadow overflow-hidden">
          <img src="images/donate-hero.jpg" class="img-fluid w-100 h-100" 
               alt="Donation Image" 
               style="object-fit: cover; max-height: 300px;">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ABOUT OPA DESCRIPTION -->
<section class="py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="fw-bold text-center mb-4" style="color: #212529;">Who We Are</h2>
        <p class="text-muted fs-5">
          We are a proud and diverse network of past pupils from Kadanapitiya Primary School, now serving in various professions and communities both locally and around the world. Though we have walked different paths, we remain deeply connected by the foundation this humble village school gave us.
        </p>
        <p class="text-muted fs-5">
          Over the years, Kadanapitiya School has shaped countless lives, instilling values of discipline, resilience, and compassion. However, with recent challenges such as economic hardship, rural depopulation, and dwindling resources, our beloved school now faces an uncertain future.
        </p>
        <p class="text-muted fs-5">
          In response, many alumni have begun to reconnect and collaborate, driven by a shared commitment to protect and uplift the place that once nurtured us. The Kadanapitiya College Alumni Association (OPA) is now being revitalized with renewed energy and structure, aiming to unify all former students into a strong, sustainable network.
        </p>
        <p class="text-muted fs-5 mb-0">
          Through our collective strength, we intend to support educational programs, infrastructure development, and student welfare — ensuring that future generations of village children receive the same opportunities we once had. This is not just a reunion — it is a pledge to give back and carry our school’s legacy forward.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- HIGHLIGHTS SECTION -->
<section class="py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="p-4 shadow-sm bg-white rounded h-100">
          <h5 class="fw-bold mb-2" style="color: #24c1dd;">Reconnect</h5>
          <p class="text-muted">We unite alumni from around the globe to support one another and the school that brought us together.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 shadow-sm bg-white rounded h-100">
          <h5 class="fw-bold mb-2" style="color: #24c1dd;">Revive</h5>
          <p class="text-muted">We are rebuilding facilities and restoring confidence in the power of local education.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 shadow-sm bg-white rounded h-100">
          <h5 class="fw-bold mb-2" style="color: #24c1dd;">Inspire</h5>
          <p class="text-muted">Through scholarships and mentorship, we are nurturing future leaders from our home village.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION SECTION -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="fw-bold mb-3" style="color: #212529;">Join the OPA Mission</h2>
    <p class="fs-5 text-muted mb-4">Whether you’re near or far, your voice and support matter. Together, let’s carry forward the spirit of Kadanapitiya Primary School.</p>
    <a href="new-membership.php" class="btn btn-primary px-4 py-2" style="background-color: #24c1dd; border: none;">Meet the Team</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JS FILES -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
