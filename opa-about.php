<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php'; // DB connection

// Initialize messages
$successMsg = '';
$errorMsg = '';

// Handle form submission
if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO join_requests (full_name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if($stmt->execute()){
        $successMsg = "✅ Your request has been submitted successfully. Our member will contact you soon. Thank you!";
    } else {
        $errorMsg = "❌ Sorry, there was a problem saving your request. Please try again later.";
    }
    $stmt->close();
}
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- External CSS for this page -->
<link rel="stylesheet" href="css/opa.css">

<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left Content -->
            <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                <h1>Welcome Past Pupils</h1>
                <p class="lead">
                    Join our alumni network and continue the legacy of Kadanapitiya Primary School.  
                    Together, we can support the next generation and keep our school alive.
                </p>

                <a href="#membership-form" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white">
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
            

            <!-- Right Side: Modern Image -->
            <div class="col-lg-6 text-center position-relative">
                <div class="image-frame mx-auto">
                    <img src="images/Opa.jpeg" alt="School" class="hero-img">
                    <div class="image-overlay"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT OPA SECTION -->
<section class="opa-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="opa-card">
                    <h2>Who We Are</h2>
                    <p>
                        The <strong>alumni of Kadanapitiya Primary School</strong> are the driving force behind the school’s revival, with the most active group being those from the <strong>1980–1990 decade</strong>—often remembered as the school’s <strong>Golden Era</strong>. Many of these past pupils, now serving in fields such as <strong>business, education, public service, and community leadership</strong>, have come together to give back to their first school. Their strong bond has inspired and sustained numerous <strong>development projects</strong>, ensuring that the school’s <strong>legacy is preserved</strong> and its <strong>future strengthened</strong>.
                    </p>
                    <p>
                        The group is on a mission to formally organize their efforts through the creation of an <strong>official Old Pupils Association (OPA)</strong>, bringing all past pupils together under a shared goal of <strong>supporting and uplifting the school</strong>.
                    </p>
                    <p class="mb-0">
                        All past pupils are warmly welcomed to <strong>reconnect and contribute</strong> to the continued <strong>growth and strength of the school community</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MEMBERSHIP FORM -->
<section id="membership-form" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-dark">Join Our Team</h2>
            <p class="text-muted">Fill in the form below to become a new member.</p>

            <?php if($successMsg): ?>
                <div class='alert alert-success text-center'><?= $successMsg ?></div>
            <?php endif; ?>
            <?php if($errorMsg): ?>
                <div class='alert alert-danger text-center'><?= $errorMsg ?></div>
            <?php endif; ?>
        </div>

        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Additional Information</label>
                <textarea name="message" id="message" class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" name="submit" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white">
                Submit
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
</section>

<?php include 'includes/footer.php'; ?>

<!-- JS FILES -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>
<link rel="stylesheet" href="css/aboutopa.css">

</body>
</html>
