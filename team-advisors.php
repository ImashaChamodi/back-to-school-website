<?php include 'includes/header.php'; ?>

<!-- Navbar -->
<div class="custom-navbar-dark">
    <?php include 'includes/navbar.php'; ?>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- Top Banner Section -->
<section style="height: 80vh;">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Left: Image -->
            <div class="col-md-6 p-0">
                <div style="height: 100%; background: url('images/advisors.jpg') center center / cover no-repeat;"></div>
            </div>

            <!-- Right: Text -->
            <div class="col-md-6 d-flex align-items-center justify-content-center bg-light text-center">
                <div class="p-4">
                    <h1 class="display-4 fw-bold" style="color: #212529;">Our Advisors</h1>
                    <p class="lead" style="color: #24c1dd;">Guiding our mission with experience and wisdom</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advisors Section -->
<section class="py-5 bg-light-gray">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="fw-bold" style="color: #212529;">Meet Our Advisory Panel</h2>
                <p class="lead" style="color: #24c1dd;">
                    Experts and mentors who provide strategic direction and ensure our efforts are impactful and sustainable.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Advisor 1 -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 text-center p-3">
                            <img src="images/advisor1.jpg" class="img-fluid rounded-circle" alt="Advisor 1" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="fw-bold mb-1" style="color: #212529;">Dr. Maya Perera</h5>
                                <p class="text-muted" style="color: #24c1dd;">Education Consultant</p>
                                <p style="color: #212529;">Dr. Perera brings over 20 years of experience in rural education. Her guidance helps shape effective outreach programs that meet real classroom needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advisor 2 -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 text-center p-3">
                            <img src="images/advisor2.jpg" class="img-fluid rounded-circle" alt="Advisor 2" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="fw-bold mb-1" style="color: #212529;">Mr. Nimal Silva</h5>
                                <p class="text-muted" style="color: #24c1dd;">Strategic Advisor</p>
                                <p style="color: #212529;">With a background in nonprofit leadership, Mr. Silva advises on long-term planning, impact analysis, and sustainable development initiatives.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advisor 3 -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 text-center p-3">
                            <img src="images/advisor3.jpg" class="img-fluid rounded-circle" alt="Advisor 3" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="fw-bold mb-1" style="color: #212529;">Prof. Lakmal Jayasuriya</h5>
                                <p class="text-muted" style="color: #24c1dd;">Social Impact Analyst</p>
                                <p style="color: #212529;">Prof. Jayasuriya provides analytical support to measure the social outcomes of our programs and ensures accountability to our goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="text-center mt-4">
            <a href="contact.php" class="btn btn-summer-sky text-white px-4 py-2">Connect with Our Advisors</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
