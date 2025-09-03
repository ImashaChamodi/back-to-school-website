<?php
include '../config.php';


// Define your admin username and password here
$username = 'admin';
$password = 'Pass123'; // plain password you want for login

// Hash the password
$hash = password_hash($password, PASSWORD_DEFAULT);

// Insert into DB
$stmt = $conn->prepare("INSERT INTO admins (username, password_hash) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hash);
$stmt->execute();
$stmt->close();

echo "Admin created successfully!";
