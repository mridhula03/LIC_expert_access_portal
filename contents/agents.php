<?php
//get data from form  

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$edu = $_POST['eduQualification'];
$gender = $_POST['gender'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$to = "ananthilic@gmail.com";
$subject = "Mail From website";
$txt ="Name : ". $fname . " " . $lname .
        "\r\nQualification : ". $edu . 
        "\r\nGender : ". $gender .
        "\r\nEmail = " . $email . 
        "\r\nPhone =" . $phone;
$headers = "lic Mridhula" . "\r\n" . "CC: 51mridhula@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:agents.html");
?>