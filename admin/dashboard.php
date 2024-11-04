<?php
session_start();

// Check if the admin session variable is not set
if (!isset($_SESSION['admin'])) {
    // Redirect the user to the login page
    header("Location: login.php");
    exit();
}

// Debugging: Check if the session variable is set
if ($_SESSION['admin']) {
    echo "Admin session variable is set.";
} else {
    echo "Admin session variable is not set.";
}
    echo "Welcome";

?>