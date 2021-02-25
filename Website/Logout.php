<?php
session_start();
$_SESSION['logstatus']='NO';
unset($_SESSION['username']);
header('location:Home.php')
?>