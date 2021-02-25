<?php
session_start();
$username=$_POST['username'];
$pass=$_POST['password'];
include('DBConnection.php');
$query='update users set password="'.$pass.'" where username="'.$username.'"';
mysqli_query($con,$query);
mysqli_close($con);
header('location:Home.php');
?>