<?php
session_start();
// Redirect to login if not logged in, or dashboard if they are
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
} else {
    header("Location: admin/dashboard.php");
}
exit();
?>

