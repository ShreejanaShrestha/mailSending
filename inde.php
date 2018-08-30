  <?php
      //include('../header.php');
  use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
                require 'C:\xampp\composer\vendor\autoload.php';

      if(isset($_REQUEST['send']))
      {
            $to_email         = $_REQUEST['email'];
          /*--------------------- for sending mail start ------------------*/
 

          
          $mail = new PHPMailer;
          // SMTP configuration
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->SMTPDebug = 4;  
          $mail->Username = 'test786webpreparations@gmail.com';
          $mail->Password = 'Testwebpreparations123';
          $mail->SMTPSecure = 'TLS';
          $mail->Port = 25;
 
          $mail->setFrom('webpreparations@gmail.com', 'Web Preparations');
          //$mail->addReplyTo('webpreparations786test@gmail.com', 'Web Preparations');
          // Add a recipient
          $mail->addAddress($to_email);
          $mail->addAddress('webpreparations@gmail.com');
          // Add cc or bcc 
          $mail->addCC('webpreparations786test@gmail.com');
          $mail->addBCC('webpreparations786test@gmail.com');
          // Email subject
          $mail->Subject = 'Mail Send By Web Preparations';
          // Set email format to HTML
          $mail->isHTML(true);
          // Email body content
          $mailContent = "<h1>How to send mail using PHPMailer with Attachment</h1>
              <p>“The best preparation for tomorrow is doing your best today.” 
                              No one is born successful, success requires preparation .So prepare yourself online at very ease...</p>";
        // $mailContent .= "<a href='http://www.webpreparations.com'><button type='submit' name='send' class='btn btn-info' style='background-color:#449D44; color:#fff; font-weight:bold;height:50px; border:1px;'>Click Her  for Visit Web Preparations</button></a>";
           //for send an attatchment    
          //$path       = "upload/";
          //$file_name  = "webpreparations-1510425974.pdf";
          $mail->Body = $mailContent;
          //$mail->addAttachment($path.$file_name);
 
        /*  $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
      ); */
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
      <html>
      <head>
      <title>send mail using mail function in php</title>
      </head>
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
      </body>
     </html>      