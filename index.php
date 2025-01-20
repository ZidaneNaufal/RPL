<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    // Jika belum login, arahkan ke login.php
    header("Location: login.php");
    exit();
}

// Jika sudah login, arahkan ke dashboard.php
header("Location: dashboard.php");
exit();
?>
