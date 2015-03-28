<?php

$subject = "SewBeads email, Website";
$text = 'Persons Email: ' .$_POST['user_email'] ."\n"
	   ."Person's Name: " .$_POST['user_name'] ."\n"
	   .'User Comment: ' ."\n"."\n"
	   .$_POST['user_comments'];
$to = "sewbeads45@gmail.com";
$headers = 'From: SewBeads Website';

mail ($to,$subject,$text,$headers);
echo "Your Message has been sent, Sew'n'Beads will reply to your email within 3 hours. Thank you for your inquirery!";

?>