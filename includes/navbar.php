<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Header start -->
<header class="multipage">
  <nav class="navbar navbar-top-default navbar-expand-lg static-nav transparent-bg center-logo">
    <div class="container">

      <!-- Centered logo -->
      <a class="logo link hide-cursor" href="javascript:void(0)">
        <img src="images/back_to_school_logo.png" alt="logo" title="Logo" class="logo-default">
        <img src="images/logo_black.png" alt="logo" title="Logo" class="logo-scrolled">
      </a>

      <!-- Menu start -->
      <div id="menu" class="collapse navbar-collapse d-none d-lg-block mod-menu">

        <!-- Left menu -->
        <ul class="nav navbar-nav">
          <li class="nav-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
            <a href="index.php" class="nav-link link dropdown-arrow">Home</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link link dropdown-arrow">About Us</a>
          </li>

          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link link dropdown-arrow">History</a>
            <ul class="dm-align-2 hide-cursor">
              <li><a href="school-history.php">History of the School</a></li>
              <li><a href="golden-era.php">Golden Era</a></li>
              <li><a href="previous-scholars.php">Previous Scholars</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Alumni</a>
            <ul class="dm-align-2 hide-cursor">
              <li><a href="opa-about.php">About the OPA</a></li>
              <li><a href="opa-bearers.php">Office Bearers</a></li>
             
            </ul>
          </li>
        </ul>

        <!-- Right menu -->
        <ul class="nav navbar-nav ms-auto">

          <li class="nav-item">
            <a href="current-donors.php" class="nav-link link dropdown-arrow">Donors</a>
            <ul class="dm-align-2 hide-cursor">
              <li><a href="">Donors</a></li>
              <li><a href="volunteer-support.php">Volunteer Support</a></li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Projects</a>
            <ul class="dm-align-2 hide-cursor">
              <li><a href="scholar-drive.php">Mission 100</a></li>
              <li><a href="scholar-drive.php">Scholar Drive</a></li>
              <li><a href="english-literacy.php">English Literacy</a></li>
            </ul>
          </li>

          <!-- ✅ Template for Transparency/Oversight -->
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Oversight</a>
            <ul class="dm-align-2 hide-cursor">
              <li><a href="board.php">The Board</a></li>
              <li><a href="auditor-reports.php">Auditor Reports</a></li>
              <li><a href="annual-reports.php">Annual Reports</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Contact</a>
            <ul class="hide-cursor">
              <li><a href="contact-split.html">Reach Us</a></li>
              <li><a href="contact-full.html">Visit a Project</a></li>
              <li><a href="contact-classic.html">Send a Message</a></li>
            </ul>
          </li>
        </ul>

      </div>
      <!-- Menu end -->
    </div>
  </nav>
</header>
<!-- Header end -->
