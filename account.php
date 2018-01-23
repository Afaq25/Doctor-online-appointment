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
       </div><!-- end brand name right -->
        <div class="col-sm-6"></div><!-- end of left-->
        
        <!-- start body-->
         <div class="container">
         <div class="row">
             <div class="col-sm-6">
             
             
             
             </div>
             <div class="col-sm-6"></div>
             
             
             </div><!-- end of body row-->
         
         </div><!-- end of body container-->
         
         <!--end body-->
         <h1>Update Profile</h1>
         <br>
                <form action="" method="post">
                  <div class="form-group">
                   <label for="usr">Company Name:</label>
                       <input type="text" class="form-control" id="usr" name="company">
                  </div>
                     
                        <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                           <div class="form-group">
                                <label for="pwd">Password:</label>
                               <input type="password" class="form-control" id="pwd" name="password" required>
                            </div>
                       <div class="form-group">
                   <label for="usr">Phone Number:</label>
                       <input type="text" class="form-control" id="usr" name="phone">
                  </div>     
                            
                   <div class="form-group">
                       <label for="comment">Address:</label>
                     <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
                          </div>   
             <label class="row">Gender</label>
             <br>
            <label class="radio-inline">
                 <input name="gender" id="input-gender-male" value="Male" type="radio"  name="gender"/>Male
             </label>
        
             <label class="radio-inline">
                 
                  <input name="gender" id="input-gender-female" value="Female" type="radio" name="gender" />Female
             </label><br><br>
                      
                  <button type="submit" class="btn btn-default" name="submit" >update</button>   
                        </form>
         
              </div>
            </div><!--container end -->


        
 <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>



