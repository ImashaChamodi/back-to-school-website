<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

$successMsg = '';
$errorMsg   = '';

// Handle public donation requests
if (isset($_POST['submit'])) {
    $full_name = htmlspecialchars($_POST['full_name'] ?? '');
    $email     = htmlspecialchars($_POST['email'] ?? '');
    $phone     = htmlspecialchars($_POST['phone'] ?? '');
    $address   = htmlspecialchars($_POST['address'] ?? '');
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
        $successMsg = "✅ Thank you! Your donation request has been submitted. Our team will contact you soon.";
    } else {
        $errorMsg = "❌ Error submitting donation. Please try again later.";
    }
    $stmt->close();
}

// Fetch approved public donors
$donors = [];
$res = $conn->query("SELECT * FROM donations WHERE status='approved' ORDER BY submitted_at DESC");
if ($res && $res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) $donors[] = $row;
}

// Fetch admin-created donor profiles
$donorProfiles = [];
$profilesRes = $conn->query("SELECT * FROM donor_profiles ORDER BY created_at DESC");
if ($profilesRes && $profilesRes->num_rows > 0) {
    while ($p = $profilesRes->fetch_assoc()) $donorProfiles[] = $p;
}
?>
<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- HERO -->
<section class="hero-modern-section d-flex align-items-end justify-content-center">
  <div class="container text-center text-white hero-content">
    <div class="text-bg-blur p-4">
      <h1 class="hero-title mb-3">Support Kadanapitiya Kanishta Vidyalaya</h1>
      <p class="hero-subtitle mb-4">
        Your generosity helps us provide better education and facilities for our students.
      </p>
      <a href="#donation-form" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white px-5">
        Support Us
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


<!-- WHY DONATE -->
<section class="why-donate-section py-5">
  <div class="container">
  <div class="main-title">
      <h2>School Benefactors</h2>
    </div>
   
    
    <p class="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
    We are deeply grateful to everyone considering a contribution to Kadanapitiya Primary School. Your support helps us nurture young minds, improve learning spaces, and provide the tools students need to thrive.

Donations can take two forms: financial contributions, which support construction, classroom needs, and student programs, and resource donations, such as desks, books, or sports equipment. Every gift, big or small, makes a real difference in strengthening the school and empowering our students.

We celebrate the generosity of our current donors both Financial Donors and Resource Donors and warmly welcome new supporters to join our community. Your involvement ensures that Kadanapitiya Primary School continues to grow, inspire, and educate for generations to come.
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

 

<!-- ADMIN-CREATED DONOR PROFILES -->
<section id="admin-donors" class="py-5 bg-white">
  <div class="container">
  <div class="main-title">
      <h2>Our Honoured Benefactors</h2>
    </div>
    

    <?php if (!empty($donorProfiles)): ?>
      <div class="row g-4 justify-content-center" id="donor-profiles-container">
        <?php foreach ($donorProfiles as $i => $p): ?>
          <div class="col-md-4 col-sm-6 donor-profile-card <?= $i >= 6 ? 'extra-profile' : '' ?>" style="<?= $i >= 6 ? 'display:none;' : '' ?>">
            <div class="card h-100 shadow-sm text-center p-3" style="max-width:220px; margin:0 auto;">
              <?php 
                $imgSrc = (!empty($p['image']) && file_exists($p['image'])) ? $p['image'] : 'images/default-donor.png';
              ?>
              <div style="width:100%; height:280px; overflow:hidden; border-radius:8px; margin-bottom:10px;">
                <img src="<?= htmlspecialchars($imgSrc) ?>" alt="Donor Image"
                     style="width:100%; height:100%; object-fit:cover; display:block; background:#f5f5f5;">
              </div>

              <h5 class="fw-bold text-dark" style="font-size:1rem; line-height:1.2rem; margin-top:5px;"><?= htmlspecialchars($p['name']) ?></h5>

              <?php if (!empty($p['description'])): ?>
                <p class="text-muted description d-none mt-2" style="font-size:0.85rem; text-align:center;"><?= nl2br(htmlspecialchars($p['description'])) ?></p>
                <a href="javascript:void(0)" class="view-more-profile text-primary" style="font-size:0.75rem; display:block; margin-top:5px;">View More</a>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <?php if (count($donorProfiles) > 6): ?>
        <div class="text-center mt-3">
          <a href="javascript:void(0)" id="toggleProfiles" class="view-more-text" style="cursor:pointer; text-decoration:underline; color:#24c1dd;">View More</a>
        </div>
      <?php endif; ?>
    <?php else: ?>
      <p class="text-center text-muted">No donor profiles available yet.</p>
    <?php endif; ?>
  </div>
</section>

<!-- DONATION FORM -->
<section id="donation-form" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
    <div class="main-title">
    <h2>Contribute & Empower Students</h2>
    </div>
      
      <p class="text-muted">Fill in the form below to make a donation.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form method="post" class="p-4 bg-white shadow rounded-4">
          
          <div class="mb-3">
            <label for="full_name" class="form-label fw-semibold">Full Name</label>
            <input type="text" id="full_name" name="full_name"
                   class="form-control form-control-lg"
                   placeholder="Jane Doe" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label fw-semibold">Email Address</label>
            <input type="email" id="email" name="email"
                   class="form-control form-control-lg"
                   placeholder="jane@example.com" required>
          </div>

          <div class="mb-3">
            <label for="address" class="form-label fw-semibold">Address</label>
            <input type="text" id="address" name="address"
                   class="form-control form-control-lg"
                   placeholder="123 Main Street, Galle" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label fw-semibold">Phone Number</label>
            <input type="tel" id="phone" name="phone"
                   class="form-control form-control-lg"
                   placeholder="771234567" required>
          </div>

          <div class="mb-3">
            <label for="donation_type" class="form-label fw-semibold">Donation Type</label>
            <select id="donation_type" name="donation_type"
                    class="form-select form-control-lg"
                    required onchange="toggleFields()">
              <option value="">Select Donation Type</option>
              <option value="finance">Financial</option>
              <option value="resource">Resource</option>
            </select>
          </div>

          <div class="mb-3 finance-field d-none">
            <label for="amount" class="form-label fw-semibold">Amount</label>
            <input type="number" id="amount" step="0.01" name="amount"
                   class="form-control form-control-lg"
                   placeholder="e.g. 5000">
          </div>

          <div class="mb-3 resource-field d-none">
            <label for="resource_details" class="form-label fw-semibold">Resource Details</label>
            <input type="text" id="resource_details" name="resource_details"
                   class="form-control form-control-lg"
                   placeholder="e.g. 20 school desks or 50 textbooks">
          </div>

          <div class="text-center mt-4">
            <button type="submit" name="submit"
                    class="btn-setting btn-hvr-setting-main btn-summer-sky text-white px-5">
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

<!-- JS for phone input & toggles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const phoneInput = document.querySelector("#phone");
  if (phoneInput) {
    const iti = window.intlTelInput(phoneInput, {
      initialCountry: "auto",
      geoIpLookup: cb => fetch("https://ipapi.co/json").then(r=>r.json()).then(d=>cb(d.country_code)).catch(()=>cb("LK")),
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
      separateDialCode: true
    });
    const form = phoneInput.closest("form");
    form.addEventListener("submit", e => {
      phoneInput.value = iti.getNumber(intlTelInputUtils.numberFormat.E164);
      if (!iti.isValidNumber()) {
        e.preventDefault();
        alert("Please enter a valid phone number with country code.");
        phoneInput.focus();
      }
    });
  }

  // Toggle Finance / Resource
  window.toggleFields = function() {
    const t = document.querySelector('#donation_type').value;
    document.querySelector('.finance-field').classList.toggle('d-none', t!=='finance');
    document.querySelector('.resource-field').classList.toggle('d-none', t!=='resource');
  };

  // Toggle extra public donors
  const toggleDonors = document.getElementById("toggleDonors");
  if (toggleDonors) {
    toggleDonors.addEventListener("click", function() {
      const extras = document.querySelectorAll(".extra-donor");
      const hidden = Array.from(extras).some(el => el.style.display === "none" || el.style.display === "");
      extras.forEach(el => el.style.display = hidden ? "block" : "none");
      toggleDonors.textContent = hidden ? "View Less" : "View More";
    });
  }

  // Toggle admin donor profiles
  const toggleProfiles = document.getElementById("toggleProfiles");
  if (toggleProfiles) {
    toggleProfiles.addEventListener("click", function() {
      const extras = document.querySelectorAll(".extra-profile");
      const hidden = Array.from(extras).some(el => el.style.display === "none" || el.style.display === "");
      extras.forEach(el => el.style.display = hidden ? "block" : "none");
      toggleProfiles.textContent = hidden ? "View Less" : "View More";
    });
  }

  // View More / Less description per profile
  document.querySelectorAll(".view-more-profile").forEach(btn => {
    btn.addEventListener("click", function() {
      const desc = this.closest(".card").querySelector(".description");
      desc.classList.toggle("d-none");
      this.textContent = desc.classList.contains("d-none") ? "View More" : "View Less";
    });
  });
});
</script>

<?php include 'includes/footer.php'; ?>
<link rel="stylesheet" href="css/donors.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
