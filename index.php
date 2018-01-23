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
       <!-- navigation start-->
        <div class="col-sm-6" id="my_menu">
          <nav class="nav navbar-default">
             <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my_collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
          
              </div><!-- nav header-->
          <div class="collapse navbar-collapse" id="my_collapse"> 
           <ul class="nav navbar-nav pull-right" >
           <li ><a id="my_colour" href="https://afaqkhan.000webhostapp.com/">Contact Us</a></li>
           <li ><a id="my_colour" href="submit.php">Join Us </a></li>
           <li ><a id="my_colour" href="sign_in.php">Sign In</a></li>
          
           </ul>
           </div><!-- end of collapse-->
           </nav><!-- end of nav -->
        </div>
        <!-- navigation end-->
        
     </div> <!-- row end -->
     
   </div> <!-- end container -->
   
    <!-- end header -->
    
                         <!-- start body-->
            <div class="container-fluid cont">
            
              <div class="container">
                <div class="row">
                   <div class="col-sm-3"><br>
                   <img src="images/clo.gif" id="pic_cut">
                    <img src="images/wm_medical_icons_in_flat_style.jpg" id="pic_cut" >
                   </div> <!-- end of left bar-->
                   <div class="col-sm-6"> 
                     <div class="jumbotron">
                      
     
              <h3>Find a doctor you Like.
              Get the care you need.</h3>
             
              <form method="post" action="" required>
               <h4>Get Started</h4> <select required>
              <option value="select" required>SELECT</option>
              <option value="Cardiology">Cardiology</option>
               <option value="Dermatology">Dermatology</option>
               <option value="Emergency Medicine">Emergency Medicine</option>
               </select>
               <br><br>
              <h4> ENTER ZIP CODE</h4><input type="text"  placeholder="zip code" required>
               <br> <br>
               <h4>CITY</h4><select>
              <option value="select" required >SELECT</option>
              <option value="fsd">FAISALABAD</option>
               <option value="lah">LAHORE</option>
               <option value="mul">MULTAN</option>
               </select>
               <br><br>
              <button type="submit" class="btn btn-default" name="submit" >SEARCH</button>
              
              
              </form>
                
                     </div>
                   </div> <!--end of center -->
                    <br>
                   <div class="col-sm-3">
                   <img src="images/medical-doctor-male-icon-png-26.png" class="img-responsive" id="right_pic">
                   <br><br>
                   <br><img src="images/179602-business-set.png" class="img-responsive" id="right_pic" >
                   </div> <!-- end of right -->
                
                
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
               <div style="float:right;" class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
               </div>
              
              </div>
            </div><!--container end -->
            </div>

             <!-- footer END -->
             <center>Develop By AFAQ Yusaf Zai ©2017-mydoctorappointment</center>
 <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    echo"<script>window.open('sign_in.php','_self')</script>";
}


?>


