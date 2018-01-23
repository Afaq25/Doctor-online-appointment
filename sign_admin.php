
<?php 
include"connection.php";?>


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
        <a href="index.php"><img src="images/reallogo.png" class="img-responsive" id="real_logo" ></a>
       </div>
       <br>
      
        
     </div> <!-- row end -->
     
   </div> <!-- end container -->
   
    <!-- end header -->
              <!-- body start-->
               <div class="container-fluid cont">
              <div class="container">
                <div class="row">
                    <div class="col-lg-4">
    
                    
                 
                    
                    </div>
                   <div class="col-lg-4">
                    <div class="jumbotron" id="pak">

                     <form class="form-signin" method="post" action="login_admin.php">       
      <h2 style="color:white;" class="form-signin-heading"><center>Login admin</center></h2>
      <br>
      <input type="text" class="form-control" name="email" placeholder="Email Address" required autofocus />
      <br>
      <input type="password" class="form-control" name="password" placeholder="Password" required/>  
      <br>    
      <label class="checkbox">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">Remember me
      </label>        
      
      <a style="color:green;" href="submit.php"><h3>create a account</h3></a>
      <br>
      <button class="btn btn-lg  btn-block" name="login" type="submit">Sign IN</button>   
    </form>
                        </div>
                 
                   
                   </div>
                  <div class="col-lg-4">
                    <br><br><br><br><br>
                    
                    </div>
                </div>
              </div>
              </div>
    
                      <!--body end -->    
                      
                      
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