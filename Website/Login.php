<?php
include('Header.php');
?>
<title>Login</title>
    <style>
        body{
            background: url(images/background.png)  center;background-size: cover;
            
            
        }
        
        .main-container{
            
            width: 40%;
            
            margin: 0 auto;
            margin-top: 5%;
            opacity: .9;
            background: rgba(59, 113, 177, 0.9);
            border-radius: 20px
            
        }
        .logo{
            
            text-align: center;
            margin: 0 auto;
           
        }
        h1{
            text-align: center; color: #fff;font-size: 50px;
        }
        
        
::-webkit-input-placeholder{
    color: red;
    opacity: 1;
}
:-ms-input-placeholder{
    color: red;
}
.footer{
    color: white;
    font-size: 15px;
    position: relative;
    
    
    
}
.footer a{
    text-decoration: none;
    color: aqua;
    overflow: scroll;
}
        @media screen and (max-width: 700px){
            body{
               background-repeat: repeat-y;
            }
            .container{
               
               margin-top: 50%;
            }
            .main-container{
                 margin: 0 auto;
                
                display: table-cell;
                vertical-align: middle;
            }
            h1{
                text-align: center; color: #fff;font-size: 40px;
            }
            .logo {
	           opacity: 1;
}
            
        }
        
        

    </style>
        
   <div class="container ">
       
       <div class="container main-container">
       <div class="logo"><img src="images/Login.png" style="width: 100px; text-align: cente; transform: translateY(10%); border-radius: 10px;"> 
            
        </div>
           <h1 style="">Login Here</h1>
       
       <form class="form" method="post" action="VerifyUser.php">
           <div class="form-group">
           <input type="text" placeholder="Username" class="form-control" name="username">
           </div>
            <div class="form-group">
           <input type="password" placeholder="Password" class="form-control" name="password">
           </div>
           <button type="submit" class="btn btn-primary form-control">Login</button>
       
       
       </form>
        <div class="footer">
               Forgot password <a href="ForgotPassword.php">click here</a><br />
           Don't have an account yet? <a href="Register.php" >Register</a><br/>
		   Valid Login Credentials will redirect you to Home page else you will stay here.
           </div>
           <br />

       </div>
        </div>
		<br/><br/><br/>
<?php
include('Footer.php');
?>