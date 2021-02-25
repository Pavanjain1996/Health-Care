<?php
include('Header.php');
include('DBConnection.php');
$query='select * from users where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
<title>Profile - <?php echo $_SESSION['username']; ?></title>
<style>
        body{
            background: url(images/background.png)  center;background-size: cover;
            
            background-repeat: no-repeat;
          }
          .main{
              
              background:   rgba(1, 1, 1, 0.9);
              opacity: .88;
              border-radius: 20px;
              margin: 0 auto;
              margin-top: 20px;
              color: aliceblue;
              padding: 20px;
          }
    </style>
    </head>
<body>
    <div class="container">
        <div class="main col-sm-6">
            <div class="page-header">
        <h1>Profile</h1>
        </div>
        <div class="row ">
        <div class="col-md-7">
            <form class="form">
			<div class="form-group">
                <img src="Profiles/<?php echo $row['Profile']; ?>" width="250px" height="200px" alt="Profile Photo"/>
				</div>
            <div class="form-group">
                <label for="fname" class="control-label">First Name</label>
                <input type="text" id ="fname" value="<?php echo $row['fname']; ?>" class="form-control" readonly />
                </div>
				<div class="form-group">
                <label for="fname" class="control-label">Last Name</label>
                <input type="text" id ="fname" value="<?php echo $row['lname']; ?>" class="form-control" readonly />
                </div>
				<div class="form-group">
                <label for="fname" class="control-label">Username</label>
                <input type="text" id ="fname" value="<?php echo $row['username']; ?>" class="form-control" readonly />
                </div>
				<div class="form-group">
                <label for="fname" class="control-label">Gender</label>
                <input type="text" id ="fname" value="<?php echo $row['gender']; ?>" class="form-control" readonly />
                </div>
				<div class="form-group">
                <label for="fname" class="control-label">Blood Group</label>
                <input type="text" id ="fname" value="<?php echo $row['bldgrp']; ?>" class="form-control" readonly />
                </div>
				<div class="form-group">
                <label for="fname" class="control-label">Age</label>
                <input type="text" id ="fname" value="<?php echo $row['age']; ?>" class="form-control" readonly />
                </div>
                <div class="form-group">
                <label class="control-label" for="disease">Current or previous disease or allergy record</label>
                    <textarea rows="4" class="form-control" readonly ><?php echo $row['disease']; ?></textarea>
                </div>
				<div class="form-group">
                <label class="control-label" for="disease">Tips or precautions for your disease</label>
                    <textarea rows="4" class="form-control" readonly ><?php echo $row['dis_tip']; ?></textarea>
                </div>
            </form>
            </div>
        </div>    
        </div>
    </div><br/>
<?php
include('Footer.php');
?>