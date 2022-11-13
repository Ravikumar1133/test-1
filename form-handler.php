<?php
$name = $_post['name'];
$visiors_email = $_post['email']
$message = $_post['messege']

$email_from ='https://boisterous-seahorse-bf6918.netlify.app';
$email_subject ='new form';
$email_body = "user name:$name.n/".
              "user email:$email.n/".
              "user messege:$messege.n/";
$to = 'ravi333kumar333@gmail.com';
$headers = "from:$email_from \r\n";

$headers = "reply_to:$visitors_email \r\n";

mail($to,$email_body,$headers);

header("location:https://boisterous-seahorse-bf6918.netlify.app");

?>
