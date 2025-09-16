<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';
include 'includes/header.php';
include 'includes/navbar.php';

$successMsg = '';
$errorMsg   = '';

// Handle volunteer form submission
if (isset($_POST['submit'])) {
  $full_name      = htmlspecialchars(trim($_POST['full_name'] ?? ''));
  $email          = htmlspecialchars(trim($_POST['email'] ?? ''));
  $phone          = htmlspecialchars(trim($_POST['phone'] ?? ''));
  $volunteer_type = htmlspecialchars(trim($_POST['volunteer_type'] ?? ''));
  $designation    = htmlspecialchars(trim($_POST['designation'] ?? ''));

  if (!$full_name || !$email || !$phone || !$volunteer_type || !$designation) {
    $errorMsg = "❌ All fields are required.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorMsg = "❌ Invalid email format.";
  } else {
    $stmt = $conn->prepare(
      "INSERT INTO volunteer_applications (full_name, volunteer_type, designation, email, phone)
             VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->bind_param("sssss", $full_name, $volunteer_type, $designation, $email, $phone);
    if ($stmt->execute()) {
      $successMsg = "✅ Thank you! Your volunteer application has been submitted and is pending approval.";
    } else {
      $errorMsg = "❌ Error submitting application. Please try again later.";
    }
    $stmt->close();
  }
}

// Fetch approved volunteers
$volunteers = [];
$result = $conn->query("SELECT * FROM volunteer_profiles ORDER BY created_at DESC");
if ($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) $volunteers[] = $row;
}
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

  <!-- HERO -->
  <section class="hero-modern-section d-flex align-items-end justify-content-center">
    <div class="container text-center text-white hero-content">
      <div class="text-bg-blur p-4">
        <h1 class="hero-title mb-3">Join Our Volunteer Team</h1>
        <p class="hero-subtitle mb-4">
          Share your skills and time to make a lasting impact on our students.
        </p>
        <a href="#volunteer-form" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white px-5">
          Become a Volunteer
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

  <!-- INTRO -->
  <section class="why-donate-section py-5">
    <div class="container">
      <div class="main-title">
        <h2>Supporting Hands</h2>
      </div>


      <p class="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
        We are deeply grateful to the individuals who dedicate their time, knowledge, and skills to Kadanapitiya Primary School without monetary compensation. Our volunteers include past teachers, retired educators, and community members who once taught at the school, all contributing to enrich the learning experience of our students.

        Many volunteers provide free tuition in subjects such as mathematics, languages, science, and general studies, while others offer extra-curricular coaching in areas like sports, music, dance, art, yoga, and other skills-based sessions. Professionals and educators also organize after-school programs, motivational talks, and free seminars to inspire and guide our students.

        Their invaluable support helps enhance student engagement, improve learning quality, and foster personal growth, creating a vibrant, well-rounded school environment.

        We warmly invite like-minded individuals, past teachers, and community members to join our extended educational support network, sharing their time, knowledge, and guidance to make a meaningful difference in the lives of our student
      </p>
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

  <!-- VOLUNTEERS -->
  <section id="volunteers" class="py-5 bg-white">
    <div class="container">
      <div class="main-title">
        <h2>Our Honoured Supporters</h2>
      </div>



      <?php if (!empty($volunteers)): ?>
        <div class="row g-4 justify-content-center" id="volunteer-profiles-container">
          <?php foreach ($volunteers as $i => $v): ?>
            <div class="col-md-4 col-sm-6 volunteer-card <?= $i >= 6 ? 'extra-volunteer' : '' ?>" style="<?= $i >= 6 ? 'display:none;' : '' ?>">
              <div class="card h-100 shadow-sm text-center p-3" style="max-width:220px; margin:0 auto;">
                <?php
                $imgSrc = (!empty($v['image']) && file_exists($v['image'])) ? $v['image'] : 'images/default-volunteer.png';
                ?>
                <div style="width:100%; height:280px; overflow:hidden; border-radius:8px; margin-bottom:10px;">
                  <img src="<?= htmlspecialchars($imgSrc) ?>" alt="Volunteer Image"
                    style="width:100%; height:100%; object-fit:cover; display:block; background:#f5f5f5;">
                </div>

                <h5 class="fw-bold text-dark" style="font-size:1rem; line-height:1.2rem; margin-top:5px;"><?= htmlspecialchars($v['full_name']) ?></h5>

                <?php if (!empty($v['volunteer_type'])): ?>
                  <p class="text-muted mb-1"><?= htmlspecialchars($v['volunteer_type']) ?></p>
                <?php endif; ?>

                <?php if (!empty($v['description'])): ?>
                  <p class="text-muted description d-none mt-2" style="font-size:0.85rem; text-align:center;"><?= nl2br(htmlspecialchars($v['description'])) ?></p>
                  <a href="javascript:void(0)" class="view-more-volunteer text-primary" style="font-size:0.75rem; display:block; margin-top:5px;">View More</a>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <?php if (count($volunteers) > 6): ?>
          <div class="text-center mt-3">
            <a href="javascript:void(0)" id="toggleVolunteers" class="view-more-text" style="cursor:pointer; text-decoration:underline; color:#24c1dd;">View More</a>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <p class="text-center text-muted">No volunteer profiles available yet.</p>
      <?php endif; ?>
    </div>
  </section>



  <!-- VOLUNTEER FORM -->
  <section id="volunteer-form" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <div class="main-title">
          <h2>Become a School Supporter</h2>
        </div>

        <p class="text-muted">Fill in the form below to join our volunteer team.</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <form method="post" class="p-4 bg-white shadow rounded-4">
            <div class="mb-3">
              <label for="full_name" class="form-label fw-semibold">Full Name</label>
              <input type="text" id="full_name" name="full_name" class="form-control form-control-lg" placeholder="Jane Doe" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email Address</label>
              <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="example@gmail.com" required>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label fw-semibold">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-control form-control-lg" placeholder="771234567" required>
            </div>

            <div class="mb-3">
              <label for="volunteer_type" class="form-label fw-semibold">Volunteer Type</label>
              <input type="text" id="volunteer_type" name="volunteer_type" class="form-control form-control-lg" placeholder="Teaching, Sports, Music" required>
            </div>

            <div class="mb-3">
              <label for="designation" class="form-label fw-semibold">Designation</label>
              <input type="text" id="designation" name="designation" class="form-control form-control-lg" placeholder="Teacher, Coach, Student" required>
            </div>

            <div class="text-center mt-4">
              <button type="submit" name="submit" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white px-5">
                Submit
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
      </div>
    </div>
  </section>

  <!-- PHONE INPUT + FLAGS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Phone input
      const phoneInput = document.querySelector("#phone");
      if (phoneInput) {
        const iti = window.intlTelInput(phoneInput, {
          initialCountry: "auto",
          geoIpLookup: cb => fetch("https://ipapi.co/json").then(r => r.json()).then(d => cb(d.country_code)).catch(() => cb("LK")),
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
          separateDialCode: true
        });
        phoneInput.closest("form").addEventListener("submit", e => {
          phoneInput.value = iti.getNumber();
          if (!iti.isValidNumber()) {
            e.preventDefault();
            alert("Please enter a valid phone number with country code.");
            phoneInput.focus();
          }
        });
      }

      // Toggle extra volunteers
      const toggleBtn = document.getElementById("toggleVolunteers");
      if (toggleBtn) {
        toggleBtn.addEventListener("click", function() {
          const extras = document.querySelectorAll(".extra-volunteer");
          const isHidden = Array.from(extras).some(el => el.style.display === "none" || el.style.display === "");
          extras.forEach(el => el.style.display = isHidden ? "block" : "none");
          toggleBtn.textContent = isHidden ? "Show Less" : "View More";
        });
      }

      // Toggle volunteer descriptions
      document.querySelectorAll(".view-more-volunteer").forEach(btn => {
        btn.addEventListener("click", function() {
          const desc = btn.previousElementSibling;
          if (desc) {
            desc.classList.toggle("d-none");
            btn.textContent = desc.classList.contains("d-none") ? "View More" : "View Less";
          }
        });
      });
    });
  </script>

  <?php include 'includes/footer.php'; ?>
  <link rel="stylesheet" href="css/volunteers.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>
</body>

</html>