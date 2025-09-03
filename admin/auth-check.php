<?php
// auth_check.php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // not logged in → redirect to login page
    header("Location: login.php");
    exit;
}
?>
