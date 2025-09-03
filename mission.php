<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- BLACK BUFFER (under navbar) -->
<div class="nav-buffer"></div>

<!-- MISSION 100 SECTION -->
<section class="mission-section">
  <div class="container text-center">
    <h2 class="section-title">Mission 100</h2>
    <p class="section-text">
      Mission 100 is a key initiative aimed at increasing student enrollment at Kadanapitiya Primary School 
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
    <h3 class="section-heading">Our Strategic Actions</h3>

    <!-- Block 1 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <img src="images/scholarships.jpg" alt="Scholarships" class="img-fluid rounded-img">
      </div>
      <div class="col-lg-6">
        <h4 class="action-title">Scholarships & School Kits</h4>
        <p class="action-text">
          Scholarships for Grade 1 entrants and school kits for all students to support learning. 
          Laptops are awarded to top-performing students to encourage academic excellence.
        </p>
      </div>
    </div>

    <!-- Block 2 -->
    <div class="row align-items-center mb-5 flex-lg-row-reverse">
      <div class="col-lg-6">
        <img src="images/quality-education.jpg" alt="Quality Education" class="img-fluid rounded-img">
      </div>
      <div class="col-lg-6">
        <h4 class="action-title">Quality Education</h4>
        <p class="action-text">
          Quality education does not mean English medium alone. We ensure English is taught well as a 
          language, but the medium remains accessible to all. Our focus is on activity-based education, 
          nurturing curiosity, creativity, and confidence.
        </p>
      </div>
    </div>

    <!-- Block 3 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <img src="images/extracurricular.jpg" alt="Sports and Extracurriculars" class="img-fluid rounded-img">
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
    <h3 class="roadmap-title">Roadmap to 100 Students</h3>

    <div class="roadmap-steps">

      <div class="roadmap-card">
        <div class="step-number">2025</div>
        <h4>10 New Admissions</h4>
        <p>Run a “Back to School” campaign, distribute free school kits, and host an Open Day to showcase quality teaching and activities.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2026</div>
        <h4>15 New Admissions</h4>
        <p>Provide scholarships, launch free English classes, and start early music and sports programs to attract families.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2027</div>
        <h4>20 New Admissions</h4>
        <p>Introduce community engagement programs like health checkups, cultural events, and workshops to strengthen ties.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2028</div>
        <h4>20 New Admissions</h4>
        <p>Reward top students with laptops, promote alumni success, and focus on academic excellence to build parent trust.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2029</div>
        <h4>15 New Admissions</h4>
        <p>Boost extracurricular achievements with sports tournaments, cultural events, and school exhibitions for recognition.</p>
      </div>

      <div class="roadmap-card">
        <div class="step-number">2030</div>
        <h4>Goal Achieved – 100 Students</h4>
        <p>By following this roadmap, Kadanapitiya Primary School will reach 100 students and secure a sustainable future.</p>
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
