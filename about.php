<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
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

  <!-- About Us Hero Section -->
  <section class="p-0">
    <div class="abd-hero-section">
      <div class="container">
        <h1 class="abd-hero-title">About Us</h1>
        <p class="abd-hero-subtitle">Rebuilding schools, shaping lives.</p>
      </div>
    </div>
  </section>

  <!-- About School Section -->
  <section class="abd-about-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="abd-about-box">
            <h2 class="donatetext">Kadanapitiya Junior School</h2>
            <div class="abd-about-text">
              <p>
                Kadanapitiya Junior School has been at the heart of our village in the <strong>Kalutara District, Sri Lanka</strong>, for generations. Located in a peaceful, nature-rich environment, it has nurtured young minds with care and dedication, shaping the lives of countless students who have gone on to become respected individuals in society.
              </p>
              <p>
                Today, the school serves around <strong>50 children</strong>, guided by <strong>8 committed teachers and staff members</strong>. As a primary institution, it provides education up to <strong>Grade 5</strong> and continues to be a place where learning and values come together in a close-knit community setting.
              </p>
              <p>
                However, recent years have brought significant challenges. The <strong>COVID-19 pandemic</strong>, economic hardships, and a growing shift toward urban schools have caused a decline in enrollment, placing Junior School at risk of closure under government policy.
              </p>
              <p>
                In response, a group of past pupils united to form the <strong>Old Pupils Association (OPA)</strong>—a dedicated effort to safeguard the school’s legacy. With a shared commitment to rebuilding and revitalizing the school, the OPA is working hand-in-hand with the community to ensure that future generations continue to benefit from this treasured institution.
              </p>
              <p class="mb-0">
                We believe Kadanapitiya Junior School is more than just a school—it is a <strong>heritage</strong>, a <strong>foundation for opportunity</strong>, and a <strong>symbol of hope</strong> for the village. Together, we strive to keep its doors open, its classrooms filled, and its legacy alive.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Staff Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row mb-4 text-center">
        <div class="col-12">
          <h3 class="text-dark mb-3">Meet Our Staff</h3>
          <p class="text-muted mb-4">Our dedicated academic and non-academic staff ensure every student succeeds.</p>
        </div>
      </div>

      <div class="row g-4 justify-content-center">
        <?php
        $staff = [
          ['img' => 'images/staff1.jpg', 'name' => 'N.D.M.S. Napatage', 'role' => 'Principal - 3 Years'],
          ['img' => 'images/staff2.jpg', 'name' => 'H.R.T.P Peeris', 'role' => 'Teacher - 14 Years'],
          ['img' => 'images/staff3.jpg', 'name' => 'J.D.D Kularathne', 'role' => 'Teacher - 12 Years'],
          ['img' => 'images/staff4.png', 'name' => 'O.M.T. Manike', 'role' => 'Teacher - 8 Years'],
          ['img' => 'images/staff5.jpg', 'name' => 'W.A.S. Tharangani', 'role' => 'Teacher - 3 Years'],
          ['img' => 'images/staff6.jpg', 'name' => 'K.T.K. Amarasiri', 'role' => 'Teacher - 3 Years'],
          ['img' => 'images/staff7.jpg', 'name' => 'S.O.A.T. Madhushani', 'role' => 'Teacher - 3 Months'],
          ['img' => 'images/staff8.jpg', 'name' => 'K.G.S Anuradhi', 'role' => 'Development Officer - 4 Years'],
          ['img' => 'images/staff9.jpg', 'name' => 'R.A.K Pradeepika', 'role' => 'Non-Academic Staff - 3 Years']
        ];

        foreach ($staff as $member) : ?>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
            <div class="staff-card">
              <img src="<?= $member['img'] ?>" alt="<?= $member['name'] ?>" class="staff-img img-fluid">
              <h5 class="mt-3 staff-name"><?= $member['name'] ?></h5>
              <p class="staff-role text-muted mb-0"><?= $member['role'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section class="abd-mission-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="images/Mission.png" class="img-fluid abd-mission-img" alt="Our Mission">
        </div>
        <div class="col-md-6">
          <div class="abd-mission-box">
            <h2 class="donatetext">Our Mission</h2>
            <p class="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
              Our mission is to protect Kadanapitiya Junior School from closure and secure its future as a vital
              center of learning in the village. We are committed to reviving student enrollment, providing quality
              education in a supportive environment, and equipping both teachers and students with modern resources.
            </p>
            <p class="text-muted mb-0" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
              Together with the Old Pupils Association and community supporters, we lead initiatives such as
              <strong>Mission 100</strong>, <strong>Scholar Drive</strong>, and the <strong>English Literacy Program</strong>
              to ensure the school not only survives but thrives for generations to come.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vision Section -->
  <section class="abd-vision-section">
    <div class="container">
      <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="images/Vision.png" class="img-fluid abd-vision-img" alt="Our Vision">
        </div>
        <div class="col-md-6">
          <div class="abd-vision-box">
            <h2 class="donatetext">Our Vision</h2>
            <p class="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
              Our vision is to be a strong and friendly school at the heart of Kadanapitiya village,
              where every child feels safe, happy, and inspired to learn. We aim to give students the
              skills and values they need for the future while encouraging more children to join and
              remain in school.
            </p>
            <p class="text-muted mb-0" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
              By working closely with our community and past pupils, we strive to make Kadanapitiya
              Primary School a proud example of a rural school that truly cares for every child.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

  <!-- JS -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>
</body>

</html>