<?php
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


$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$country=$_POST['country'];
$education=$_POST['education'];
$work=$_POST['work_experience'];
$path=$_POST['relocation_path'];

$pass="newacc123";
$reg_date = date("j-M-Y");
$status="PENDING";
$last_login="NONE";
$activate_date="PENDING";


$query = "INSERT INTO relc_reg(name,gender,email,mobile,address,country,education,work_experience,relocation_path,reg_date,last_login,pass,status,activate_date) 
VALUES ('$name','$gender','$email','$mobile','$address','$country','$education','$work','$path','$reg_date','$last_login','$pass','$status','$activate_date')";
$result = mysqli_query($conn, $query);
if (!$result){
echo 'Problem encountered. Try again later'.mysqli_error($conn);
exit();
}
if ($result){

$to = $email;

$subject = "Welcome to RelocateNow";
include ('email_page.php');
$body = $email_content;
$from = "RelocateNow <info@relocatenow.ng>";
$headers4="$from";  
$headers.="Reply-to: $headers4\n";
$headers .= "From: $headers4\n"; 
$headers .= "Errors-to: $headers4\n";
$headers .= "Return-Path: $headers4\n"; 
$headers.= "Message-ID: $headers4\n"; 
$headers .= "Received: $headers4\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($email,$subject,$body,$headers);
}

// if ( (isset($_FILES['picture']['name']) &&
// is_uploaded_file($_FILES['picture']['tmp_name'])))
// {
// if (!isset($pid))
// $getID = mysqli_insert_id($conn);
// $getFiles = mysqli_query($conn, "select * from account where id = $getID");
// $parr = mysqli_fetch_array($getFiles);
// $pid = $parr['account'];

// $type = basename($_FILES['picture']['type']);
// switch ($type) {
// case 'jpeg':
// case 'pjpeg': $filename = "pictures/$pid.jpg";
// move_uploaded_file($_FILES['picture']['tmp_name'],
// $filename);
// $sql = "update account set picture = '$filename' where id = $getID";
// $result = mysqli_query($conn, $sql);
// break;
// default: print 'Invalid picture format: '.
// $_FILES['picture']['type'];
// }
// }
header('Location: ../start-done.php');
?>
