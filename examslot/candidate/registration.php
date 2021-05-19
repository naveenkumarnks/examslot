<?php
session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'user_registeration');

$name = $_POST['name'];
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];


$a = "SELECT * FROM `table` WHERE user='$user'";
$b = mysqli_query($con,$a);
$c = mysqli_num_rows($b);

if($c == 1){
    header('Location: ../administrator/404.php'); 
}
else{
$reg = "INSERT INTO `table`(`name`, `user`, `email`,`password`) VALUES ('$name','$user','$email','$pass')";
mysqli_query($con,$reg);
header('Location: login.php'); 
}
?>
