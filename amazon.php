<?php
require_once('ses.php');
$ses = new SimpleEmailService('Access Key Here', 'Secret Key Here');
$m = new SimpleEmailServiceMessage();
$m->addTo('recipient@example.com');
$m->setFrom('user@example.com');
$m->setSubject('Hello, world!');
$m->setMessageFromString('This is the message body.');

print_r($ses->sendEmail($m));

?>