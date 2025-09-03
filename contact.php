<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- CONTACT SECTION -->
<section class="contact-section" style="background: #f1f6fb; position: relative;">
    <div class="container" style="padding-top: calc(100px + 3rem); padding-bottom: 60px;">
        
        <!-- Title -->
        <div class="text-center mb-5">
            <h2 class="section-title" style="font-size: 3rem; font-weight: 600;">Contact Us</h2>
            <p class="text-muted" style="font-size:1.1rem; line-height:1.6;">
                Reach out to us via email or through our contact form. We are happy to answer your queries and assist with any programs at Kadanapitiya Primary School.
            </p>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form method="post" class="bg-white p-5 rounded shadow-sm">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                    </div>
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

<!-- Optional custom CSS -->
<style>
.contact-section {
    min-height: 100vh;
}

.contact-section .section-title {
    color: #24c1dd;
}

.contact-section .form-control {
    border-radius: 6px;
    box-shadow: none;
    border: 1px solid #ccc;
    transition: all 0.3s ease-in-out;
}

.contact-section .form-control:focus {
    border-color: #24c1dd;
    box-shadow: 0 0 5px rgba(36,193,221,0.5);
}

.contact-section .btn-primary {
    background-color: #24c1dd;
    border: none;
    transition: all 0.3s ease-in-out;
}

.contact-section .btn-primary:hover {
    background-color: #1aa0c3;
}
</style>
