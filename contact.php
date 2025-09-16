<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
include 'config.php';

$successMsg = '';
$errorMsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $successMsg = "✅ Your message has been sent successfully!";
    } else {
        $errorMsg = "❌ Error sending message. Please try again later.";
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

<!-- Loader ends -->

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">


    <div style="height: 1in; background: linear-gradient(to bottom, #000000, #808080);"></div>


    <section class="contact-section" style="background: #f1f6fb; position: relative; padding-top: 2rem; padding-bottom: 60px;">
        <div class="container">

            <!-- Alerts -->
            <?php if ($successMsg): ?>
                <div class="alert alert-success shadow-sm"><?= $successMsg ?></div>
            <?php endif; ?>
            <?php if ($errorMsg): ?>
                <div class="alert alert-danger shadow-sm"><?= $errorMsg ?></div>
            <?php endif; ?>

            <!-- Title -->
            <div class="text-center mb-4">
                <h2 class="section-title" style="font-size: 3rem; font-weight: 600;">Contact Us</h2>
                <p class="text-muted" style="font-size:1.1rem; line-height:1.6;">
                    Reach out to us via email or through our contact form.
                </p>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form method="post" class="bg-white p-5 rounded shadow-sm">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control form-input" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control form-input" name="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control form-input" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn-setting btn-hvr-setting-main btn-summer-sky text-white">
                                Send Message
                                <span class="btn-hvr-setting btn-hvr-black">
                                    <span class="btn-hvr-setting-inner">
                                        <span class="btn-hvr-effect"></span>
                                        <span class="btn-hvr-effect"></span>
                                        <span class="btn-hvr-effect"></span>
                                        <span class="btn-hvr-effect"></span>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
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