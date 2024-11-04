<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];


if ($user == 'rn_admin' && $pass == 'tnow@Rnow24') {
    // If the user is the admin, redirect to the admin page
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
    exit();
}
else {
    echo 'Invalid details';
}
?>
