<?php
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$bldgrp=$_POST['bloodgrp'];
$disease=$_POST['disease'];
$pic=$_FILES['pic'];
include('DBConnection.php');
$query='select * from diseasetip where disease like "%'.$disease.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
$tip='';
if($n>0){
	$array=mysqli_fetch_array($res);
	$tip=$array['tips'];
}
else
	$tip="Currently no tips available for this disease";
$query='insert into users values ("'.$fname.'","'.$lname.'","'.$username.'","'.$password.'","'.$gender.'","'.$age.'","'.$bldgrp.'","'.$disease.'","'.$pic['name'].'","'.$tip.'")';
mysqli_query($con,$query);
move_uploaded_file($pic['tmp_name'],"Profiles/".$pic['name']);
$_SESSION['username']=$username;
$_SESSION['logstatus']='YES';
mysqli_close($con);
header('location:HospitalData.php');
?>