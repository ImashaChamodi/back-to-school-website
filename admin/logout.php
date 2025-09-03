<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logged Out</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">Admin Panel</a>
  </div>
</nav>

<div class="container text-center py-5">
  <div class="card shadow-sm p-4 mx-auto" style="max-width: 400px;">
    <h3 class="text-danger mb-3">You have logged out</h3>
    <p class="mb-4">Thank you for using the Admin Panel. Please log in again to continue.</p>
    <a href="login.php" class="btn btn-primary w-100">Go to Login</a>
  </div>
</div>

</body>
</html>
