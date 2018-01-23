<?php
include"connection.php";
session_start();
?>
<?php
if(isset($_POST['login'])){
	
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM admin WHERE email='{$email}' and password='{$password}'";
$select_user_query=mysql_query($query);
	if(!$select_user_query){
		die("query not work".mysql_error());
		
		
		                    }
	while($row=mysql_fetch_array($select_user_query)){
		
		$db_id=$row['id'];
	   $db_email=$row['email'];
		$db_password=$row['password'];
		                }
	
	
	if($email !== $db_email && $password !==$db_password  ){
		
			header("Location:index.php");
		 }
     else
         if($email == $db_email && $password ==$db_password){

		 $_SESSION['email']=$db_email;
		 $_SESSION['password']=$db_password;
	
		 
		  header("Location:admin_panel/index.php");
		 }
        else{
			
			header("Location:index.php");
			}









}



?>