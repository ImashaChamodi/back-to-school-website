<?php
include '../admin/auth-check.php';
include "../config.php";
include "admin-nav.php";

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $designation = trim($_POST['designation']);
    $period_from = trim($_POST['period_from']);
    $period_to = trim($_POST['period_to']);

    $stmt = $conn->prepare("INSERT INTO previous_scholars (name, designation, period_from, period_to) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $designation, $period_from, $period_to);

    if ($stmt->execute()) {
        $success = true; // just set a flag instead of redirecting
    } else {
        $error = "Error adding scholar: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Scholar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4">Add Previous Scholar</h2>

    <!-- Display success or error messages -->
    <?php if ($success) echo "<div class='alert alert-success'>✅ Scholar added successfully.</div>"; ?>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <form method="post">
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Designation</label>
            <input type="text" name="designation" class="form-control" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Period From</label>
                <input type="text" name="period_from" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Period To</label>
                <input type="text" name="period_to" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Add Scholar</button>
       
    </form>
</div>
</body>
</html>
