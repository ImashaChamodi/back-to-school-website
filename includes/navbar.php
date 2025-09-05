<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="multipage">
  <nav class="navbar navbar-top-default navbar-expand-lg static-nav transparent-bg">
    <div class="container d-flex justify-content-between align-items-center">

      <!-- Mobile-only logo -->
      <a class="navbar-brand d-lg-none p-0 m-0" href="index.php">
        <img src="images/back_to_school_logo.png" alt="Logo" class="logo-default" style="height:60px;">
        <img src="images/logo2_black.png" alt="Logo" class="logo-scrolled" style="height:60px; display:none;">
      </a>

      <!-- Desktop Menu -->
      <div id="menu" class="collapse navbar-collapse d-none d-lg-block w-100">
        <ul class="navbar-nav mx-auto d-flex align-items-center">
          <li class="nav-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
            <a href="index" class="nav-link">Home</a>
          </li>
          <li class="nav-item"><a href="about" class="nav-link">About Us</a></li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">History</a>
            <ul class="dropdown-menu">
              <li><a href="school-history" class="dropdown-item">History of the School</a></li>
              <li><a href="golden-era" class="dropdown-item">Golden Era</a></li>
              <li><a href="previous-scholars" class="dropdown-item">Previous Scholars</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alumni</a>
            <ul class="dropdown-menu">
              <li><a href="opa-about" class="dropdown-item">About the OPA</a></li>
              <li><a href="opa-bearers" class="dropdown-item">Office Bearers</a></li>
            </ul>
          </li>

          <!-- Center logo (desktop only) -->
          <li class="nav-item mx-4 d-flex align-items-center d-none d-lg-flex">
            <a class="navbar-brand p-0 m-0" href="index.php">
              <img src="images/back_to_school_logo.png" alt="Logo" class="logo-default" style="height:60px;">
              <img src="images/logo2_black.png" alt="Logo" class="logo-scrolled" style="height:60px; display:none;">
            </a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contributors</a>
            <ul class="dropdown-menu">
              <li><a href="current-donors" class="dropdown-item">School Benefactors</a></li>
              <li><a href="current-volenteer" class="dropdown-item">Supporting Hands</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projects</a>
            <ul class="dropdown-menu">
              <li><a href="mission.php" class="dropdown-item">Mission 100</a></li>
              <li><a href="scholar-drive" class="dropdown-item">Scholar Drive</a></li>
              <li><a href="english-literacy" class="dropdown-item">English Literacy</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Oversight</a>
            <ul class="dropdown-menu">
              <li><a href="board.php" class="dropdown-item">The Board</a></li>
              <li><a href="auditor-reports" class="dropdown-item">Auditor Reports</a></li>
              <li><a href="annual-reports" class="dropdown-item">Annual Reports</a></li>
            </ul>
          </li>

          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
        </ul>
      </div>

      <!-- Hamburger for mobile -->
      <button id="sidemenu_toggle" class="d-lg-none" style="background:none; border:none; font-size:1.8rem;">&#9776;</button>
    </div>
  </nav>

  <!-- Mobile Side Menu -->
  <div id="sideMenu" style="
        position:fixed; top:0; left:-300px; width:300px; height:100%; 
        background:#cce5ff; color:#000; overflow-y:auto; transition:0.3s; 
        z-index:9999; padding-top:70px; box-shadow:2px 0 10px rgba(0,0,0,0.2);">

    <!-- Mobile logo -->
    <div style="text-align:center; margin-bottom:20px;">
      <a href="index.php">
        <img src="images/back_to_school_logo.png" alt="Logo" style="height:60px;">
      </a>
    </div>

    <button id="btn_sideNavClose" style="position:absolute; top:10px; right:10px; font-size:2rem; background:none; border:none;">&times;</button>

    <ul style="list-style:none; padding:0 20px; margin:0;">
      <?php
      // Sidebar simplified menu
      $menu = [
          ['title'=>'Home','link'=>'index.php','subtitles'=>[]],
          ['title'=>'About Us','link'=>'about.php','subtitles'=>[]],
          ['title'=>'History','link'=>'','subtitles'=>[
              ['title'=>'History of the School','link'=>'school-history.php'],
              ['title'=>'Golden Era','link'=>'golden-era.php'],
              ['title'=>'Previous Scholars','link'=>'previous-scholars.php']
          ]],
          ['title'=>'Alumni','link'=>'','subtitles'=>[
              ['title'=>'About the OPA','link'=>'opa-about.php'],
              ['title'=>'Office Bearers','link'=>'opa-bearers.php']
          ]],
          ['title'=>'Contributors','link'=>'','subtitles'=>[
              ['title'=>'School Benefactors','link'=>'current-donors.php'],
              ['title'=>'Supporting Hands','link'=>'current-volenteer.php']
          ]],
          ['title'=>'Projects','link'=>'','subtitles'=>[
              ['title'=>'Mission 100','link'=>'mission.php'],
              ['title'=>'Scholar Drive','link'=>'scholar-drive.php'],
              ['title'=>'English Literacy','link'=>'english-literacy.php']
          ]],
          ['title'=>'Oversight','link'=>'','subtitles'=>[
              ['title'=>'The Board','link'=>'board.php'],
              ['title'=>'Auditor Reports','link'=>'auditor-reports.php'],
              ['title'=>'Annual Reports','link'=>'annual-reports.php']
          ]],
          ['title'=>'Contact','link'=>'contact.php','subtitles'=>[]]
      ];

      foreach($menu as $item){
          if(!empty($item['subtitles'])){
              foreach($item['subtitles'] as $sub){
                  echo '<li><a href="'.$sub['link'].'" class="side-link">'.$sub['title'].'</a></li>';
              }
          } else {
              echo '<li><a href="'.$item['link'].'" class="side-link">'.$item['title'].'</a></li>';
          }
      }
      ?>
    </ul>
  </div>
</header>

<style>
/* Mobile Side Menu */
.side-link {
    display:block;
    padding:10px 0;
    font-weight:bold;
    color:#000;
    text-decoration:none;
    border-bottom:1px solid #99ccff;
}
.side-link:hover { color:#0056b3; }
</style>

<script>
  // Logo swap on scroll
  const mobileLogoWhite = document.querySelector('.d-lg-none .logo-default');
  const mobileLogoBlack = document.querySelector('.d-lg-none .logo-scrolled');
  const desktopLogoWhite = document.querySelector('.d-lg-flex .logo-default');
  const desktopLogoBlack = document.querySelector('.d-lg-flex .logo-scrolled');

  window.addEventListener('scroll', () => {
    if(window.scrollY>50){
      if(mobileLogoWhite) mobileLogoWhite.style.display='none';
      if(mobileLogoBlack) mobileLogoBlack.style.display='inline';
      if(desktopLogoWhite) desktopLogoWhite.style.display='none';
      if(desktopLogoBlack) desktopLogoBlack.style.display='inline';
    } else{
      if(mobileLogoWhite) mobileLogoWhite.style.display='inline';
      if(mobileLogoBlack) mobileLogoBlack.style.display='none';
      if(desktopLogoWhite) desktopLogoWhite.style.display='inline';
      if(desktopLogoBlack) desktopLogoBlack.style.display='none';
    }
  });

  // Side menu open/close
  const burgerBtn = document.getElementById('sidemenu_toggle');
  const sideMenu = document.getElementById('sideMenu');
  const closeBtn = document.getElementById('btn_sideNavClose');

  function closeSidebar(){ sideMenu.style.left='-300px'; }
  function openSidebar(){ sideMenu.style.left='0'; }

  burgerBtn.addEventListener('click', openSidebar);
  closeBtn.addEventListener('click', closeSidebar);

  // Auto close sidebar when link clicked
  document.querySelectorAll('.side-link').forEach(link=>{
      link.addEventListener('click', closeSidebar);
  });
</script>
