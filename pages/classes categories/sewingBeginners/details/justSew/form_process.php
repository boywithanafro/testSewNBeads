<?php

$comments = $_POST['comments'];
$username = $_POST['username'];
$to = "dryda001@gmail.com";
$subject = "New Website Request";

mail ($to, $subject, $username);
echo "Your Message has been sent!";

?>