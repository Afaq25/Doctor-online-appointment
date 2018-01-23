
<?php
session_start();
?>
<?php
 $_SESSION['company']=null;
		 $_SESSION['email']=null;
		 $_SESSION['password']=null;
		 $_SESSION['phone']=null;
		 $_SESSION['address']=null;
         $_SESSION['gender']=null; 
header("Location:index.php")

?>