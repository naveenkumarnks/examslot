<?php

session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'user_registeration');
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "SELECT * FROM `table` WHERE email='$email' && password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['email']= $email;
    header('location:home.php');
   } 
else{
    header('location:../administrator/404.php');
    
}


?>