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
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO join_requests (full_name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if($stmt->execute()){
        $successMsg = "Your request has been submitted successfully. Our team will get in touch with you soon. Thank you for your interest.";

        // Optional: Send email notification
        $to = "imashadissanayake801@gmail.com";
        $subject = "New Membership Request from $name";
        $body = "New member details:\n\nName: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n";
        $headers = "From: $email\r\nReply-To: $email\r\n";

        @mail($to, $subject, $body, $headers);

    } else {
        $errorMsg = "Sorry, there was a problem saving your request. Please try again later.";
    }
    $stmt->close();
}
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- Top gradient bar -->
<div class="top-bar" style="height: 1in; background: linear-gradient(to right, #24c1dd, #4fc3f7);"></div>

<!-- NEW MEMBERSHIP FORM SECTION -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark">Join Our Team</h2>
      <p class="text-muted">Fill in the form below to become a new member.</p>

      <?php if($successMsg): ?>
          <div class='alert alert-success text-center'><?= $successMsg ?></div>
      <?php endif; ?>
      <?php if($errorMsg): ?>
          <div class='alert alert-danger text-center'><?= $errorMsg ?></div>
      <?php endif; ?>
    </div>

    <form action="new-membership.php" method="post">
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

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>

<!-- Bottom gradient bar -->
<div class="bottom-bar" style="height: 1in; background: linear-gradient(to right, #24c1dd, #4fc3f7);"></div>

<?php include 'includes/footer.php'; ?>

<!-- JS FILES -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
