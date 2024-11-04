<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
include 'connect.php';

function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}

if ($user == 'admin' && $pass == 'pass123') {
  // If the user is the admin, redirect to the admin page
  $_SESSION['admin'] = true;
  print "<script>";
  print " self.location=' dashboard.php';"; 
  print "</script>";
  exit();
}

$check = mysqli_query($conn, "SELECT * FROM relc_reg WHERE email = '$user'")or die(mysqli_error($conn));
$check2 = mysqli_num_rows($check);

if ($check2 == 0) {
  $msg='That '.$user.' does not exist on this platform';
  print "<script>";
  print " self.location='../login_error.php?msg=$msg';"; 
  print "</script>";
  exit();
}

$info = mysqli_fetch_array($check);

if ($pass != $info['pass']) {
  $msg='Your password is incorrect';
  print "<script>";
  print " self.location='../login_error.php?msg=$msg';"; 
  print "</script>";
  exit();
}

$first=$info['name'];
$tel=$info['mobile'];
$last_login=$info['last_login'];
if ($last_login=='NONE'){
  $last_login='FIRST TIME';
}


$login_today=date("D, F j, Y, g:i a");
$ip=$_SERVER['REMOTE_ADDR'];


$_SESSION['username'] = $user;
$_SESSION['last_login'] = $last_login;

//update last login time

mysqli_query($conn, "UPDATE relc_reg SET last_login='$login_today' WHERE email='$user'")or die(mysqli_error($conn));

// Check user role and registration status
if ($info['status'] == 'ACTIVATED') {
      // Redirect to Activated Member Area
      print "<script>";
      print " self.location='../members/active-welcome.php';"; 
      print "</script>";
  } else if ($info['status'] == 'PENDING') {
      // Redirect to regular member page
      print "<script>";
      print " self.location='../members/welcome.php';"; 
      print "</script>";
  }
exit();
?>
