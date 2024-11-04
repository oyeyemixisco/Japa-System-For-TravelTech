<?php
include 'connect.php';

// Fetch phone numbers from the student table
$mobileResult = mysqli_query($conn, "SELECT mobile FROM relc_reg");

// Generate text file
$filename = "phone_numbers.txt";
$file = fopen($filename, "w");


if ($mobileResult && mysqli_num_rows($mobileResult) > 0) {
    while ($row = mysqli_fetch_assoc($mobileResult)) {
        fwrite($file, $row['mobile'] . "\n");
    }
    fclose($file);

    // Set headers to force download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    readfile($filename);
    exit();
}
?>