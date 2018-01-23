<?php
include"connection.php";

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
                 <h1>Doctor Registration Form</h1>
                <form action="" method="post">
                  <div class="form-group">
                   <label for="usr">First Name:</label>
                       <input type="text" class="form-control" id="usr" name="f_name">
                  </div>
                     <div class="form-group">
                     <label for="usr"> Last Name:</label>
                       <input type="text" class="form-control" id="usr" name="l_name">
                     </div>
                        <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" id="email" name="email" required >
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
                              <label for="sel1">specialty:</label>
                               <select class="form-control" id="sel1" name="specialty" required>
                               <option>select</option>
                               <option>Cardiology</option>
                               <option>Dermatology</option>
                               <option>Emergency Medicine</option>
                             </select>
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
                    <?php
                    $role="select * from user_type where type like 'doctor'";
                   $res= mysql_query($role,$con);
                    $row=mysql_fetch_array($res);
                
                    ?>
              
                    <input type="hidden" name="user_type_id" value="<?php echo $row['id']?>">
             <label class="radio-inline">
                  <input name="gender" id="input-gender-female" value="Female" type="radio" name="gender" />Female
             </label><br><br>
                    <div class="form-group">
                              <label for="sel1">CITY:</label>
                               <select class="form-control" id="sel1" name="city" required>
                               <option>select</option>
                               <option>FAISALABAD</option>
                               <option>LAHORE</option>
                               <option>MULTAN</option>
                             </select>
                           </div>
                 <br>
                 <div class="form-group">
                   <label for="usr">UNIVERSITY:</label>
                       <input type="text" class="form-control" id="usr" name="university">
                  </div>  
                 <br>
                 <div class="form-group">
                   <label for="usr">ZIP CODE:</label>
                       <input type="text" class="form-control" id="usr" name="zip">
                  </div>  
                 <br>
                  <div class="form-group">
                       <label for="comment">ADDRESS CLINIC:</label>
                     <textarea class="form-control" rows="5" id="comment" name="clinic"></textarea>
                          </div>
                   <div class="form-group">
                <label for="sel1">Select Role:</label>
               <select class="form-control" id="sel1" name="role">
                <option>select</option>
               <option>Patient</option>
               <option>Doctor</option>
              
               </select>
                 </div>
                  <button type="submit" class="btn btn-default" name="submit" >Submit</button>   
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
<?php
if(isset($_POST['submit'])){
	
	$f_name=$_POST['f_name'];
	$last_name=$_POST['l_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$specialty=$_POST['specialty'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
    $city=$_POST['city'];
	$university=$_POST['university'];
	$zip_code=$_POST['zip'];
	$address_clinic=$_POST['clinic'];
    $role=$_POST['role'];
	
	 $sql="INSERT INTO doc_info (f_name,l_name,email,password,phone,specialty,address,gender,city,university,zip_code,address_clinic,role) VALUES ('$f_name','$last_name','$email','$password','$phone','$specialty','$address','$gender','$city','$university','$zip_code','$address_clinic','$role')";
	 if(mysql_query($sql)){
		 echo"<script>window.open('sign_doctor.php','_self')</script>";
		 
		 }
	 
}

?>

