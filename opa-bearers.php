<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

// Fetch database data
$officeResult    = $conn->query("SELECT * FROM office_bearers ORDER BY FIELD(role,'President','Secretary','Treasurer'), id ASC");
$committeeResult = $conn->query("SELECT * FROM committee_members ORDER BY id ASC");
$patronsResult   = $conn->query("SELECT * FROM patrons ORDER BY id ASC");
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

  <!-- HERO SECTION -->
  <section class="hero d-flex align-items-center">
    <div class="container-fluid">
      <div class="row g-0">

        <!-- Left Content -->
        <div class="col-lg-6 d-flex flex-column justify-content-center text-center text-lg-start p-5">
          <h1 class="display-5 fw-bold text-white mb-3">Office Bearers</h1>
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
        <div class="main-title">
          <h2>Office Bearers</h2>
        </div>

        <p class="text-muted">The core team behind our vision and mission</p>
      </div>
      <div class="row justify-content-center g-4">
        <?php if ($officeResult && $officeResult->num_rows > 0): ?>
          <?php while ($row = $officeResult->fetch_assoc()): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
              <div style="width:250px; height:400px; margin:0 auto; display:flex; flex-direction:column; align-items:center;">

                <!-- Image -->
                <div style="width:100%; height:280px; overflow:hidden; border-radius:10px; margin-bottom:10px;">
                  <img src="<?= !empty($row['image']) ? htmlspecialchars($row['image']) : 'images/default.png' ?>"
                    alt="<?= htmlspecialchars($row['name']) ?>"
                    style="width:100%; height:100%; object-fit:cover; display:block;">
                </div>

                <!-- Details -->
                <div style="text-align:center;">
                  <h5 style="margin-bottom:5px; font-size:1rem; line-height:1.2rem;"><?= htmlspecialchars($row['name']) ?></h5>
                  <p style="margin:0; font-size:0.9rem; color:#555;"><?= htmlspecialchars($row['role']) ?></p>
                  <p style="margin:0; font-size:0.9rem; color:#555;"><?= htmlspecialchars($row['designation']) ?></p>
                </div>

              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p class="text-center">No office bearers found.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- DIVIDER -->
  <div class="section-divider"></div>


  <!-- COMMITTEE MEMBERS -->
  <section id="committee-members" class="py-5 bg-white">
    <div class="container">
      <div class="main-title">
        <h2>Committee Members</h2>
      </div>



      <div class="row justify-content-center g-4">
        <?php if ($committeeResult && $committeeResult->num_rows > 0): ?>
          <?php while ($row = $committeeResult->fetch_assoc()): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">

              <!-- Image -->
              <div style="
                width:220px;
                height:280px;
                overflow:hidden;
                border-radius:10px;
                margin:0 auto 10px;
              ">
                <img
                  src="<?= !empty($row['image']) ? htmlspecialchars($row['image']) : 'images/default.png' ?>"
                  alt="<?= htmlspecialchars($row['name']) ?>"
                  style="width:100%; height:100%; object-fit:cover; display:block;">
              </div>

              <!-- Details -->
              <div style="text-align:center; max-width:220px; margin:0 auto;">
                <h5 style="margin:0; font-size:1rem; line-height:1.2rem;"><?= htmlspecialchars($row['name']) ?></h5>
                <?php if (!empty($row['designation'])): ?>
                  <p style="margin:4px 0 0; font-size:0.9rem; color:#555;"><?= htmlspecialchars($row['designation']) ?></p>
                <?php endif; ?>
              </div>

            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p class="text-center">No committee members found.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>


  <!-- DIVIDER -->
  <div class="section-divider"></div>


  <!-- PATRONS -->
  <section id="patrons" class="py-5 bg-light">
    <div class="container">
      <div class="main-title">
        <h2>Patrons</h2>
      </div>

      <div class="row justify-content-center g-4">
        <?php if ($patronsResult && $patronsResult->num_rows > 0): ?>
          <?php while ($row = $patronsResult->fetch_assoc()): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
              <div style="width:220px; height:380px; margin:0 auto; display:flex; flex-direction:column; align-items:center;">

                <div style="width:100%; height:280px; overflow:hidden; border-radius:10px; margin-bottom:10px;">
                  <img src="<?= !empty($row['image']) ? htmlspecialchars($row['image']) : 'images/default.png' ?>"
                    alt="<?= htmlspecialchars($row['name']) ?>"
                    style="width:100%; height:100%; object-fit:cover; display:block;">
                </div>

                <div style="text-align:center;">
                  <h5 style="margin-bottom:5px; font-size:1rem; line-height:1.2rem;"><?= htmlspecialchars($row['name']) ?></h5>
                  <p style="margin:0; font-size:0.9rem; color:#555;"><?= htmlspecialchars($row['designation']) ?></p>
                </div>

              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p class="text-center">No patrons found.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>
</body>

</html>