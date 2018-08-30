      <?php
      include('../header.php');
      if(isset($_REQUEST['send']))
      {
    $to_email         = $_REQUEST['email'];

    require 'PHPMailer/class.smtp.php';
    //require 'PHPMailer/PHPMailerAutoload.php';
    require 'PHPMailer/class.phpmailer.php';
    
    $mail = new PHPMailer;
    // SMTP configuration
    //$mail->isSMTP();
    $mail->Host = 'webpreparations.com';
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 1;  
    $mail->Username = 'test@webpreparations.com';
    $mail->Password = 'test@123+-';
    $mail->SMTPSecure = 'TSL';
    $mail->Port = 21;
    $mail->setFrom('test@webpreparations.com', 'Web Preparations');
    $mail->addReplyTo('test@webpreparations.com', 'Web Preparations');
    // Add a recipient
    $mail->addAddress($to_email);
    $mail->addAddress('test@webpreparations.com');
    // Add cc or bcc 
    $mail->addCC('test@webpreparations.com');
    $mail->addBCC('test@webpreparations.com');
    // Email subject
    $mail->Subject = 'Mail Send By Web Preparations';
    // Set email format to HTML
    $mail->isHTML(true);
    // Email body content
    $mailContent = "<h1>How to send mail using PHPMailer with Attachment</h1>

        <p>“The best preparation for tomorrow is doing your best today.” 

                        No one is born successful, success requires preparation .So prepare yourself online at very ease...</p>";

   $mailContent .= "<a href='http://www.webpreparations.com'><button type='submit' name='send' class='btn btn-info' style='background-color:#449D44; color:#fff; font-weight:bold;height:50px; border:1px;'>Click Her  for Visit Web Preparations</button></a>";

    // for send an attatchment    
    $path       = "upload/";
    $file_name  = "webpreparations-1510425974.pdf";
    $mail->Body = $mailContent;
    $mail->addAttachment($path.$file_name);
    $mail->SMTPOptions = array(
    'ssl' => array(

        'verify_peer' => false,

        'verify_peer_name' => false,

        'allow_self_signed' => true

    )

);
    // Send email
    if(!$mail->send())
    {
        echo '<div class="alert alert-danger">Mail could not be sent.</div>';

        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else
    {

        echo '<div class="alert alert-success">Mail has been sent successfully..</div>';

    }
    /*--------------------- for sending mail close ------------------*/
      }

      ?>

       <title>send mail using mail function in php</title>
      <div class="container">
      <h2>Mail sending form with Attachment using phpmailer of Web Preparations</h2>
      <form action="" method="POST">

      <div class="form-group">

      <label for="email">Email:</label>

      <input type="email" class="form-control" id="email" placeholder="Please enter your email" name="email">
      </div>
      <button type="submit" name="send" class="btn btn-info">Send Mail</button>
      </form>
      </div>
      <!--  for back to tutorial button start  -->
      <br>
      <br>
      <br>
      <br>
      <a href="http://www.webpreparations.com/how-to-send-mail-in-php-with-attachment-using-php-mailer">
      <button class="btn btn-warning" style="margin-left: 110px"><i class="fa fa-mail-reply"></i> Back to Tutorial</button></a>
      <br>
      <br>
      <!--  for back to tutorial button close  -->