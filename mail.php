<?php
require_once('PHPmailer-master/src/Exception.php');
// require_once('PHPmailer-master/src/OAuth.php');
// require_once('PHPmailer-master/src/OAuthTokenProvider.php');
require_once('PHPmailer-master/src/PHPMailer.php');
require_once('PHPmailer-master/src/POP3.php');
require_once('PHPmailer-master/src/SMTP.php');

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host       = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hiep231122@gmail.com';                 // SMTP username
$mail->Password = 'Hiephz2311.';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'hiep231122@gmail.com';
$mail->FromName = 'Hiep';
$mail->addAddress('hiepxuannguyen2001@gmail.com', 'Hiephh');     // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}