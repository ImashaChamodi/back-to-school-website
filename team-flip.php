<?php
include 'includes/header.php';
?>

<!-- Add wrapper ONLY on this page -->
<div class="custom-navbar-dark">
    <?php include 'includes/navbar.php'; ?>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- Top Section: Half-screen image + Text -->
<section style="height: 80vh;">
  <div class="container-fluid h-100">
    <div class="row h-100">
      
      <!-- Left Half: Background Image -->
      <div class="col-md-6 p-0">
        <div style="height: 100%; background: url('images/ourteam.jpg') center center / cover no-repeat;"></div>
      </div>

      <!-- Right Half: Text Content -->
      <div class="col-md-6 d-flex align-items-center justify-content-center bg-light text-center">
        <div class="p-4">
          <h1 class="display-4 fw-bold">Meet Our Team</h1>
          <p class="lead">United by purpose, driven by passion</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Team Section With Personal Messages -->
<section class="py-5 bg-light-gray">
    <div class="container">
        <div class="row mb-5 text-center">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="fw-bold">Voices Behind the Mission</h2>
                <p class="lead">Meet the individuals who are not just leading our projects, but inspiring lives with their vision and compassion.</p>
            </div>
        </div>

        <!-- Member 1 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <img src="images/team1.jpg" class="rounded-circle shadow" width="180" height="180" alt="Jane Doe">
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold mb-1">First Person</h4>
                <p class="text-muted mb-2">Program Coordinator</p>
                <p>“Working with under-resourced schools has shown me how powerful even the smallest support can be. Every child deserves a chance to learn in a safe, welcoming environment, and I’m proud to be part of a team that believes in that too.”</p>
            </div>
        </div>

        <!-- Member 2 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <img src="images/team2.jpg" class="rounded-circle shadow" width="180" height="180" alt="John Smith">
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold mb-1">Second Person</h4>
                <p class="text-muted mb-2">Logistics Manager</p>
                <p>“Behind every successful donation is a lot of groundwork. My goal is to make sure everything runs smoothly, from school supplies to structural repairs — so our impact lasts longer than a single visit.”</p>
            </div>
        </div>

        <!-- Member 3 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <img src="images/team3.jpg" class="rounded-circle shadow" width="180" height="180" alt="Aisha Khan">
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold mb-1">Third Person</h4>
                <p class="text-muted mb-2">Volunteer Lead</p>
                <p>“Our volunteers are the heartbeat of this mission. Every weekend they show up — with smiles, books, tools, and energy — and that transforms not just buildings, but communities.”</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JS files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
