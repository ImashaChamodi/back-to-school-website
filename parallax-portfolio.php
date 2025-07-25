<?php include 'includes/header.php'; ?>

<!-- Navbar -->
<div class="custom-navbar-dark">
  <?php include 'includes/navbar.php'; ?>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- ✅ HERO SECTION: New, Clean, Minimal -->
<section class="py-5 bg-light-gray text-center">
  <div class="container">
    <h1 class="display-4 fw-bold color-summer-sky mb-3">Our School Visit Gallery</h1>
    <p class="lead text-muted">Explore the joyful moments captured across every school we visited.</p>
  </div>
</section>

<!-- ✅ GALLERY GRID: Clean, Responsive, Dynamic -->
<section id="gallery" class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <?php
        $folder = 'images/gallery';
        $images = glob($folder . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        if (!empty($images)):
          foreach ($images as $img): ?>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
              <div class="rounded shadow-sm overflow-hidden hover-effect">
                <a href="<?= $img ?>" data-lightbox="school-gallery" data-title="School Visit">
                  <img src="<?= $img ?>" class="img-fluid w-100" alt="Gallery Image">
                </a>
              </div>
            </div>
          <?php endforeach;
        else: ?>
          <div class="col-12 text-center">
            <p class="text-muted">No images found. Add images to <code>images/gallery/</code></p>
          </div>
        <?php endif; ?>
    </div>
  </div>
</section>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- ✅ Required Scripts -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

<!-- ✅ Lightbox -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

</body>
</html>
