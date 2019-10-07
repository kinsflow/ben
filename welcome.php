<style>
    .out{
        color: tomato;
    }
</style>
<?php
require ('conn.php');

session_start();

$session = $_SESSION['id'] ;
// echo $session;
$query = "SELECT * FROM users WHERE id = '$session'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));


$row = mysqli_fetch_assoc($result);
 echo '<h1 class = \'out\'>welcome '.$row['first_name']. ' - '.$row['last_name']. ' you\'re successfully logged in</h1>';
?>