<?php
include"connection.php";
session_start();
?>
<?php
if(isset($_POST['login'])){
   // $id=$_POST['id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM comapny_info WHERE email='{$email}' and password='{$password}'";
    $select_user_query=mysql_query($query);
	if(!$select_user_query){
		die("query not work".mysql_error());
    }
   // die("hello query executed");
	$row=mysql_fetch_array($select_user_query);   
    $db_id=$row['id'];
    $db_company=$row['company'];
    $db_email=$row['email'];
    $db_password=$row['password'];
    $db_phone=$row['phone'];
    $db_address=$row['address'];
    

	
	
	if($email !== $db_email && $password !==$db_password  ){
		
		echo '<script type="text/javascript">'; 
echo 'alert("review your answer");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
        
		 }
     else if($email == $db_email && $password ==$db_password){
               //die($_SESSION['address']);
                $_SESSION['id']=$db_id;   
                 $_SESSION['company']=$db_company;
                 $_SESSION['email']=$db_email;
                 $_SESSION['password']=$db_password;
                 $_SESSION['phone']=$db_phone;
                 $_SESSION['address']=$db_address;
              
		
             
		 
		  header("Location:company_profile.php");
		 }
        else{
			
		header("Location:index.php");

			}









}



?>

