<?php

session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'user_registeration');
$adminname = $_POST['adminname'];
$password = $_POST['password'];

$s = "SELECT * FROM `admin` WHERE adminname='$adminname' && password = '$password'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['adminname']= $adminname;
    header('location:adindex.php');
   } 
else{
    header('location:404.php');
    
}


?>