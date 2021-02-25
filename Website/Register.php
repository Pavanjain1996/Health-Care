<?php
include('Header.php');
?>
<title>Register</title>
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
        <h1>Register</h1>
        </div>
        <div class="row ">
        <div class="col-md-7">
            <form class="form" method="post" action="RegisterUser.php" enctype="multipart/form-data">
				<div class="form-group">
                <label for="fname" class="control-label">First Name</label>
                <input type="text" name="fname" id ="fname" class="form-control" required/>
                </div>
                <div class="form-group">
                <label for="lname" class="control-label">Last Name</label>
                <input type="text" name="lname" id ="lname" class="form-control" required/>
                </div>
                <div class="form-group">
                <label for="username" class="control-label">Username</label>
                <input type="text" name="username" id ="username" class="form-control" required/>
                </div>
                <div class="form-group">
                <label for="pass" class="control-label">Password</label>
                <input type="password" name="password" id ="pass" class="form-control" maxlength="20" required/>
                </div>
                <label >Select Gender</label>
                <div class="radio">
                    <label ><input type="radio" value="Male" name="gender" checked>Male </label>
                    <label ><input type="radio" value="Female" name="gender">Female </label>
                    <label ><input type="radio" value="Other" name="gender">Other </label>
                </div>
                <div class="form-group">
                <label for="age">Enter your age</label>
                    <input type="number" name="age" min="10" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Select Blood Group</label>
                <select class="form-control" name="bloodgrp">
                <option value="A+" selected>A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
                <option value="AB+">AB+</option>
                <option value="Other">Other</option>
                </select>
                </div>
                <div class="form-group">
                <label class="control-label" for="disease">Enter any current or previous disease or allergy record below</label>
                    <textarea name="disease" rows="4" class="form-control"></textarea>
                </div>
				<div class="form-group">
                <label for="profilepic" class="control-label">Profile Picture</label>
                <input type="file" name="pic" accept="image/*" class="form-control" required/>
                </div>
                <input type="submit" class="btn btn-primary" value="Register" />
            
            </form>
            
            </div>
            <div class="col-md-5">
            <h3>All the fields mentioned here are mandatory to fill.</h3>
            
            </div>
        </div>    
        </div>
        
    
    </div><br/>
<?php
include('Footer.php');
?>