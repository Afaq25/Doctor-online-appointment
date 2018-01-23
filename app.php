<?php
include "connection.php";
session_start();

?>


<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-compatible" content="IE-edge">
<meta name="viewport" content="width=device-width">
<title>My Doctor</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="images/6-512.png">
</head>

<body>
   <!-- start header-->
   <div class="container">
     <div class="row">
       <div class="col-sm-6" class="navbar-brand">
        <img src="images/reallogo.png" class="img-responsive" id="real_logo" >
       </div>
       <br>
      
        
     </div> <!-- row end -->
     
   </div> <!-- end container -->
   
    <!-- end header -->
    
    <div style="margin-top:70px;" class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                         <?php
                     
                 $id= $_GET['id'];
              $query="select * from doc_info where id='$id'";
                $result=mysql_query($query);
           while ($row=mysql_fetch_array($result)){
               $id=$row['id'];
		      $f_name=$row['f_name'];
		      $email=$row['email'];
		      $phone=$row['phone'];
              $address=$row['address'];
               $address_clinic=$row['address_clinic'];
		      $specialty=$row['specialty'];
		      $gender=$row['gender'];
               
           }
                     
                  ?>   
                            
                            
                            
         
                            <h2>Book an Appointment</h2>
                        </div>
                        <form action="" method="post">
                            <!-- Form start -->
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" >
                                        <label class="control-label" for="name">Dr.Name</label>
        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" value="<?php echo $f_name; ?>"  readonly >
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Dr.Email</label>
                    <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" value="<?php echo $email; ?>" readonly>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sel1">Select Timing:</label>
<select class="form-control" id="sel1" name="date_time" >
     <option class="active">SELECT TIMING</option>
    <option ><?php echo date('Y/m/d'); ?> &nbsp;  9:00 to 9:30 AM<?php echo $id; ?></option>
    <option><?php echo date('Y/m/d'); ?> &nbsp;  9:30 to 10:00 AM<?php echo $id; ?></option>
    <option ><?php echo date('Y/m/d'); ?> &nbsp; 10:00 to 10:30 AM<?php echo $id; ?></option>
    <option ><?php echo date('Y/m/d'); ?> &nbsp; 10:30 to 11:00 AM<?php echo $id; ?></option>
    <option ><?php echo date('Y/m/d'); ?> &nbsp; 11:00 to 11:30 AM<?php echo $id; ?></option>
                               
  </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                               <!---patient name---->
                                        <div class="col-md-6">
                                    <div class="form-group" >
                                        <label class="control-label" for="name">Patient email
                                        </label>
                                        <input id="name" name="pat_name" type="text" placeholder="Name" class="form-control input-md"
                                               value="<?php echo $_SESSION['email'] ?>" readonly >
                                    </div>
                                </div>
                            <div class="col-md-6">
                                    <div class="form-group" >
                                        <label class="control-label" for="name">phone No</label>
        <input id="name" name="pat_phone" type="text" placeholder="Name" class="form-control input-md"
                 value="<?php echo $_SESSION['phone'] ?>" readonly >
                                    </div>
                                </div>
                            
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Clinic Address</label>
                                        <select id="appointmentfor" name="clinic" class="form-control" readonly >
                                            <option  ><?php echo $address; ?></option>
                                            
                                            
                                        </select>
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="submit" type="submit" class="btn btn-default">Make An Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
                <div style="background-color:rgba(153, 153, 119, 0.18)" class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Why Appointment with Us</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">24/7 Hours Available</h4>
                                <div class="feature-content">
                                    <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Staff Available</h4>
                                <div class="feature-content">
                                    <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Low Price & Fees</h4>
                                <div class="feature-content">
                                    <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                                </div>
                            </div>
                        </div>             

                    </div>
                                            
                </div>
            </div>
     
     <div class="col-lg-3">
     
     </div>
    </div><!-- end of row-->
    <!-- footer start-->
            <div  style="margin-top:81px; "class="container-fluid" id="footer">
            <div class="container">
              <div class="row">
               <div class="col-sm-6">
               <span class="glyphicon glyphicon-envelope">afaqzai@gmail.com</span>
               <span class="glyphicon glyphicon-earphone">+92326967721</span>
               
               </div>
               <div class="col-sm-6">
               
               </div>
              
              </div>
            </div><!--container end -->
            </div>

             <!-- footer END -->
    </div><!-- end of container-->
    
    
    
    
    
    
    
    

                      
                       
             
 <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    
    $date_time=$_POST['date_time'];
    $name=$_POST['name'];
	$email=$_POST['email'];
    $pat_name=$_POST['pat_name'];
    $pat_phone=$_POST['pat_phone'];
	$clinic=$_POST['clinic'];
	 $sql="INSERT INTO  appointment (date_time,name,email,Patient_name,pat_phone,clinic) VALUES ('$date_time','$name','$email','$pat_name','$pat_phone','$clinic')";
	 if(mysql_query($sql)){
		echo '<script>alert("Appointment is submitted");</script>';
         
         header( "refresh:3;url=payment.php" );
        		 
		}
    else{
         echo '<script>alert("This timing is already taken , Please Try other timing schedule");</script>';       
    }
    
    
    
    
    
}




?>




