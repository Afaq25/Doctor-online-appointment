
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
<link rel="stylesheet" href="css/font-awesome.min.css">

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
              <!-- body start-->
       <div class="container" >
          <div class"row">
           
          <!-- navigation start-->
        <div class="col-sm-6" id="my_menu">
          <nav class="nav navbar-default">
             <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my_collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
          
              </div>
              

 
              <!-- nav header-->
          <div class="collapse navbar-collapse" id="my_collapse"> 
           <ul class="nav navbar-nav pull-right" >
           <li ><a  class="pro-btn"id="my_colour" href="#">My profile</a></li>
           <li ><a id="my_colour" href="#" class="pak_hist">History</a></li>
               <li ><a  id="my_colour" href="#" class="pak_hide" >Account</a></li>
                <li ><a  id="my_colour" href="company_logout.php" class="" >LogOut</a></li>
           </ul> 
      
              
              </div><!-- end of collapse-->
              
           </nav><!-- end of nav -->
            
     
<!----------------account update------------------------------------------>
               
            
              <!--end body-->
    
             <div  class="container">  
             <div class="row">
            <div style="display:none;" id="pak_box" class="col-sm-6">
                <br>
                 
         <h1>Update Profile</h1>
              <br>
<form action="company_profile.php" method="post" class="table-responsive" >
                <input type="hidden" name="edit_id" value="<?php echo $_SESSION['id'];?>">
                  <div class="form-group">
                   <label for="usr">Company Name:</label>
<input type="text" class="form-control" id="usr" name="company" value="<?php echo$_SESSION['company']; ?>">
                  </div>
                     
                        <div class="form-group">
                      <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'];?>" required>
                        </div>
                           <div class="form-group">
                                <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" value="<?php echo $_SESSION['password'];?>"  required>
                            </div>
                       <div class="form-group">
                   <label for="usr">Phone Number:</label>
    <input type="text" class="form-control" id="usr" name="phone" value="<?php echo  $_SESSION['phone'];?>"  >
                  </div>     
                            
                   <div class="form-group">
                       <label for="comment">Address:</label>
<textarea class="form-control" rows="5" id="comment" name="address"  
                               >
                       <?php echo $_SESSION['address'];?>
                       </textarea>
                          </div>   
             
<button type="submit" class="btn btn-default" name="UPDATE" >update</button>   
                        </form>
                
                
         
            </div>
            <br>
            <div class="col-sm-6">
             <br><br>
                  <div style="display:none;" id="jaba" class="panel panel-default">
                    <div class="panel-body">
                    
                    <h1>How can MyDoctor help your Prectice?</h1>
                       <img src="images/Fotolia_65704515_M.jpg" class="img-responsive">
                       <h3>New patients</h3>
                       <h4>Access MyDoctor's network of more than 6 million patients looking for doctors every month</h4>
                       <h3>Seamless Experience</h3>
                       <h4>With paperless forms and mobile appointment reminders,
                        scheduling is easier for your staff and patients like.</h4>
                    </div>
            </div>
            
            
            
           
            </div><!--left end -->
           </div>
            </div>


    </div> <!-- navigation end-->
          
    <?php
       if(isset($_POST['UPDATE'])){
            $edit_id= $_SESSION['id'];
           $name=$_POST['company'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $query="UPDATE comapny_info SET company='$name',email='$email',password='$password',phone='$phone',address='$address' WHERE id=$edit_id"; 
            if(mysql_query($query)){
                $_SESSION['company']=$name;
                 $_SESSION['email']=$email;
                 $_SESSION['password']=$password;
                 $_SESSION['phone']=$phone;
                 $_SESSION['address']=$address;
            }else{
                echo "error";
            }

       }
    ?>
          
<!------------------------ END ACCOUNT ----------------------------------->


              
           
           
           
           <!-------------------- history-------------------------->
           <div style="display:none;" id="hist">
                lorem ipsum.
              </div>
           <!----------------------END history-------------------->
           
    <!----------------------- MY Profile --------------------------------->
          <div id="pro" class="container">
             <div class="row">
              
                 
                
            <div class="col-sm-8">
    
<div style="margin-top:-50px;" class="container">
	<div class="row">
		
    	 <div class="">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <div class="jumbotron" >
            <h1><?php echo $_SESSION['company']; ?></h1>
<span style="color:white;"class="fa fa-2x fa-envelope">&nbsp;&nbsp;<?php echo $_SESSION['email']; ?></span>
                        <br><br>
<span  style="color:white;" class="fa fa-2x fa-phone">&nbsp;&nbsp;<?php echo $_SESSION['phone'] ?></span>
                        <br><br>
  <a href="search.php" class="btn btn-default" role="button">Search Your Doctor</a>
                
                        
                        </div>
                </div>             
                
            </div>            
   
    	 </div>                 
		
	</div>
</div>          
                 </div>
              
              
               </div><!-- end row-->
             </div><!--end container-->
           
           
           
           <!------------------ END profile-------------------------------------------->
           
          
           
           
           </div><!-- end of row-->
    
    
    
             </div><!-- end of container-->
    
    
                 <!-- end of body-->
    

                         
                         
             <!-- footer start-->
            <div style=";" class="container-fluid" id="footer">
            <div  class="container">
              <div class="row">
               <div  class="col-sm-6">
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
<script>
$(document).ready(function(){
    $(".pak_hide").click(function(){
        $("#pak_box").fadeIn();
        $("#jaba").fadeIn();
        $("#hist").hide();
        $("#pro").hide();
    });
     $(".pro-btn").click(function(){
        $("#pak_box").hide();
        $("#hist").hide();
        $("#pro").show();
        $("#jaba").hide();
        
    });
    $(".pak_hist").click(function(){
        $("#pak_box").hide();
        $("#hist").show();
        $("#pro").hide();
        $("#jaba").hide();
        
    });
    
});
</script>
</body>
</html>
































