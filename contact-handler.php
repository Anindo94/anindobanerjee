<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message  = $_POST['message'];

$email_from = "anindo.kmr@gmail.com";

$email_subject = "New Form Submitted";

$email_body = "Name: $name.\n".
               "Sender: $email.\n".
               "Message: $message.\n"

$to = "kumaranindo92@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body.$headers);

header("location:contact.html");
?>