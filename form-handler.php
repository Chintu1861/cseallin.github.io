<?php
$name = $_POST['name'];
$visitor_male = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['messgae'];

$email_form = 'csegyan.in';

$email_subject = 'new form submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message .\n";

$to = 'kumarabhii321@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>