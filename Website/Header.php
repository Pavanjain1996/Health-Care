<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="icon" href="Images/Logo.ico"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color:lightblue;">
<a class="navbar-brand" href="Home.php"><img src="Images/Logo.ico" width="70px" height="70px"><span style="color:green;font-size:25px;">Health</span><span style="color:red;font-size:25px;">Tech</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-navicon" style="color:red;"></span>
</button>
<style>
.nav-link{
	font-size:20px;
}
</style>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="VoiceAssistant.php" style="color:green;"><i class="fa fa-bullhorn" style="color:red;"></i> Voice Assistant</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="Register.php" style="color:green;"><i class="fa fa-user-plus" style="color:red;"></i> Register</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="Login.php" style="color:green;"><i class="fa fa-user-circle" style="color:red;"></i> Login</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="https://www.1mg.com/" style="color:green;" target="blank"><i class="fa fa-hospital-o" style="color:red;"></i> Medical Store</a>
</li>
<?php
if(isset($_SESSION['logstatus'])){
	if($_SESSION['logstatus']=='YES'){ ?>
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user" style="color:red;"></i><span style="color:green;"><?php echo ' '.$_SESSION['username']; ?></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Profile.php" style="color:red;">Profile</a>
          <a class="dropdown-item" href="EmergencyHospital.php" style="color:red;">Emergency Hospitals</a>
		  <?php 
		  include('DBConnection.php');
		  $query='select * from hospitaldata where username="'.$_SESSION['username'].'"';
		  $res=mysqli_query($con,$query);
		  $k=mysqli_num_rows($res);
		  if($k==0){
			  ?>
          <a class="dropdown-item" href="HospitalData.php" style="color:red;">Add Emergency Hospitals</a>
          <?php } ?>
		  <a class="dropdown-item" href="Logout.php" style="color:red;">Logout</a>
        </div>
      </li>
	<?php }
}
?>
</ul>
</div>
</nav>
<br/>