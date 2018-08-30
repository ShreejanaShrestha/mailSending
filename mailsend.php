<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require 'C:\xampp\composer\vendor\autoload.php';

/* If you installed PHPMailer without Composer do this instead: */
/*
require 'C:\PHPMailer\src\Exception.php';
require 'C:\PHPMailer\src\PHPMailer.php';
require 'C:\PHPMailer\src\SMTP.php';
*/

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

/* Open the try/catch block. */
try {
   /* Set the mail sender. */
   $mail->setFrom('sthasushree@gmail.com', 'Darth Vader');

   /* Add a recipient. */
   $mail->addAddress('sthasushree@gmail.com', 'Sushree');

   /* Set the subject. */
   $mail->Subject = 'Force';

   /* Set the mail message body. */
   $mail->Body = 'There is a great disturbance in the Force.';

   /* SMTP parameters. */
   
   /* Tells PHPMailer to use SMTP. */
   $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = '74.125.68.109';

   /* Use SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* Set the encryption system. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = '';
   
   /* SMTP authentication password. */
   $mail->Password = '';
   
   /* Set the SMTP port. */
   $mail->Port = 25;

   /* Disable some SSL checks. */
   //$mail->SMTPOptions = array(
      //'ssl' => array(
      //'verify_peer' => false,
      //'verify_peer_name' => false,
      //'allow_self_signed' => true
     // )
   //);

   /* Enable SMTP debug output. */
   $mail->SMTPDebug = 4;

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo "Sorry";
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}
