<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require'../PHPMailer-master/src/PHPMailer.php';
require'../PHPMailer-master/src/SMTP.php';
// require'PHPMailer-master/src/OAuth.php';
// require'PHPMailer-master/src/Exception.php';
// require'PHPMailer-master/src/OAuthTokenProvider.php';
// require'PHPMailer-master/src/POP3.php';
// require'PHPMailer-master/src/DSNConfigurator.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function send_mail($title,$receiver_email,$content){
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = false;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'votronghuy1203@gmail.com';                     //SMTP username
        $mail->Password   = 'vmuw nqrm qsnp edyk';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('IBOOK@gmail.com', 'IBOOK SHOP:'.$title.'');
        $mail->addAddress($receiver_email, 'Khách hàng');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $content;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
       
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
