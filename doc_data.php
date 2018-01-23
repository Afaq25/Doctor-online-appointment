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
   <h1><b>DOCTOR DATA </b></h1>
   <table border="1px" width="1000px" height="200px;">
   <tr align="center">
    <th>ID</th>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>SPECIALTY</th>
    <th>GENDER</th>
    <th>EDIT</th>
    <th>DELETE</th>
   </tr>
 <?php
    $run=mysql_query("select * from doc_info");
	while ($row=mysql_fetch_array($run)){
		$id=$row[0];
		$f_name=$row[1];
		$l_name=$row[2];
		$email=$row[3];
		$phone=$row[5];
		$specialty=$row[6];
		$gender=$row[8];
		
		 echo"<tr align='center'>
		    <td>$id</td>
			<td>$f_name</td>
			<td>$l_name</td>
			<td>$email</td>
			<td>$phone</td>
			<td>$specialty</td>
			<td>$gender</td>
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