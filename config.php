<?php
$host = "localhost";
$dbname = "backtoschool";
$username = "root"; // default for XAMPP
$password = "";     // default for XAMPP

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
