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

<body data-bs-spy="scroll" data-bs-target=".navbar-nav"></body>

<!-- BLACK BUFFER (under navbar) -->
<div class="nav-buffer"></div>

<!-- MISSION 100 SECTION -->
<section class="mission-section">
  <div class="container text-center">
    <h2 class="section-title">Mission 100</h2>
    <p class="section-text">
      Mission 100 is a key initiative aimed at increasing student enrollment at Kadanapitiya Junior School
      to over 100 by the year 2030. Rural schools with fewer than 100 students face the risk of permanent
      closure due to government policies, and our school currently falls below this threshold. Mission 100
      focuses on attracting more children from the village and surrounding areas, ensuring that the school
      remains a vibrant and vital educational institution. By creating a welcoming, high-quality learning
      environment, this project works to secure the school’s future for generations to come.
    </p>
  </div>
</section>

<!-- STRATEGIC ACTIONS -->
<section class="actions-section">
  <div class="container">
    <h2 class="donatetext">Our Strategic Actions</h2>

    <!-- Block 1 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <img src="images/Missiontwo.png"
          alt="Scholarships"
          class="img-fluid"
          style="height: 350px; width: 600px; border-radius: 20px; object-fit: cover;">
      </div>
      <div class="col-lg-6">
        <h4 class="action-title">Scholarships & School Kits</h4>
        <p class="action-text">
          To reduce economic barriers, we provide monthly scholarships and essential school tools for students. This support eases financial difficulties for families, encouraging them to choose our school over others. Additionally, laptops are awarded to top-performing students who pass the Grade 5 Scholarship Exam, motivating students to excel academically and giving parents confidence in their child’s education.
        </p>
      </div>
    </div>

    <!-- Block 2 -->
    <div class="row align-items-center mb-5 flex-lg-row-reverse">
      <div class="col-lg-6">
        <img src="images/Missionone.png" alt="Quality Education" class="img-fluid rounded-img">
      </div>
      <div class="col-lg-6">
        <h4 class="action-title">Quality Education</h4>
        <p class="action-text">
          We focus on delivering high-quality education using modern and effective teaching methods, with a strong emphasis on English language learning. A solid foundation in English from Grades 1 to 5 ensures students are well-prepared for future education, meeting parents’ expectations and giving them a reason to select our school.
        </p>
      </div>
    </div>

    <!-- Block 3 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <img src="images/Missionthree.png" alt="Sports and Extracurriculars" class="img-fluid rounded-img">
      </div>
      <div class="col-lg-6">
        <h4 class="action-title">Sports & Extracurricular Activities</h4>
        <p class="action-text">
          Alongside academics, we encourage participation in sports, cultural programs, and
          extracurricular activities. These opportunities help students build teamwork, leadership,
          and life skills beyond the classroom.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ROADMAP SECTION -->
<section class="roadmap-section">
  <div class="container">
    <h2 class="donatetext">Roadmap to 100 Students</h2>

    <div class="roadmap-steps">

      <div class="roadmap-card">
        <div class="step-number">2025</div>
        <h4>10 New Admissions</h4>
        <p>Run a “Back to School” campaign, distribute free school kits, and host an Open Day to showcase quality teaching and activities.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2026</div>
        <h4>15 New Admissions</h4>
        <p>Provide scholarships for new students, launch free English support classes, and introduce after-school programs to enhance learning.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2027</div>
        <h4>20 New Admissions</h4>
        <p>Organize free seminars, leadership workshops, and community engagement activities to strengthen student and parent interest.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2028</div>
        <h4>20 New Admissions</h4>
        <p>Reward top-performing students with laptops, highlight alumni success stories, and maintain high academic standards to build parent trust.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2029</div>
        <h4>15 New Admissions</h4>
        <p>Boost participation in sports, cultural programs, and extracurricular activities, promoting holistic development and school recognition.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2030</div>
        <h4>Goal Achieved – 100 Students</h4>
        <p>Following this roadmap, Kadanapitiya Junior School will reach 100 students, offering scholarships, quality education, and enriching programs for a sustainable future.</p>
      </div>


    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JS FILES -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>

</html>