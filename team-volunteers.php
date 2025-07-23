<?php include 'includes/header.php'; ?>

<?php include 'includes/header.php'; ?>

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
                <div style="height: 100%; background: url('images/About_image.jpg') center center / cover no-repeat;"></div>
            </div>

            <!-- Right Half: Text Content -->
            <div class="col-md-6 d-flex align-items-center justify-content-center bg-light text-center">
                <div class="p-4">
                    <h1 class="display-4 fw-bold">Our Volunteers</h1>
                    <p class="lead">Committed hands, compassionate hearts</p>
                    <p>
                        Volunteers are the heartbeat of our mission. With dedication and compassion, they bring light into classrooms and communities.
                        Whether delivering supplies or organizing workshops, their impact is truly immeasurable.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-light-gray">
    <div class="container">
        <!-- Intro -->
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="fw-bold">The Backbone of Our Mission</h2>
                <p class="lead">
                    Our volunteers are the lifeblood of our cause, giving their time, energy, and skills 
                    to bring education and hope to underserved communities. From organizing events to supporting 
                    field operations, their dedication transforms lives and builds brighter futures.
                </p>
                <p>
                    Whether it’s helping in rural schools, fundraising, or spreading awareness, our volunteers 
                    represent the spirit of community and kindness that drives our mission forward every day.
                </p>
            </div>
        </div>

        <section class="py-5 bg-light-gray">
  <div class="container">
    <!-- Section Heading -->
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="fw-bold">Meet Our Volunteers</h2>
        <p class="lead">
          Passionate, driven, and committed — our volunteers are the true heroes behind every smile we bring.
        </p>
      </div>
    </div>

    <!-- Volunteer Cards -->
    <div class="row justify-content-center">
      
      <!-- Volunteer 1 -->
      <div class="col-12 col-md-8 mb-5">
        <div class="card shadow-sm border-0">
          <div class="row g-0 align-items-center">
            <div class="col-md-4 text-center p-3">
              <img src="images/volunteer1.jpg" class="img-fluid rounded-circle" alt="Volunteer 1" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Sarah Thompson</h5>
                <p class="card-subtitle mb-2 text-muted">Event Coordinator</p>
                <p class="card-text">
                  Sarah has led numerous school supply drives and believes deeply in the power of collective action. Her warmth and energy uplift every project she touches.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Volunteer 2 -->
      <div class="col-12 col-md-8 mb-5">
        <div class="card shadow-sm border-0">
          <div class="row g-0 align-items-center">
            <div class="col-md-4 text-center p-3">
              <img src="images/volunteer2.jpg" class="img-fluid rounded-circle" alt="Volunteer 2" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">David Lee</h5>
                <p class="card-subtitle mb-2 text-muted">Community Outreach</p>
                <p class="card-text">
                  A bridge between donors and schools, David ensures that every resource reaches the right hands. His calm and caring presence is admired by all.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Volunteer 3 -->
      <div class="col-12 col-md-8 mb-5">
        <div class="card shadow-sm border-0">
          <div class="row g-0 align-items-center">
            <div class="col-md-4 text-center p-3">
              <img src="images/volunteer3.jpg" class="img-fluid rounded-circle" alt="Volunteer 3" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Anita Fernandez</h5>
                <p class="card-subtitle mb-2 text-muted">Fundraising Specialist</p>
                <p class="card-text">
                  Anita leads with passion and precision. Her work behind the scenes ensures we can expand our programs and reach more students in need.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <a href="volunteer-signup.php" class="btn btn-summer-sky text-white px-4 py-2">Join Our Volunteers</a>
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
