<?php
$name =$_Post['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
               "User Email : $visitor_email.\n".
               "Subject : $subject.\n".
               "User Massage : $message.\n";
$to = 'devashishsaxena1997@gmail.com';
$headers = "from $email_form\r\n";
$headers .= "Reply-To: $visitor-email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Locaation: Contact.html");



?>