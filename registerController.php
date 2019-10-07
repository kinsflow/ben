<?php
ob_start();
include 'conn.php';

$first_name = $_POST['first_name'];
// die($first_name);
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$newURL  = 'login.php';
$sql = "INSERT INTO users (`first_name`, `last_name`, `email`, `password` )
VALUES ('$first_name', '$last_name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    header('Location: '.$newURL);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>