<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

  <!-- Loader -->
  <div class="loader" id="loader-fade">
    <div class="loader-container center-block">
      <div class="grid-row">
        <div class="col center-block">
          <ul class="loading reversed">
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <body data-bs-spy="scroll" data-bs-target=".navbar-nav"></body>

  <!-- HERO SECTION -->
  <section class="hero d-flex align-items-center">
    <div class="container-fluid">
      <div class="row g-0">

        <!-- Left Content -->
        <div class="col-lg-6 d-flex flex-column justify-content-center text-center text-lg-start p-5">
          <h1 class="display-5 fw-bold text-white mb-3">Office Bearers & Advisors</h1>
          <p class="lead text-light mb-4">
            The OPA is guided by a team of committed office bearers who provide leadership, direction, and accountability. Their role is to coordinate alumni activities, oversee projects, and ensure that contributions from past pupils are used effectively for the growth of the school. Through their dedication, the office bearers keep alumni engaged, connected, and united in the shared goal of safeguarding Kadanapitiya Junior School for generations to come.
          </p>
          <a href="#office-bearers"
            class="btn-setting btn-hvr-setting-main btn-summer-sky text-white">
            Meet the Team
            <span class="btn-hvr-setting btn-hvr-black">
              <span class="btn-hvr-setting-inner">
                <span class="btn-hvr-effect"></span>
                <span class="btn-hvr-effect"></span>
                <span class="btn-hvr-effect"></span>
                <span class="btn-hvr-effect"></span>
              </span>
            </span>
          </a>
        </div>

        <!-- Right Side Full Image -->
        <div class="col-lg-6 position-relative">
          <div class="h-100">
            <img src="images/Opabearers.png" alt="OPA" class="img-fluid w-100 h-100 object-fit-cover">
            <div class="image-overlay"></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- DIVIDER -->
  <div class="section-divider"></div>

  <!-- OFFICE BEARERS -->
  <section id="office-bearers" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="opabearerssection-title  office-bearers-title">Office Bearers</h2>
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
            <img src="images/Secretary.png" alt="Secretary">
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

  <!-- DIVIDER -->
  <div class="section-divider"></div>

  <!-- COMMITTEE MEMBERS -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="opabearerssection-title  committee-title">Committee Members</h2>
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

  <!-- DIVIDER -->
  <div class="section-divider"></div>

  <!-- ADVISORY TEAM (Vertical List) -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="opabearerssection-title advisory-title">Advisory Team</h2>
        <p class="text-muted">Guided by experience and wisdom</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <ul class="list-group advisory-list">
            <li class="list-group-item">
              <h6>Madura Sampath Naapatage</h6>
              <p>Principal - Kadanapitiya JuniorS School</p>
            </li>
            <li class="list-group-item">
              <h6>Y. Senevirathna</h6>
              <p>Retired Teacher</p>
            </li>
            <li class="list-group-item">
              <h6>Sriyani Hemalatha</h6>
              <p>Retired Teacher</p>
            </li>
            <li class="list-group-item">
              <h6>Venerable Batugampala Chandananda Thero</h6>
              <p>The chief incumbent of the Purwararama Temple, Kadanapitiya</p>
            </li>
          </ul>
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