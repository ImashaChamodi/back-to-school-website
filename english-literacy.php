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

<!-- NAV B<body data-bs-spy="scroll" data-bs-target=".navbar-nav">UFFER -->
<div class="english-nav-buffer"></div>

<!-- ENGLISH LITERACY PROGRAM SECTION -->
<section class="english-section">
  <div class="container text-center">
    <h2 class="section-title">English Literacy Program</h2>
    <p class="english-section-text">
      The English Literacy Program aims to prepare students for future opportunities by enabling
      <strong>60% of them to transition into English medium education after Grade 5</strong>.
      This initiative focuses on strengthening language skills, improving comprehension, and building
      communication abilities through interactive lessons and practice-based learning.
    </p>
  </div>
</section>

<!-- STRATEGIC ACTIONS SECTION -->
<section class="english-strategies-section">
  <div class="container">
    <h2 class="donatetext">Our Strategic Actions</h2>

    <div class="english-strategies-grid">
      <div class="english-strategy-card">
        <h4>Early Language Exposure</h4>
        <p>
          Introduce interactive English activities from Grade 1, including storytelling, reading sessions,
          and vocabulary exercises to build a strong foundation for future language learning.
        </p>
      </div>

      <!-- 2. Structured Skill Development -->
      <div class="english-strategy-card">
        <h4>Structured Skill Development</h4>
        <p>
          Focus on systematic development of reading, writing, listening, and speaking skills,
          using guided lessons, practical exercises, and assessment-based feedback for continuous improvement.
        </p>
      </div>

      <!-- 3. Extra Coaching & Practice -->
      <div class="english-strategy-card">
        <h4>Extra Coaching & Practice</h4>
        <p>
          Provide after-school English clubs, study sessions, and interactive practice programs to reinforce
          classroom learning and prepare students for smooth transition into English medium education.
        </p>
      </div>

      <!-- 4. Seminars, Mock Activities & Motivation -->
      <div class="english-strategy-card">
        <h4>Seminars, Mock Activities & Motivation</h4>
        <p>
          Conduct motivational seminars, language games, and mock reading/writing exercises to track progress,
          build confidence, and actively engage students and parents in their learning journey.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- HORIZONTAL ROADMAP -->
<section class="english-roadmap-section">
  <div class="container">
    <h2 class="donatetext">Roadmap to 60% English Medium Transition</h2>
    <div class="english-roadmap-container">
      <div class="english-roadmap-line"></div>

      <?php
      $roadmap_steps = [
        ["2025", "Early Language Exposure", "Introduce interactive English activities including storytelling, reading sessions, and vocabulary exercises to build a strong foundation."],
        ["2026", "Structured Skill Development", "Focus on systematic development of reading, writing, listening, and speaking skills through guided lessons and practical exercises."],
        ["2027", "Extra Coaching & Practice", "Provide after-school English clubs, study sessions, and interactive practice programs to reinforce classroom learning."],
        ["2028", "Seminars, Mock Activities & Motivation", "Conduct motivational seminars, language games, and mock reading/writing exercises to track progress and build confidence."],
        ["2029", "Parent Engagement", "Engage parents in monitoring progress, encourage home practice, and highlight student achievements to reinforce learning."],
        ["2030", "60% Transition Achieved", "Ensure that 60% of students are prepared to enter English medium, demonstrating the success of the English Literacy Program."]
      ];

      foreach ($roadmap_steps as $step) {
        echo '<div class="english-roadmap-step">
                  <div class="english-roadmap-step-circle">' . $step[0] . '</div>
                  <div class="english-roadmap-step-card">
                    <div class="english-step-year">' . $step[0] . '</div>
                    <div class="english-step-title">' . $step[1] . '</div>
                    <div class="english-step-text">' . $step[2] . '</div>
                  </div>
                </div>';
      }
      ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>