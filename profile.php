<?php
include"connection.php";
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
    
                         <!-- start body-->
            <div class="container-fluid cont">
            
              <div class="container">
                <div class="row">
                 <div class="col-sm-8">
                
                <h1>Account Profile</h1>
                <br>
                     <!--------------------------------- profile------------------------------------------>
                     <br>  <br>  <br>  <br>
                     <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="images/male-doctor_26.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo $_SESSION['l_name']; ?></h4>
                        <small><cite title="San Francisco, USA"><i class="glyphicon glyphicon-map-marker">
                            <?php echo $_SESSION['address']; ?>
                        </i></cite></small>
                        <p>
                  <i class="glyphicon glyphicon-envelope"></i>&nbsp;<?php echo  $_SESSION['email']; ?><br />

                           
                            <br />
                          
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                News</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="appoint_info.php?email=<?php echo $_SESSION['email']; ?>">Appointment</a></li>
                                <li><a href="user_update.php">Update Profile</a></li>
                                
                                <li class="divider"></li>
                               <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                     
                     <!--------------------------------------- end profile------------------------------>
               
                 </div><!-- end of left-->
                 <div class="col-sm-4">
                 <br><br>
                  <div class="">
                  <img id="img_profile" src="images/1-15030303542V55.jpg" class="img-responsive"><br>
                   <img id="" src="images/Cartoon-doctor-and-nurse-images-vector-material.jpg" class="img-thumbnail">
                  
                 
                  
                    </div><!--end of panel-->
               
               
                 </div><!--end of right-->
             
                   
                
                </div><!-- end of row-->
              
              
              
              </div><!-- end of container-->
            
            
            
            </div><!-- end of container fluaid-->             
                         
                         
                         
                         
                         <!-- end body-->
                         
                         
             <!-- footer start-->
            <div class="container-fluid" id="footer">
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
             <center>&copy;Our Privacy Policy and Term of Use ©2017-mydoctorappointment</center>
 <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
