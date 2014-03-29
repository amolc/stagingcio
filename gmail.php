<?php

require 'admin/classes/PHPMailer-master/PHPMailerAutoload.php';
 $to='bilal@fountaintechies.com';
$mail = new PHPMailer;
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'raza.malik@fountaintechies.com';                   // SMTP username
$mail->Password = 'welcome2singapore';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('raza.malik@fountaintechies.com', 'raza malik');     //Set who the message is to be sent from
$mail->addReplyTo('raza.malik@fountaintechies.com', 'raza malik');  //Set an alternative reply-to address
// $mail->addAddress('raza.malik@fountaintechies.com', 'raza malik');  // Add a recipient
$mail->addAddress($to);               // Name is optional
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
$mail->WordWrap = 500;                                 // Set word wrap to 50 characters
// $mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
// $mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
 
$mail->Subject = 'hi hh bilal';
$mail->Body    = 'how r u??  by raza $to';
$mail->AltBody = 'hi raza how r u?';
 
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';