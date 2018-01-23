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
    
    
    
    
    
    
    
    
    
            <div style="margin-top:50px; height:410px;" class="container-fluid cont">
            
              <div class="container">
                <div class="row">
                 <div class="col-sm-8">
                
                <h1>Patient Profile</h1>
                <br>
                     <!--------------------------------- profile------------------------------------------>
                     <br><br><br><br>
                     <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="images/avatar-1789663_640.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo $_SESSION['f_name']; ?></h4>
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
                            <li><a href="search.php">Search Doctor</a></li>
                                <li><a href="#">History</a></li>
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
                   <img id="" src="images/doctor-clinic-illustration_1270-69.jpg" class="img-thumbnail">
                  
                  <style>
                  #img_profile{
					  height:400px;
					  width:400px;					  }
                  
                  </style>
                  
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
