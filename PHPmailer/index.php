<?php
require 'Send_Mail.php';
$to = "raza.malik@fountaintechies.com";
$subject = "Test Mail Subject";
$body = "Hi<br/>Test Mail<br/>Amazon SES"; // HTML  tags
Send_Mail($to,$subject,$body);
?>