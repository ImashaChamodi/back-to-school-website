<?php
session_start();
include __DIR__ . "/../config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id, username, password_hash FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $db_username, $db_password);
        $stmt->fetch();
        if (password_verify($password, $db_password)) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $db_username;
            header("Location: donors.php");
            exit;
        } else $error = "Invalid password!";
    } else $error = "No such user!";
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login - Back2School</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-card {
        max-width: 420px;
        width: 100%;
        background: #212529; /* Dark background */
        color: #f8f9fa;       /* Light text */
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0px 10px 25px rgba(0,0,0,0.3);
    }
    .login-card h3 {
        font-weight: bold;
        color: #ffffff;
    }
    .form-control {
        background-color: #343a40;
        border: 1px solid #495057;
        color: #f8f9fa;
    }
    .form-control:focus {
        background-color: #343a40;
        color: #fff;
        border-color: #dc3545; /* red border on focus */
        box-shadow: none;
    }
    .btn-login {
        background-color: #dc3545; /* red */
        border: none;
    }
    .btn-login:hover {
        background-color: #c82333;
    }
    .alert-danger {
        background-color: #dc3545;
        color: #fff;
        border: none;
    }
</style>
</head>
<body>
<div class="login-card">
    <h3 class="text-center mb-4">Admin Login</h3>
    <?php if(isset($error)) echo "<div class='alert alert-danger text-center'>$error</div>"; ?>
    <form method="POST">
        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-login w-100 text-white">Login</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
