     
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
    require 'C:\xampp\composer\vendor\autoload.php';

     
    		// Create connection
            $conn = mysqli_connect('localhost','root','','test');

            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";

            
     
            /*** prepare the select statement ***/
             $stmt = "SELECT * FROM sample";
     
            /*** execute the prepared statement ***/
            $run = mysqli_query($conn,$stmt);
            if (!$run) {
                die ('SQL Error: ' . mysqli_error($conn));
            }
     
            while($row = mysqli_fetch_array($run)) {
                //$id = $row['id'];
                $name = $row['name'];
                echo $row['name'];
                $email = $row['email'];
                echo $row['email'];
                $batch = $row['batch'];
                //call send email function
                sendEmail($email, $name, $batch);
            }
            /*while($row = $stmt->fetch()) {
                //$id = $row['id'];
    			$name = $row['name'];
    			$email = $row['email'];
    			$batch = $row['batch'];
    			//call send email function
    			sendEmail($email, $name, $batch);
            }*/
    		 
    	function sendEmail($email, $name, $batch){
     
    		$mail = new PHPMailer;
     
    		$htmlversion="<p style='color:red;'>Hi ".$name.", <br><br> This is your promo code HTML : ".$batch.". </p>";
    		$textVersion="Hi ".$name.",.\r\n This is your promo code:  ".$batch."text Version";
    		$mail->isSMTP();                                     		 // Set mailer to use SMTP
    		$mail->Host = 'smtp.gmail.com';  								// Specify main and backup SMTP servers
    		$mail->SMTPAuth = true;                                // Enable SMTP authentication
    		$mail->Username = '';         			  // SMTP username
    		$mail->Password = '';                      // SMTP password
    		$mail->Port = 25;   
            $mail->SMTPDebug = 4;
            $mail->SMTPSecure = 'TLS';
                                  // TCP port to connect to
    		$mail->setFrom('sthasushree@gmail.com', 'Test Email');
    		$mail->addAddress('somanamaharjan43@gmail.com', 'sona'); 
            $mail->addCC($email);              // Name is optional
    		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    		$mail->isHTML(true);                                  // Set email format to HTML
    		$mail->Subject = 'Test Email Subject';
    		$mail->Body    = $htmlversion;
    		$mail->AltBody = $textVersion;
     
    	if(!$mail->send()) {
    			echo 'Message could not be sent.';
    			echo 'Mailer Error: ' . $mail->ErrorInfo;
    	} else {
    		echo 'Message has been sent to User name : '.$name.' Email:  '.$email.'<br><br>';
    	}
    }
    ?>