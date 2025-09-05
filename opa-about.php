<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

// Initialize messages
$successMsg = '';
$errorMsg = '';

// Handle form submission
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO join_requests (full_name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        $successMsg = "✅ Your request has been submitted successfully. Our member will contact you soon. Thank you!";
    } else {
        $errorMsg = "❌ Sorry, there was a problem saving your request. Please try again later.";
    }
    $stmt->close();
}
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

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

    <!-- External CSS -->
    <link rel="stylesheet" href="css/aboutopa.css">

    <!-- HERO SECTION -->
    <section class="hero d-flex align-items-center">
        <div class="container-fluid">
            <div class="row g-0">

                <!-- Left Content -->
                <div class="col-lg-6 d-flex flex-column justify-content-center text-center text-lg-start p-5">
                    <h1 class="display-5 fw-bold text-white mb-3">Welcome Past Pupils</h1>
                    <p class="lead text-light mb-4">
                        Join our alumni network and continue the legacy of Kadanapitiya Junior School.
                        Together, we can support the next generation and keep our school alive.
                    </p>
                    <a href="#membership-form"
                        class="btn-setting btn-hvr-setting-main btn-summer-sky text-white">
                        Become a Member
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

                <!-- Right Side Full Image -->
                <div class="col-lg-6 position-relative">
                    <div class="h-100">
                        <img src="images/Opa.jpeg" alt="School" class="img-fluid w-100 h-100 object-fit-cover">
                        <div class="image-overlay"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- DIVIDER -->
    <hr class="section-divider">

    <!-- ABOUT OPA SECTION -->
    <section class="opa-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="opa-card">
                        <h2>Who We Are</h2>
                        <p>
                            The <strong>alumni of Kadanapitiya JuniorS School</strong> are the driving force behind the school’s revival, with the most active group being those from the <strong>1980–1990 decade</strong>, often remembered as the school’s <strong>Golden Era</strong>. Many of these past pupils, now serving in <strong>business, education, public service, and community leadership</strong>, have come together to give back to their first school. Their strong bond has inspired and sustained numerous <strong>development projects</strong>, ensuring that the school’s legacy is preserved and its future strengthened. The group is on a mission to formally organize their efforts through the creation of an <strong>official Old Pupils Association (OPA)</strong>, bringing all past pupils together under a shared goal of supporting and uplifting the school. All past pupils are warmly welcomed to reconnect and contribute to the continued growth and strength of the school community.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- DIVIDER -->
    <hr class="section-divider">

    <!-- MEMBERSHIP FORM -->
    <section id="membership-form" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Join Our Team</h2>
                <p class="text-muted">Fill in the form below to become a new member.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="" method="post" class="p-4 bg-white shadow rounded-4">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control form-control-lg" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold">Phone Number</label>
                            <input type="text" name="phone" id="phone" class="form-control form-control-lg">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold">Additional Information</label>
                            <textarea name="message" id="message" class="form-control form-control-lg" rows="4"></textarea>
                        </div>

                        <button type="submit" name="submit"
                            class="btn-setting btn-hvr-setting-main btn-summer-sky text-white w-100">
                            Submit Request
                            <span class="btn-hvr-setting btn-hvr-black">
                                <span class="btn-hvr-setting-inner">
                                    <span class="btn-hvr-effect"></span>
                                    <span class="btn-hvr-effect"></span>
                                    <span class="btn-hvr-effect"></span>
                                    <span class="btn-hvr-effect"></span>
                                </span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- JS FILES -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/functions.js"></script>

</body>

</html>