<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['message'];
    
    $to='afaqzai@gmail.com';
    $subject='Form submission';
    $massage="Name:".$name."\n"."phone:".$phone."\n"."wrote the following:"."\n\n".$msg;
    $from="From:".$email;
    if(mail($to,$subject,$massage,$from))
    {
        echo"<h1>SEND THE MAIL"." ".$name.",we will contact you shortly!</h1>";
    }
    else
    {
        echo"mail cannot SEND";
        
    }
}


?>