<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

$successMsg = '';
$errorMsg = '';

if (isset($_POST['submit'])) {
  $full_name = $_POST['full_name'] ?? '';
  $address = $_POST['address'] ?? '';
  $phone = $_POST['phone'] ?? '';
  $email = $_POST['email'] ?? '';
  $donation_type = $_POST['donation_type'] ?? '';
  $amount = null;
  $resource_details = null;

  if ($donation_type === 'finance') {
    $amount = $_POST['amount'] ?? 0;
  } elseif ($donation_type === 'resource') {
    $resource_details = $_POST['resource_details'] ?? '';
  }

  $stmt = $conn->prepare(
    "INSERT INTO donations (full_name, address, phone, email, donation_type, amount, resource_details, status) 
         VALUES (?, ?, ?, ?, ?, ?, ?, 'pending')"
  );
  $stmt->bind_param("sssssis", $full_name, $address, $phone, $email, $donation_type, $amount, $resource_details);

  if ($stmt->execute()) {
    $successMsg = "✅ Thank you! Your donation request has been submitted. Our team will contact you soon for further details.";
  } else {
    $errorMsg = "❌ Error submitting donation. Please try again later.";
  }
  $stmt->close();
}

$result = $conn->query("SELECT * FROM donations WHERE status='approved' ORDER BY submitted_at DESC");

$donors = [];
if ($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $donors[] = $row;
  }
}
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

  <!-- HERO SECTION -->
  <section class="hero-modern-section d-flex align-items-end justify-content-center">
    <div class="container text-center text-white hero-content">
      <div class="text-bg-blur p-4">
        <h1 class="hero-title mb-3">Support Kadanapitiya School</h1>
        <p class="hero-subtitle mb-4">Your generosity helps us provide better education and facilities for our students.</p>
        <a href="#donationForm" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white">
          Support us
        </a>
      </div>
    </div>
  </section>

  <!-- WHY DONATE -->
  <section class="why-donate-section py-5">
    <div class="container">
      <h2 class="donatetext">School Benefactors</h2>
      <p class="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">We are deeply grateful to everyone considering a contribution to Kadanapitiya Junior School. Your support helps us nurture young minds, improve learning spaces, and provide the tools students need to thrive.

        Donations can take two forms: financial contributions, which support construction, classroom needs, and student programs, and resource donations, such as desks, books, or sports equipment. Every gift, big or small, makes a real difference in strengthening the school and empowering our students.

        We celebrate the generosity of our current donors both Financial Donors and Resource Donors and warmly welcome new supporters to join our community. Your involvement ensures that Kadanapitiya Junior School continues to grow, inspire, and educate for generations to come</p>
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

  <!-- DONORS LIST -->
  <section id="donors-list" class="donors-section py-5">
    <div class="container">
      <h2 class="donatetext">Celebrating Our Supporters</h2>
      <?php if (!empty($donors)) : ?>
        <div class="row g-4 justify-content-center" id="donors-container">
          <?php foreach ($donors as $index => $donor) : ?>
            <div class="col-md-4 col-sm-6 donor-card-wrapper <?= $index >= 6 ? 'extra-donor' : '' ?>" style="<?= $index >= 6 ? 'display:none;' : '' ?>">
              <div class="card donor-card p-3 text-center">
                <h5 class="text-dark"><?= htmlspecialchars($donor['full_name']); ?></h5>
                <p class="text-muted mb-1"><?= htmlspecialchars($donor['address']); ?></p>
                <p class="text-muted mb-0">
                  <?php
                  if ($donor['donation_type'] === 'finance') {
                    echo "💰 Financial – Rs. " . htmlspecialchars($donor['amount']);
                  } elseif ($donor['donation_type'] === 'resource') {
                    echo "📦 Resource – " . htmlspecialchars($donor['resource_details']);
                  }
                  ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php if (count($donors) > 6): ?>
          <div class="text-center mt-3">
            <a href="javascript:void(0)" id="toggleDonors" class="view-more-text">View More</a>
          </div>

        <?php endif; ?>
      <?php else: ?>
        <p class="text-center text-muted">No donors recorded yet.</p>
      <?php endif; ?>
    </div>
  </section>

  <!-- DONATION FORM -->
  <section id="donationForm" class="donation-form-section py-5">
    <div class="container">
      <h2 class="donatetext">Contribute & Empower Students</h2>
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
            <input type="text" name="address" class="form-control form-input" placeholder="Address" required>
          </div>
          <div class="col-md-6">
            <input type="text" name="phone" class="form-control form-input" placeholder="Phone" required>
          </div>
        </div>
        <div class="mb-3 mt-3">
          <select name="donation_type" class="form-select form-input" required onchange="toggleFields()">
            <option value="">Select Donation Type</option>
            <option value="finance">Financial</option>
            <option value="resource">Resource</option>
          </select>
        </div>
        <div class="mb-3 finance-field d-none">
          <input type="number" step="0.01" name="amount" class="form-control form-input" placeholder="Amount (Rs.)">
        </div>
        <div class="mb-3 resource-field d-none">
          <input type="text" name="resource_details" class="form-control form-input" placeholder="Resource (e.g. Chairs, Books, Computers)">
        </div>
        <div class="text-center mt-3">
          <button type="submit" name="submit" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white">
            Submit Donation
          </button>
        </div>
      </form>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
  <link rel="stylesheet" href="css/donors.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script>
    function toggleFields() {
      const donationType = document.querySelector('select[name="donation_type"]').value;
      document.querySelector('.finance-field').classList.add('d-none');
      document.querySelector('.resource-field').classList.add('d-none');
      if (donationType === 'finance') {
        document.querySelector('.finance-field').classList.remove('d-none');
      } else if (donationType === 'resource') {
        document.querySelector('.resource-field').classList.remove('d-none');
      }
    }

    // Donor list toggle
    document.addEventListener("DOMContentLoaded", function() {
      const toggleBtn = document.getElementById("toggleDonors");
      if (toggleBtn) {
        toggleBtn.addEventListener("click", function() {
          const extraDonors = document.querySelectorAll(".extra-donor");
          const hidden = Array.from(extraDonors).some(el => el.style.display === "none" || el.style.display === "");
          extraDonors.forEach(el => el.style.display = hidden ? "block" : "none");
          toggleBtn.textContent = hidden ? "View Less" : "View More";
        });
      }
    });
  </script>
</body>

</html>