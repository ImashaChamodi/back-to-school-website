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

<!-- External CSS -->
<link rel="stylesheet" href="css/volunteer.css">

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- HERO SECTION -->
<section class="hero-section">
  <div class="container position-relative text-center" data-aos="fade-up">

    <div class="hero-text-box">
      
      <h1 class="display-4 mb-3 text-uppercase">Join as a Volunteer</h1>
      <p class="hero-subtitle">
        Share your skills and time to make a difference in our community.
      </p>
    </div>

    <div class="tp-caption">
      <a href="#volunteerForm" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white hero-btn">
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

<!-- Supporting Hands Section -->
<!-- WHY DONATE SECTION -->
<section class="why-donate-section">
  <div class="container">
    <div class="why-donate-box">
      <h2>Our Volunteers</h2>
      <p class="text-muted">
        We are deeply grateful to the individuals who dedicate their time, knowledge, and skills to Kadanapitiya Primary School without monetary compensation. Our volunteers include past teachers, retired educators, and community members who once taught at the school, all contributing to enrich the learning experience of our students.
      </p>
      <p class="text-muted">
        Many volunteers provide free tuition in subjects such as mathematics, languages, science, and general studies, while others offer extra-curricular coaching in areas like sports, music, dance, art, yoga, and other skills-based sessions. Professionals and educators also organize after-school programs, motivational talks, and free seminars to inspire and guide our students.
      </p>
      <p class="text-muted">
        Their invaluable support helps enhance student engagement, improve learning quality, and foster personal growth, creating a vibrant, well-rounded school environment.
      </p>
      <p class="text-muted">
        We warmly invite like-minded individuals, past teachers, and community members to join our extended educational support network, sharing their time, knowledge, and guidance to make a meaningful difference in the lives of our students.
      </p>
    </div>
  </div>
</section>
<!-- ALERTS -->
<div class="container mt-4">
  <?php if ($successMsg): ?>
    <div class="alert alert-success shadow-sm animate__animated animate__fadeIn"><?= $successMsg ?></div>
  <?php endif; ?>
  <?php if ($errorMsg): ?>
    <div class="alert alert-danger shadow-sm animate__animated animate__fadeIn"><?= $errorMsg ?></div>
  <?php endif; ?>
</div>

<!-- VOLUNTEERS LIST -->
<section id="volunteers-list" class="volunteers-list">
  <div class="container position-relative" data-aos="fade-up">
    <h2 class="text-center mb-4">Our Valued Volunteers</h2>
    <p class="text-center text-muted mb-5">Thank you for giving your time and skills. You make a real difference!</p>

    <?php if (!empty($volunteers)) : ?>
      <div class="row g-4 justify-content-center" id="volunteersGrid">
        <?php foreach ($volunteers as $index => $volunteer) : ?>
          <div class="col-lg-2 col-md-4 col-6 volunteer-item <?= $index >= 6 ? 'd-none extra-volunteers' : ''; ?>">
            <div class="p-3 bg-white shadow-sm rounded text-center h-100">
              <h5 class="volunteer-name"><?= htmlspecialchars($volunteer['full_name']); ?></h5>
              <p class="text-muted mb-1"><?= htmlspecialchars($volunteer['volunteer_type']); ?></p>
              <p class="text-muted mb-0"><?= htmlspecialchars($volunteer['designation']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <?php if(count($volunteers) > 6): ?>
        <div class="text-center mt-4">
          <a href="javascript:void(0);" id="viewAllVolunteersBtn" class="view-more-link">
             View More &raquo;
          </a>
        </div>
      <?php endif; ?>

    <?php else: ?>
      <p class="text-center text-muted">No volunteers have been approved yet.</p>
    <?php endif; ?>
  </div>
  <div class="overlay"></div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const viewAllBtn = document.getElementById('viewAllVolunteersBtn');
  if(viewAllBtn){
    viewAllBtn.addEventListener('click', function() {
      document.querySelectorAll('.extra-volunteers').forEach(el => el.classList.remove('d-none'));
      viewAllBtn.style.display = 'none';
    });
  }
});
</script>

<!-- VOLUNTEER FORM -->
<section id="volunteerForm" class="volunteer-form">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center mb-4 form-title">Volunteer Application Form</h2>
    <form method="post" class="p-4 shadow-sm bg-white rounded">
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Full Name</label>
          <input type="text" name="full_name" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Volunteer Type</label>
        <input type="text" name="volunteer_type" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Designation</label>
        <input type="text" name="designation" class="form-control" required>
      </div>

      <div class="text-center mt-4">
        <button type="submit" name="submit" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white submit-btn">
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

<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({duration:1000, once:true});</script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
