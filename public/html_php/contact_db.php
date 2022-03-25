<?php


//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['Description'];
$to = "aditya15920@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Description =" . $message;
$headers = "From: noreply@gizmo.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:welcome.php");
?>

