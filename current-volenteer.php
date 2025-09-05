<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';
include 'includes/header.php';
include 'includes/navbar.php';

$successMsg = '';
$errorMsg = '';

// Handle form submission
if (isset($_POST['submit'])) {
  $full_name      = $_POST['full_name'] ?? '';
  $volunteer_type = $_POST['volunteer_type'] ?? '';
  $designation    = $_POST['designation'] ?? '';
  $email          = $_POST['email'] ?? '';
  $phone          = $_POST['phone'] ?? '';

  $stmt = $conn->prepare(
    "INSERT INTO volunteers (full_name, volunteer_type, designation, email, phone, status) 
         VALUES (?, ?, ?, ?, ?, 'pending')"
  );
  $stmt->bind_param("sssss", $full_name, $volunteer_type, $designation, $email, $phone);

  if ($stmt->execute()) {
    $successMsg = "✅ Thank you! Your volunteer application has been submitted and is pending approval.";
  } else {
    $errorMsg = "❌ Error submitting application. Please try again later.";
  }
  $stmt->close();
}

// Fetch approved volunteers
$result = $conn->query("SELECT * FROM volunteers WHERE status='approved' ORDER BY submitted_at DESC");

$volunteers = [];
if ($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $volunteers[] = $row;
  }
}
?>
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

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">


  <!-- HERO SECTION -->
  <section class="hero-modern-section d-flex align-items-end justify-content-center">
    <div class="container text-center text-white hero-content">
      <div class="text-bg-blur p-4">
        <h1 class="hero-title mb-3">Support Our Students</h1>
        <p class="hero-subtitle mb-4">Share your skills and time to make a difference in our community.</p>
        <a href="#volunteerForm" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white">
          Apply Now
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
    </div>
  </section>

  <!-- WHY VOLUNTEER -->
  <section class="why-donate-section py-5">
    <div class="container">
      <h2 class="donatetext">Supporting Hands</h2>
      <p class="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">We are deeply grateful to the individuals who dedicate their time, knowledge, and skills to Kadanapitiya Junior School without monetary compensation. Our volunteers include past teachers, retired educators, and community members who once taught at the school, all contributing to enrich the learning experience of our students.

        Many volunteers provide free tuition in subjects such as mathematics, languages, science, and general studies, while others offer extra-curricular coaching in areas like sports, music, dance, art, yoga, and other skills-based sessions. Professionals and educators also organize after-school programs, motivational talks, and free seminars to inspire and guide our students.

        Their invaluable support helps enhance student engagement, improve learning quality, and foster personal growth, creating a vibrant, well-rounded school environment.

        We warmly invite like-minded individuals, past teachers, and community members to join our extended educational support network, sharing their time, knowledge, and guidance to make a meaningful difference in the lives of our students.</p>
    </div>
  </section>

  <!-- ALERTS -->
  <div class="container mt-4">
    <?php if ($successMsg): ?>
      <div class="alert alert-success shadow-sm"><?= $successMsg ?></div>
    <?php endif; ?>
    <?php if ($errorMsg): ?>
      <div class="alert alert-danger shadow-sm"><?= $errorMsg ?></div>
    <?php endif; ?>
  </div>

  <!-- VOLUNTEERS LIST -->
  <section id="volunteers-list" class="volunteers-list py-5">
    <div class="container">
      <h2 class="donatetext">Celebrating Our Supporting Hands</h2>
      <?php if (!empty($volunteers)) : ?>
        <div class="row g-4 justify-content-center" id="volunteers-container">
          <?php foreach ($volunteers as $index => $volunteer) : ?>
            <div class="col-md-4 col-sm-6 volunteer-card-wrapper <?= $index >= 6 ? 'extra-volunteer' : '' ?>" style="<?= $index >= 6 ? 'display:none;' : '' ?>">
              <div class="card donor-card p-3 text-center">
                <h5 class="text-dark"><?= htmlspecialchars($volunteer['full_name']); ?></h5>
                <p class="text-muted mb-1"><?= htmlspecialchars($volunteer['volunteer_type']); ?></p>
                <p class="text-muted mb-0"><?= htmlspecialchars($volunteer['designation']); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <?php if (count($volunteers) > 6): ?>
          <div class="text-center mt-3">
            <a href="javascript:void(0)" id="toggleVolunteers" class="view-more-text">View More</span>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <p class="text-center text-muted">No volunteers have been approved yet.</p>
      <?php endif; ?>
    </div>
  </section>


  <!-- VOLUNTEER FORM -->
  <section id="volunteerForm" class="volunteer-form-section py-5">
    <div class="container">
      <h2 class="donatetext">Become a School Supporter</h2>
      <form method="post" class="donation-form-box">
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" name="full_name" class="form-control form-input" placeholder="Full Name" required>
          </div>
          <div class="col-md-6">
            <input type="email" name="email" class="form-control form-input" placeholder="Email" required>
          </div>
        </div>
        <div class="row g-3 mt-2">
          <div class="col-md-6">
            <input type="text" name="phone" class="form-control form-input" placeholder="Phone" required>
          </div>
          <div class="col-md-6">
            <input type="text" name="volunteer_type" class="form-control form-input" placeholder="Volunteer Type" required>
          </div>
        </div>
        <div class="mb-3 mt-3">
          <input type="text" name="designation" class="form-control form-input" placeholder="Designation" required>
        </div>
        <div class="text-center mt-3">
          <button type="submit" name="submit" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white">
            Submit Application
            <span class="btn-hvr-setting btn-hvr-black">
              <span class="btn-hvr-setting-inner">
                <span class="btn-hvr-effect"></span>
                <span class="btn-hvr-effect"></span>
                <span class="btn-hvr-effect"></span>
                <span class="btn-hvr-effect"></span>
              </span>
            </span>
          </button>
        </div>
      </form>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
  <link rel="stylesheet" href="css/volunteer.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const toggleBtn = document.getElementById("toggleVolunteers");
      if (toggleBtn) {
        toggleBtn.addEventListener("click", function() {
          const extraVolunteers = document.querySelectorAll(".extra-volunteer");
          let showing = false;

          extraVolunteers.forEach(el => {
            if (el.style.display === "none" || el.style.display === "") {
              el.style.display = "block";
              showing = true;
            } else {
              el.style.display = "none";
            }
          });

          toggleBtn.textContent = showing ? "View Less" : "View More";
        });
      }
    });
  </script>

</body>

</html>