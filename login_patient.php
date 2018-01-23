a<?php
include"connection.php";
session_start();

?>
<?php
if(isset($_POST['login'])){
	
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM pat_info WHERE email='{$email}' and password='{$password}'";
$select_user_query=mysql_query($query);
	if(!$select_user_query){
		die("query not work".mysql_error());
		
		
		                    }
	while($row=mysql_fetch_array($select_user_query)){
		
		$db_id=$row['id'];
		$db_full_name=$row['f_name'];
		$db_last_name=$row['l_name'];
		$db_email=$row['email'];
		$db_password=$row['password'];
		$db_phone=$row['phone'];
		$db_Diseases=$row['Diseases'];
		$db_address=$row['address'];
		$db_gender=$row['gender'];
        $db_role=$row['role'];
		                                              }
	
	
	if($email !== $db_email && $password !== $db_password  ){
echo '<script>alert("YOUR EMAIL AND PASSWORD NOT CORRECT");</script>';
         
         header( "refresh:2;url=index.php" );
        
		 }
     else
         if($email == $db_email && $password == $db_password){
		 $_SESSION['f_name']=$db_full_name;
		 $_SESSION['email']=$db_email;
         $_SESSION['password']=$db_password;
         $_SESSION['phone']=$db_phone;
		 $_SESSION['Diseases']=$db_Diseases;
         $_SESSION['address']=$db_address;
		 $_SESSION['phone']=$db_phone;
		 $_SESSION['role']=$db_role;
		 
		 
		  header("Location:patient_profile.php");
		 }
        else{
			
			header("Location:index.php");
			}









}



?>