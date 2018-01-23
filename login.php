<?php
include"connection.php";
session_start();
?>
<?php
if(isset($_POST['login'])){
	
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM doc_info WHERE email='{$email}' and password='{$password}'";
$select_user_query=mysql_query($query);
	if(!$select_user_query){
		die("query not work".mysql_error());
		
		
		                    }
	while($row=mysql_fetch_array($select_user_query)){
		
		$db_id=$row['id'];
		$db_f_name=$row['f_name'];
		$db_last_name=$row['l_name'];
		$db_email=$row['email'];
		$db_password=$row['password'];
		$db_phone=$row['phone'];
		$db_specialty=$row['specialty'];
		$db_address=$row['address'];
		$db_gender=$row['gender'];
		$db_city=$row['city'];
        $db_university=$row['university'];
        $db_zip_code=$row['zip_code'];
        $db_address_clinic=$row['address_clinic	'];
        $db_role=$row['role'];
		                                              }
	
	
	if($email !== $db_email && $password !==$db_password  ){
		
		echo '<script>alert("YOUR EMAIL AND PASSWORD NOT CORRECT");</script>';
         
         header( "refresh:1;url=index.php" );
		 }
     else
         if($email == $db_email && $password ==$db_password){
		 $_SESSION['f_name']=$db_f_name;
		 $_SESSION['l_name']=$db_last_name;
         $_SESSION['email']=$db_email;
		 $_SESSION['password']=$db_password;
		 $_SESSION['phone']=$db_phone;
		 $_SESSION['specialty']=$db_specialty;
         $_SESSION['address']=$db_address;
         $_SESSION['gender']=$db_phone;
         $_SESSION['city']=$db_city;
         $_SESSION['university']=$db_university;
         $_SESSION['zip_code']=$db_zip_code;
         $_SESSION['address_clinic']=$db_address_clinic;
         $_SESSION['role']=$db_role;
		
		 
		 
		  header("Location:profile.php");
		 }
        else{
			
			header("Location:index.php");
			}









}



?>