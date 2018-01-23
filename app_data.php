<?php
include "connection.php";
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
    
   <div align="center">
   <h1><b>Appointment  DATA </b></h1>
   <table border="1px" width="1000px" height="200px;">
   <tr align="center">
    <th>ID</th>
    <th>Date and Time</th>
    <th>Dr.Name</th>
    <th>Email</th>
    <th>Patient Name</th>
    <th>Pat_Phone</th>
    <th>Address</th>
    <th>Update</th>
    <th>Delete</th>
    
   </tr>
       
 <?php
     $run=mysql_query("select * from appointment");
	while ($row=mysql_fetch_array($run)){
		$id=$row[0];
		$date_time=$row[1];
		$name=$row[2];
		$email=$row[3];
		$pat_name=$row[4];
		$pat_phone=$row[5];
		$clinic=$row[6];
		
		 echo"<tr align='center'>
		    <td>$id</td>
			<td>$date_time</td>
			<td>$name</td>
			<td>$email</td>
			<td>$pat_name</td>
			<td>$pat_phone</td>
			<td>$clinic</td>
		    <td>EDIT</td>
			<td>DELETE</td>
		 
		 </tr>";
		}
  
   
   ?>
   </table>

   
   
   
    </div>
                      
                       
             
 <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>