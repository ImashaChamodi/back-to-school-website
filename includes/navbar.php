<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Header start -->
<header class="multipage">
  <nav class="navbar navbar-top-default navbar-expand-lg static-nav transparent-bg">
    <div class="container">

      <!-- Navbar collapse -->
      <div id="menu" class="collapse navbar-collapse w-100">
        <ul class="navbar-nav mx-auto d-flex align-items-center">

          <!-- Left side items -->
          <li class="nav-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">History</a>
            <ul class="dropdown-menu">
              <li><a href="school-history.php" class="dropdown-item">History of the School</a></li>
              <li><a href="golden-era.php" class="dropdown-item">Golden Era</a></li>
              <li><a href="previous-scholars.php" class="dropdown-item">Previous Scholars</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alumni</a>
            <ul class="dropdown-menu">
              <li><a href="opa-about.php" class="dropdown-item">About the OPA</a></li>
              <li><a href="opa-bearers.php" class="dropdown-item">Office Bearers</a></li>
            </ul>
          </li>

          <!-- ✅ Center logo exactly in middle -->
          <li class="nav-item mx-4 d-flex align-items-center">
            <a class="navbar-brand p-0 m-0" href="index.php">
              <img src="images/back_to_school_logo.png" alt="Logo" class="logo-default" style="height:60px;">
              <img src="images/logo2_black.png" alt="Logo" class="logo-scrolled" style="height:60px;">
            </a>
          </li>

          <!-- Right side items -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contributors</a>
            <ul class="dropdown-menu">
              <li><a href="current-donors.php" class="dropdown-item">School Benefactors</a></li>
              <li><a href="current-volenteer.php" class="dropdown-item">Supporting Hands</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projects</a>
            <ul class="dropdown-menu">
              <li><a href="mission.php" class="dropdown-item">Mission 100</a></li>
              <li><a href="scholar-drive.php" class="dropdown-item">Scholar Drive</a></li>
              <li><a href="english-literacy.php" class="dropdown-item">English Literacy</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Oversight</a>
            <ul class="dropdown-menu">
              <li><a href="board.php" class="dropdown-item">The Board</a></li>
              <li><a href="auditor-reports.php" class="dropdown-item">Auditor Reports</a></li>
              <li><a href="annual-reports.php" class="dropdown-item">Annual Reports</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
          <a href="contact.php" class="nav-link">Contact</a>
            
          </li>
        </ul>
      </div>
      <!-- End collapse -->

    </div>
  </nav>
</header>
<!-- Header end -->
