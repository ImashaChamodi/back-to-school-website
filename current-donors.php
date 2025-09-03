<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

$successMsg = '';
$errorMsg = '';

// Handle form submission
if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'] ?? '';
    $address = $_POST['address'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $donation_type = $_POST['donation_type'] ?? '';
    $amount = $donation_type === 'finance' ? ($_POST['amount'] ?? 0) : null;
    $resource_details = $donation_type === 'resource' ? ($_POST['resource_details'] ?? '') : null;

    $stmt = $conn->prepare(
        "INSERT INTO donations (full_name, address, phone, email, donation_type, amount, resource_details, status) 
         VALUES (?, ?, ?, ?, ?, ?, ?, 'pending')"
    );
    $stmt->bind_param("sssssss", $full_name, $address, $phone, $email, $donation_type, $amount, $resource_details);

    if ($stmt->execute()) {
        $successMsg = "✅ Thank you! Your donation request has been submitted and is pending approval.";
    } else {
        $errorMsg = "❌ Error submitting donation. Please try again later.";
    }
    $stmt->close();
}

// Fetch approved donors
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
<section class="position-relative d-flex align-items-center text-white" 
         style="min-height: 80vh; 
                background: url('images/Donors.png') bottom/cover no-repeat;
                overflow: hidden;">

  <div class="container position-relative text-center" data-aos="fade-up">

    <!-- Dark background only for text -->
    <div style="display: inline-block; background: rgba(0,0,0,0.65); padding: 25px 30px; border-radius: 10px; margin-bottom: 30px;">
      <h1 class="display-4 mb-3 text-uppercase" style="color: #24c1dd; margin: 0;">
        Support & Celebrate
      </h1>
      <p class="lead mb-0 fs-4 text-light" style="max-width: 700px; margin: auto;">
        Together, we make education stronger. Thank you for your generosity.
      </p>
    </div>

    <!-- Button stays on its own line -->
    <div class="tp-caption"
         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
         data-textalign="['center','center','center','center']"
         data-whitespace="nowrap" data-transform_idle="o:1;"
         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
         data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
         data-start="180" data-splitin="none" data-splitout="none" data-responsive_offset="on">

      <a href="#donationForm" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white" 
         style="border-radius:50px; padding: 15px 50px;">
          Donate Now 
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


<!-- WHY DONATE SECTION – Styled -->
<section class="py-5" style="background-color: #f1f6fb;">
  <div class="container">
    <div class="p-5 rounded shadow-sm" style="background: #ffffff; border-left: 6px solid #24c1dd;">
      <h2 class="text-dark mb-4 text-center" style="font-size: 3.3rem;">School Benefactors</h2>
      <div class="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
        <p>
          We are deeply grateful to everyone considering a contribution to <strong>Kadanapitiya Primary School</strong>. 
          Your support helps us nurture young minds, improve learning spaces, and provide the tools students need to thrive.
        </p>
        <p>
          Donations can take two forms: <strong>financial contributions</strong>, which support construction, classroom needs, 
          and student programs, and <strong>resource donations</strong>, such as desks, books, or sports equipment. Every gift, 
          big or small, makes a real difference in strengthening the school and empowering our students.
        </p>
        <p class="mb-0">
          We celebrate the generosity of our current donors—both Financial Donors and Resource Donors—and warmly welcome new 
          supporters to join our community. Your involvement ensures that <strong>Kadanapitiya Primary School</strong> continues 
          to grow, inspire, and educate for generations to come.
        </p>
      </div>
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

<!-- DONORS SECTION -->
<section id="donors-list" class="py-5 bg-light position-relative" 
         style="background: url('images/About_image.jpg') no-repeat center center/cover;">
  <div class="container position-relative" data-aos="fade-up" style="z-index:2;">
    <h2 class="text-center mb-4">Our Valued Donors</h2>
    <p class="text-center text-muted mb-5">
      Thank you for supporting Kadanapitiya School. Your contribution makes a difference!
    </p>

    <?php if (!empty($donors)) : ?>
      <div class="row g-4 justify-content-center" id="donorsGrid">
        <?php foreach ($donors as $index => $donor) : ?>
          <div class="col-lg-2 col-md-4 col-6 donor-item <?= $index >= 6 ? 'd-none extra-donors' : ''; ?>">
            <div class="p-3 bg-white shadow-sm rounded text-center h-100">
              <h5 class="mb-1" style="color:#24c1dd;">
                <?= htmlspecialchars($donor['full_name']); ?>
              </h5>
              <p class="text-muted mb-1"><?= htmlspecialchars($donor['address']); ?></p>
              <p class="text-muted mb-0">
                <?php if ($donor['donation_type'] == 'finance'): ?>
                  Financial Donation – Rs. <?= htmlspecialchars($donor['amount']); ?>
                <?php else: ?>
                  Resource Donation – <?= htmlspecialchars($donor['resource_details']); ?>
                <?php endif; ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <?php if(count($donors) > 6): ?>
        <div class="text-center mt-4">
          <a href="javascript:void(0);" id="viewAllBtn" 
             style="color:#24c1dd; font-weight:600; font-size:1.1rem; text-decoration:none;">
             View More &raquo;
          </a>
        </div>
      <?php endif; ?>

    <?php else: ?>
      <p class="text-center text-muted">No donors have been recorded yet.</p>
    <?php endif; ?>
  </div>
  <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(255,255,255,0.8); z-index:1;"></div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const viewAllBtn = document.getElementById('viewAllBtn');
    if(viewAllBtn){
      viewAllBtn.addEventListener('click', function() {
        document.querySelectorAll('.extra-donors').forEach(el => el.classList.toggle('d-none'));
        
        if (this.innerHTML.includes("View More")) {
          this.innerHTML = "View Less Donors &laquo;";
        } else {
          this.innerHTML = "View More Donors &raquo;";
        }
      });
    }
  });
</script>

<!-- DONATION FORM -->
<section id="donationForm" class="py-5" style="background-color: #f8f9fa;">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center mb-4" style="color: #212529;">Make a Donation</h2>
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
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Telephone</label>
        <input type="text" name="phone" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Donation Type</label>
        <select name="donation_type" class="form-select" required onchange="toggleFields()">
          <option value="">Select</option>
          <option value="finance">Financial</option>
          <option value="resource">Resource</option>
        </select>
      </div>

      <div class="mb-3 finance-field d-none">
        <label class="form-label">Amount</label>
        <input type="number" step="0.01" name="amount" class="form-control">
      </div>

      <div class="mb-3 resource-field d-none">
        <label class="form-label">Resource Details</label>
        <textarea name="resource_details" class="form-control"></textarea>
      </div>

      <div class="text-center">
    <div class="tp-caption"
         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
         data-textalign="['center','center','center','center']"
         data-whitespace="nowrap" data-transform_idle="o:1;"
         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
         data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
         data-start="180" data-splitin="none" data-splitout="none" data-responsive_offset="on">

        <button type="submit" name="submit" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white" 
                style="border-radius:50px; padding: 15px 50px; font-size: 1.1rem;">
            Submit Donation
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
</div>

    </form>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({duration:1000, once:true});</script>

<script>
function toggleFields() {
    document.querySelector('.finance-field').classList.add('d-none');
    document.querySelector('.resource-field').classList.add('d-none');
    let type = document.querySelector('select[name="donation_type"]').value;
    if (type === 'finance') {
        document.querySelector('.finance-field').classList.remove('d-none');
    } else if (type === 'resource') {
        document.querySelector('.resource-field').classList.remove('d-none');
    }
}
</script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
