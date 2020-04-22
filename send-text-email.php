<?php
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'PHPMailer/vendor/autoload.php';

$mail=new PHPMailer();
 $mail->isSMTP();   
 $mail->Host='smtp.gmail.com';
 $mail->SMTPAuth='true';
 $mail->Username='maham.shafiq98@gmail.com';
 $mail->Password='Bahrian1998';
 $mail->SMTPSecure='tls';
 $mail->Port=25;
$mail->SetFrom('maham.shafiq98@gmail.com','Developer');
$mail->addAddress('fatizafar153@gmail.com');
$mail->addReplyTo('maham.shafiq98@gmail.com','Info');
 $mail->Subject='mail';
 $mail->Body='Sample';
 if($mail->send())
 { 
 echo 'Your mail has been sent successfully.';
 }else {
 echo "failed";}
 

?>