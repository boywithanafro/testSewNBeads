<?php

$subject = "SewBeads email, Website";
$text = 'Person Email: ' .$_POST['user_email'] ."\n"
	   .'User Comment: ' ."\n"."\n"
	   .$_POST['comments'];
$to = "sewbeads45@gmail.com";
$headers = 'From: SewBeads';

mail ($to,$subject,$text,$headers);
echo "Your Message has been sent!";

?>