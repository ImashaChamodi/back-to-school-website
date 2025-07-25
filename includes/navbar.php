    
  <?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
   
   <!-- Header start -->
   <header class="multipage">
    <nav class="navbar navbar-top-default navbar-expand-lg static-nav transparent-bg center-logo">
  <div class="container">
    <a class="logo link hide-cursor" href="javascript:void(0)">
      <img src="images/back_to_school_logo.png" alt="logo" title="Logo" class="logo-default">
      <img src="images/logo_black.png" alt="logo" title="Logo" class="logo-scrolled">
    </a>
    <div id="menu" class="collapse navbar-collapse d-none d-lg-block mod-menu">
      <ul class="nav navbar-nav">
      <li class="nav-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
  <a href="index.php" class="nav-link link dropdown-arrow">Home</a>
</li>


        <li class="nav-item">
  <a href="about.php" class="nav-link link dropdown-arrow">About Us</a>
</li>


        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Our Team</a>
          <ul class="dm-align-2 hide-cursor">
            <li><a href="team-flip.php">Meet the Team</a></li>
            <li><a href="team-volunteers.php">Our Volunteers</a></li>
            <li><a href="team-advisors.php">Advisors</a></li>
            <li><a href="team-classic-half.php">Support Crew</a></li>
            <li><a href="team-creative.php">Field Agents</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Gallery</a>
          <ul class="dm-align-2 hide-cursor">
            <li><a href="parallax-portfolio.php">School Visits</a></li>
            <li><a href="video-bg.php">Video Stories</a></li>
            <li><a href="portfolio-creative.php">Before & After</a></li>
            <li><a href="portfolio-minimal.php">Student Moments</a></li>
            <li><a href="portfolio-single.php">Impact Showcase</a></li>
            <li><a href="portfolio-three-column.php">All Projects</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav ms-auto">
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Donate</a>
          <ul class="dm-align-2 hide-cursor">
            <li><a href="pricing-creative.php">Support a School</a></li>
            <li><a href="pricing-elegant.php">Monthly Giving</a></li>
            <li><a href="pricing-modern.php">Corporate Support</a></li>
          </ul>
        </li>

        <li class="nav-item mega-menu four-col">
          <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Resources</a>
          <!-- Kept all original items as-is; you can update link content later -->
        </li>

        <li class="nav-item right">
          <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Blog</a>
          <ul class="dm-align-2 hide-cursor">
            <li><a href="blog.php">Latest News</a></li>
            <li><a href="blog-masonry.php">Success Stories</a></li>
            <li><a href="blog-detail.php">Education Insights</a></li>
          </ul>
        </li>

        <li class="nav-item right">
          <a href="javascript:void(0)" class="nav-link link dropdown-arrow">Contact</a>
          <ul class="hide-cursor">
            <li><a href="contact-split.html">Reach Us</a></li>
            <li><a href="contact-full.html">Visit a Project</a></li>
            <li><a href="contact-classic.html">Send a Message</a></li>
          </ul>
        </li>
      </ul>
    </div>



    </header>
    <!-- Header end -->