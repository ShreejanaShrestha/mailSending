     
    <?php
    // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'C:\xampp\composer\vendor\autoload.php';
//include 'C:\xampp\php\PEAR';


  //  $servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "test"


        
    		 
    	
            try{
     
    		$mail = new PHPMailer(true);
     
    		$htmlversion="<p style='color:red;'>Hi , <br><br> This is your promo code HTML :  </p>";
    		$textVersion="Hi ,.\r\n This is your promo code:  text Version";
    		$mail->isSMTP();                                     		 // Set mailer to use SMTP
    		$mail->Host = 'smtp.gmail.com';  								// Specify main and backup SMTP servers
    		$mail->SMTPAuth = true;                                // Enable SMTP authentication
    		$mail->Username = '';         			  // SMTP username
    		$mail->Password = '';                      // SMTP password
    		$mail->Port = 25;                                   // TCP port to connect to
    		$mail->setFrom('sthasushree@gmail.com', 'Test Email');
    		$mail->addAddress('somanamaharjan44@gmail.com','sona');               // Name is optional
    		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    		$mail->isHTML(true);                                  // Set email format to HTML
    		$mail->Subject = 'Test Email Subject';
    		$mail->Body    = $htmlversion;
    		$mail->AltBody = $textVersion;

            // Create connection
            $conn = mysqli_connect('localhost','root','','test');

            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";

            
     
            /*** prepare the select statement ***/
          //  $stmt = "SELECT * FROM sample";

     
            /*** execute the prepared statement ***/
          //  $run = mysqli_query($conn,$stmt);
          //  if (!$run) {
            //     die ('SQL Error: ' . mysqli_error($conn));
            // }

            // while($row = mysqli_fetch_array($run)) { 
                //$id = $row['id'];
               // $name = $row['name'];
                //$email = $row['email'];
                //$batch = $row['batch'];
                //call send email function
                //sendEmail($email, $name, $batch);

                //$mail->ClearAddresses();
    // send it to THIS user...
   // $mail->addCC($row["email"]);

    print ($mail->Send()) ? "Message sent to: " : "Message <b>not</b> sent to: ";
   // print $row["email"]."<br />\n";
            }
     
    	//}
    
    catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        /*--------------------- for sending mail close ------------------*/

}
    
    
    ?>