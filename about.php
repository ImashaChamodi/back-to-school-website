<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">
<!-- About Us Hero Section with Background Image -->
<section class="p-0">
    <div class="hero-section" style="
        background-image: url('images/aboutus.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;">
        
        <div class="container">
            <h1 class="display-4 fw-bold text-white">About Us</h1>
            <p class="lead text-white">Building futures by rebuilding schools</p>
        </div>
    </div>
</section>

<!-- About School Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="images/school-building.jpg" class="img-fluid rounded shadow" alt="Kadanapitiya School">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold text-dark mb-3">Kadanapitiya Primary School</h2>
        <p class="text-muted">
          Nestled in a scenic village in the Kalutara District of Sri Lanka, Kadanapitiya Primary School has been a cornerstone of the local community, offering quality education to rural children for decades.
        </p>
        <p class="text-muted">
          The school currently supports nearly <strong>50 students</strong> with the help of around <strong>8 dedicated staff members</strong>. Despite its humble size, it continues to nurture bright minds in a peaceful and natural setting.
        </p>
        <p class="text-muted">
          Due to challenges such as the COVID-19 pandemic, economic hardship, and a growing shift toward urban schooling, enrollment has declined, putting the school at risk.
        </p>
        <p class="text-muted mb-0">
          In response, a passionate group of past pupils has united to protect the legacy and revitalize the school’s future. 
          <a href="opa-about.php" style="color: #24c1dd; font-weight: 500;">Learn more about the Old Pupils Association &rarr;</a>
        </p>
      </div>
    </div>
  </div>
</section>

</section>

<!-- Mission Section -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center flex-md-row-reverse">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="images/mission.jpg" class="img-fluid rounded shadow" alt="Mission Image">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold mb-3" style="color:#212529;">Our Mission</h2>
        <p class="text-muted">
          We strive to revitalize Kadanapitiya Primary School by providing essential support, modern learning tools, and better infrastructure. Our goal is to create a nurturing and inclusive environment where every child can thrive.
        </p>
        <p class="text-muted mb-0">
          Through community support and shared responsibility, we are building more than a school — we are building futures.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Vision Section -->
<section class="bg-light py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color:#212529;">Our Vision</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <p class="text-muted lead text-center">
          We imagine a world where every child — regardless of background — has access to quality education in a safe and inspiring environment. Our vision is to eliminate dropouts, improve literacy, and empower generations to come.
        </p>
        <p class="text-muted text-center mb-0">
          This is more than infrastructure. It's about building confidence, leadership, and dreams. Together with local communities and volunteers, we strive to raise a generation of changemakers.
        </p>
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