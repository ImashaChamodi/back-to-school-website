<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include header and navbar
include 'includes/header.php';
include 'includes/navbar.php';
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- Hero section with background image -->
<section class="p-0 no-transition" style="position: relative;">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container" 
         style="background: url('images/about_image.jpg') center center/cover no-repeat; height: 600px; position: relative;">
        
        <!-- Overlay for dark tint -->
        <div class="overlay" style="position: absolute; top:0; left:0; right:0; bottom:0; background: rgba(0,0,0,0.5);"></div>

        <!-- Text container -->
        <div class="container" style="position: relative; z-index: 10; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <h2 class="color-white text-capitalize" style="font-size: 3rem; font-weight: 700; margin-bottom: 15px;">
                About Back To School
            </h2>
            <p class="color-white" style="font-size: 1.25rem; max-width: 600px; margin: 0 auto;">
                Empowering Education, One School at a Time
            </p>
            <a href="donate.php" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white mt-4" style="padding: 12px 30px; font-weight: 600;">
                Donate Now
                <span class="btn-hvr-setting btn-hvr-black">
                    <span class="btn-hvr-setting-inner">
                        <span class="btn-hvr-effect"></span>
                        <span class="btn-hvr-effect"></span>
                        <span class="btn-hvr-effect"></span>
                        <span class="btn-hvr-effect"></span>
                    </span>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- About content -->
<section class="about-us-section pt-5 pb-5">
  <div class="container">
    <h3 class="mb-4">Our Mission</h3>
    <p>
      At Back To School, we are dedicated to saving underfunded schools from closure and ensuring every child has access to quality education. 
      Our passion is to create a better future by providing essential resources, learning opportunities, and community support.
    </p>
    <p>
      We believe education is the foundation for success, and no child should be left behind due to financial hardships or lack of facilities. 
      Our programs focus on helping schools with supplies, technology, and teacher training.
    </p>

    <h3 class="mt-5 mb-4">Our Vision</h3>
    <p>
      We envision a world where every child, regardless of their background, has the tools and support they need to succeed academically and personally. 
      By collaborating with educators, parents, and communities, we strive to uplift schools and build lasting change.
    </p>
    <p>
      Together, we can ensure that education remains accessible, inspiring, and transformative for generations to come.
    </p>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
