<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['feedback'];
$to = "51mridhula@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "lic Mridhula" . "\r\n" . "CC: ananthilic@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:feedback.html");
?>