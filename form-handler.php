<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'energywire@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Phone: $phone.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n";

$to = 'energywire@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>
