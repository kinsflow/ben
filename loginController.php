<?php  
 require('conn.php');
 session_start();
if (isset($_POST['email']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password =  $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
$info = mysqli_fetch_assoc($result);
$session = $info['id'];
$_SESSION['id'] = $session;
// var_dump($result);
if ($count == 1){
    //    print_r( $info['email'] );
               // Redirect user to index.php
        header("Location: welcome.php");
            }else{
    echo "<div class='form'>
   <h3>Username/password is incorrect.</h3>
   <br/>Click here to <a href='login.php'>Login</a></div>";
    



}
}
?>