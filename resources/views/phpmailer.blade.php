<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'test@hostinger-tutorials.com';
$mail->Password = 'EMAIL_ACCOUNT_PASSWORD';
$mail->setFrom('test@hostinger-tutorials.com', 'Mr. Drago');
$mail->addAddress('example@gmail.com', 'Receiver Name');
if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
$mail->Subject = 'PHPMailer contact form';
$mail->isHTML(false);
$mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
if (!$mail->send()) {
$msg = 'Sorry, something went wrong. Please try again later.';
} else {
$msg = 'Message sent! Thanks for contacting us.';
}
} else {
$msg = 'Share it with us!';
}
?>