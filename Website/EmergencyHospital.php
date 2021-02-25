<?php
include('Header.php');
include('DBConnection.php');
$query='select * from hospitaldata where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$n=mysqli_num_rows($res);
?>
<title>Hospitals Data</title>
<style>
     body{
            background: url(images/background.png) no-repeat;
            background-size: cover;
            background-position: top;
          }
     .main{
              
              background:   rgba(1, 1, 1, 0.9);
              opacity: .88;
              border-radius: 5%;
              margin: 0 auto;
              margin-top: 20px;
              color: aliceblue;
              padding-bottom: 20px;
              padding-top: 2px; 
              box-sizing: border-box;
              padding: 10px;
         padding-left: 7%;
          }
        #t{
            width: 100%;
        }
        .sec{
            padding-bottom: 5px;
            padding-top: 5px;
        }
        .but{
            margin: 0 30%;
        }
        #smtbtn{
            width: 50%;
            margin-top: 10px;

        }
    
    </style>
        <div class="container">
		<?php 
			if($n>0){
		?>
            <div class="row">
            <div class="main ">
                <div class="page-header">
                    <h1>Hospital Details</h1>
                </div>
                    <p>Below are details of hospitals contact in times of emergency.</p>
                    <form class="form-inline" method="post" action="AddHospital.php">
                        <div class="form-group sec">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">1.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-1" name="H1" value="<?php echo $row['H1']; ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Contact number" value="<?php echo $row['C1']; ?>" name="contact-1" readonly>    
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <textarea name="add-1" placeholder="Adddress" rows="4" class="form-control" id="t" readonly><?php echo $row['A1']; ?> </textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group sec">
                            <div class="row">
                                <div class="col-md-4">
                                                                        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">2.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-2" name="H2" value="<?php echo $row['H2']; ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>                
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Contact number" value="<?php echo $row['C2']; ?>" name="contact-2" readonly>    
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <textarea name="add-2" placeholder="Adddress" rows="4" class="form-control" id="t" readonly><?php echo $row['A2']; ?> </textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group sec">
                            <div class="row">
                                <div class="col-md-4">
                                                                        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">3.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-3" name="H3" aria-label="Username" value="<?php echo $row['H3']; ?>" aria-describedby="basic-addon1" readonly>
</div>               
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Contact number" name="contact-3" value="<?php echo $row['C3']; ?>" readonly>    
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <textarea name="add-3" placeholder="Adddress" rows="4" class="form-control" id="t" readonly><?php echo $row['A3']; ?></textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group sec">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">4.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-4" name="H4" aria-label="Username" value="<?php echo $row['H4']; ?>" aria-describedby="basic-addon1" readonly>
</div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Contact number" name="contact-4" value="<?php echo $row['C4']; ?>" readonly>    
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <textarea name="add-4" placeholder="Adddress" rows="4" class="form-control" id="t" readonly><?php echo $row['A4']; ?></textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group sec">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">5.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-5" name="H5" aria-label="Username" value="<?php echo $row['H5']; ?>" aria-describedby="basic-addon1" readonly>
</div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control"  placeholder="Contact number" name="contact-5" value="<?php echo $row['C5']; ?>" readonly>
                                    </div>
                                        
                                </div>
                                <div class="col-md-4">
                                    <textarea name="add-5" placeholder="Adddress" rows="4" class="form-control" id="t" readonly><?php echo $row['A5']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
            </div>
			<?php 
			} 
			else{
				?>
				<div style="text-align:center;color:black;">
				<br/><br/>
				<span style="font:80px comic sans ms">No Hospitals To Show</span><br/><br/><br/>
				<i class="fa fa-smile-o" style="font-size:200px"></i><br/><br/><br/>
				<form action="HospitalData.php"><button type="submit" class="btn btn-success" style="font-size:30px">Add Hospitals</button></form>
				<br/><br/></div>
			<?php  }
			?>
        </div><br/>
<?php
include('Footer.php');
?>