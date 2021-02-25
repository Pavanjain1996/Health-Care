<?php
include('Header.php');
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
            width: 100%;
            margin-top: 10px;

        }
    
    </style>
        <div class="container">
            <div class="row">
            <div class="main ">
                <div class="page-header">
                    <h1>Hospital Details</h1>
                </div>
                    <p>In the below form you are required to fill in the details of 5 of your nearest hospitals that we could contact in times of emergency.</p>
                    <form class="form" method="post" action="AddHospital.php">
                        <div class="form-group sec">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">1.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-1" name="H1" aria-label="Username" aria-describedby="basic-addon1">
</div>        
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Contact number" name="contact-1" required>    
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <textarea name="add-1" placeholder="Adddress" rows="4" class="form-control" id="t"></textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group sec">
                            <div class="row">
                                <div class="col-sm-4">
                                                                        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">2.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-2" name="H2" aria-label="Username" aria-describedby="basic-addon1">
</div>                
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Contact number" name="contact-2" required>    
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <textarea name="add-2" placeholder="Adddress" rows="4" class="form-control" id="t"></textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group sec">
                            <div class="row">
                                <div class="col-sm-4">
                                                                        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">3.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-3" name="H3" aria-label="Username" aria-describedby="basic-addon1">
</div>               
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Contact number" name="contact-3" required>    
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <textarea name="add-3" placeholder="Adddress" rows="4" class="form-control" id="t"></textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group sec">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">4.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-4" name="H4" aria-label="Username" aria-describedby="basic-addon1">
</div>        
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Contact number" name="contact-4" required>    
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <textarea name="add-4" placeholder="Adddress" rows="4" class="form-control" id="t"></textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group sec">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">5.</span>
  </div>
  <input type="text" class="form-control" placeholder="Hospital-5" name="H5" aria-label="Username" aria-describedby="basic-addon1">
</div>        
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="tel" class="form-control"  placeholder="Contact number" name="contact-5" required>
                                    </div>
                                        
                                </div>
                                <div class="col-sm-4">
                                    <textarea name="add-5" placeholder="Adddress" rows="4" class="form-control" id="t"></textarea>
                                </div>
                            </div>
                        </div>
						<div class="row">
						<div class="col-md-4">
                        <div>
                            <button type="submit" class="btn btn-primary" id="smtbtn">Add these Hospitals</button>
                        </div>
						</div>
						<div class="col-md-4">
                        <div>
                            <a href="Home.php" style="font-size:20px;">Skip for now</a>
                        </div>
						</div>
						</div>
                    </form>
            </div>
            </div>
        </div><br/>
<?php
include('Footer.php');
?>