<?php
//get data from form  
$name = $_POST['Name'];
$email= $_POST['Email'];
$continent= $_POST['Continent'];
$country= $_POST['Country'];
$comment= $_POST['Comment'];
$to = "hashannotes@mail.com";
$subject = "Mail From Official page";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Continent =" . $continent . "\r\n Country =" . $country . "\r\n Comment =" . $comment;
$headers = "From: noreply@hashanwijemanna.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>