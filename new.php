<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'C:\xampp\composer\vendor\autoload.php';
//include 'C:\xampp\php\PEAR';



$mail = new PHPMailer(true);
$htmlVersion="<h1>Hello  , <br><br><p>This is the html Version</p> ";
$textVersion="Hello ,./r/n This is the text version";                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sthasushree@gmail.com';                 // SMTP username
    $mail->Password = 'fortune00fame';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    echo 'processing';
    //Recipients
    $mail->setFrom('sthasushree@gmail.com', 'Mailer Shreejana');
    $mail->addAddress('somanamaharjan44@gmail.com', 'Sona Maharjan');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
  /*  $recipients = array(
        'sthasunita987@gmail.com' => 'Person One' ,
        'sthasrizaana99@hotmail.com' => 'Person Two' ,
        'sthasreejana499@outlook.com' => 'Person Three' ,
        'shresthashreejana499@yahoo.com' => 'Person Four'
         );
    foreach ($recipients as $emails => $name) {
        $mail->addCC($emails,$name);
        # code...
    }
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');   
*/
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mail sending bulk(mannual) Testing';
    $mail->Body    = $htmlVersion ;
    $mail->AltBody = $textVersion;


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        /*--------------------- for sending mail close ------------------*/

}

?>