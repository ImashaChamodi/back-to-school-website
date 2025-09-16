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

<!-- NAV BUFFER -->
<div class="scholar-nav-buffer"></div>

<!-- SCHOLAR DRIVE SECTION -->
<section class="scholar-section">
  <div class="container text-center">
    <h2 class="section-title">Scholar Drive</h2>
    <p class="scholar-section-text">
      The Scholar Drive initiative is designed to improve academic outcomes and help students excel in the Grade 5
      Scholarship Exam. Our target is to achieve a <strong>60% pass rate by 2028</strong>. Through additional coaching,
      study programs, and dedicated teacher support, this project equips students with the skills, knowledge, and
      confidence needed to succeed. Scholar Drive not only enhances individual achievement but also strengthens
      the reputation and credibility of the school within the community.
    </p>
  </div>
</section>

<<!-- STRATEGIC ACTIONS SECTION (UPDATED DESIGN) -->
  <section class="scholar-actions-section">
    <div class="container text-center">

      <!-- Section Title -->
      <div class="main-title">
     <h2>Our Strategic Actions</h2>
    </div>
      

      <!-- Image -->
      <div class="scholar-actions-image-wrapper mb-4">
        <img src="images/Scholer.png" alt="Scholar Drive" class="scholar-actions-image">
      </div>

      <!-- Actions Cards -->
      <div class="scholar-actions-grid">

        <!-- 1. Targeted Scholarships & School Support -->
        <div class="scholar-action-card">
          <h4>Targeted Scholarships & School Support</h4>
          <p>
            Provide scholarships for Grade 1 entrants and essential school kits for all students.
            Laptops are awarded to top-performing students who excel in the Grade 5 Scholarship Exam,
            motivating students and supporting academic success.
          </p>
        </div>

        <!-- 2. Focused Quality Education -->
        <div class="scholar-action-card">
          <h4>Focused Quality Education</h4>
          <p>
            Implement exam-oriented teaching methods covering the full Grade 1–5 syllabus.
            Lessons are practical, interactive, and structured, with targeted exercises,
            past scholarship papers, and step-by-step guidance to prepare students effectively
            for the Grade 5 Scholarship Exam.
          </p>
        </div>

        <!-- 3. Extra Coaching & After-School Support -->
        <div class="scholar-action-card">
          <h4>Extra Coaching & After-School Support</h4>
          <p>
            Offer after-school programs, study groups, and free seminars for students and parents,
            providing additional guidance and personalized teacher support to strengthen understanding
            and exam readiness.
          </p>
        </div>

        <!-- 4. Seminars, Mock Exams & Motivation -->
        <div class="scholar-action-card">
          <h4>Seminars, Mock Exams & Motivation</h4>
          <p>
            Conduct regular motivational seminars and mock exams to track progress, boost confidence,
            and instill a culture of academic excellence, while engaging parents in the preparation process.
          </p>
        </div>

      </div>
    </div>
  </section>


<!-- ROADMAP SECTION (2026 - 2028 ONLY) -->
<section class="scholar-roadmap-section">
  <div class="container">
  <div class="main-title">
     <h2>Roadmap to 60% Pass Rate</h2>
    </div>
    
   
    <p class="scholar-section-text text-center">
      The Scholar Drive project begins in 2026 and step by step will build academic excellence 
      to achieve the <strong>60% pass rate target</strong> by 2028.
    </p>

    <div class="scholar-roadmap-grid">

      <!-- 2026 -->
      <div class="scholar-roadmap-card">
        <div class="scholar-card-year">2026</div>
        <div class="scholar-card-title">Foundation Year</div>
        <p>Introduce after-school coaching, identify learning gaps, and begin regular progress tracking 
        through practice tests and feedback sessions.</p>
      </div>

      <!-- 2027 -->
      <div class="scholar-roadmap-card">
        <div class="scholar-card-year">2027</div>
        <div class="scholar-card-title">Strengthening Performance</div>
        <p>Expand focused exam-oriented teaching, conduct monthly mock exams, provide one-on-one mentoring, 
        and organize motivational seminars for students and parents.</p>
      </div>

      <!-- 2028 -->
      <div class="scholar-roadmap-card">
        <div class="scholar-card-year">2028</div>
        <div class="scholar-card-title">Achieve 60% Pass Rate</div>
        <p>Consolidate strategies with intensive coaching, continuous mock exams, and collaborative study programs, 
        successfully reaching the <strong>60% pass rate</strong> in the Grade 5 Scholarship Exam.</p>
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