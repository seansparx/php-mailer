<?php

require_once('class.phpmailer.php');

$bodytext = 'Please find attachment..';

$email = new PHPMailer();
$email->From      = 'noreply@gmail.com';
$email->FromName  = 'System';
$email->Subject   = 'Test Attachment';
$email->Body      = $bodytext;
$email->AddAddress( 'sean@example.com' );

$file_to_attach = './docs/faq.html';

$email->AddAttachment( $file_to_attach , 'attachment.pdf' );

if(! $email->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $email->ErrorInfo;
}
else {
    echo 'Message has been sent';
}
