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
                 <br>
                 <h1>Update Form</h1>
                     <br>
                <form action="" method="post">
                  <div class="form-group">
                   <label for="usr">First Name:</label>
<input type="text" class="form-control" id="usr" name="f_name" value="<?php echo  $_SESSION['f_name']; ?>">
                  </div>
                     <div class="form-group">
                     <label for="usr"> Last Name:</label>
                       <input type="text" class="form-control" id="usr" name="l_name" value="<?php echo  $_SESSION['l_name']; ?>">
                     </div>
                        <div class="form-group">
                      <label for="email">Email address:</label>
 <input type="email" class="form-control" id="email" name="email"value="<?php echo  $_SESSION['email']; ?>"
                             required >
                        </div>
                           <div class="form-group">
                                <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" value="<?php echo  $_SESSION['password']; ?>" required>
                            </div>
                       <div class="form-group">
                   <label for="usr">Phone Number:</label>
                       <input type="text" class="form-control" id="usr" name="phone" value="<?php echo  $_SESSION['phone']; ?>">
                  </div>     
                          <div class="form-group">
                              <label for="sel1">specialty:</label>
                               <select class="form-control" id="sel1" name="specialty" required>
                               <option><?php echo  $_SESSION['specialty']; ?></option>
                               <option>Cardiology</option>
                               <option>Dermatology</option>
                               <option>Emergency Medicine</option>
                             </select>
                           </div>   
                   <div class="form-group">
                       <label for="comment">Address:</label>
                     <textarea class="form-control" rows="5" id="comment" name="address"
                               ><?php echo  $_SESSION['address']; ?></textarea>
                          </div>   
            
                 
                    <div class="form-group">
                              <label for="sel1">CITY:</label>
                               <select class="form-control" id="sel1" name="city" required>
                               <option><?php echo  $_SESSION['city']; ?></option>
                               <option>FAISALABAD</option>
                               <option>LAHORE</option>
                               <option>MULTAN</option>
                             </select>
                           </div>
                 <br>
                 <div class="form-group">
                   <label for="usr">UNIVERSITY:</label>
    <input type="text" class="form-control" id="usr" name="university" value="<?php echo  $_SESSION['university']; ?>" >
                  </div>  
                 <br>
                 <div class="form-group">
                   <label for="usr">ZIP CODE:</label>
                       <input type="text" class="form-control" id="usr" name="zip"
                    value="<?php echo  $_SESSION['zip_code']; ?>">
                  </div>  
                 <br>
                  <div class="form-group">
                       <label for="comment">ADDRESS CLINIC:</label>
                     <textarea class="form-control" rows="5" id="comment" name="clinic"
                               
                               value="<?php echo  $_SESSION['address_clinic']; ?>"></textarea>
                          </div>
                   
                  <button type="submit" class="btn btn-default" name="Update" >update</button>   
                        </form>
                 </div><!-- end of left-->
                 <div class="col-sm-4">
                 <br><br>
                  <div class="panel panel-default">
                    <div class="panel-body">
                    
                    <h1>How can MyDoctor help your Prectice?</h1>
                       <img src="images/6-512.png" class="img-responsive">
                       <h3>New patients</h3>
                       <h4>Access MyDoctor's network of more than 6 million patients looking for doctors every month</h4>
                       <h3>Seamless Experience</h3>
                       <h4>With paperless forms and mobile appointment reminders,
                        scheduling is easier for your staff and patients like.</h4>
                    </div>
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
 <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>