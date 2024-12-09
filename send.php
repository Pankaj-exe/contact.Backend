<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['Submit'])){
  $full_name = $_POST['name'];
  $Mail = $_POST['email'];
  $No = $_POST['phone'];
  $mess = $_POST['message'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'unkownboy215@gmail.com';                     //SMTP username
    $mail->Password   = 'Secured';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            // 465 Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('unkownboy215@gmail.com', 'RealDaddy');
    $mail->addAddress('stevesonsaji@minionsenterprises.com', 'User');     //Add a recipient

    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Inquiry Mail';
    $mail->Body    = '<h3>Fullname :-'.$full_name.'</h3>
                    <h3>Email ID :-'.$Mail.'</h3>
                    <h3>phone number :- '.$No.'</h3>
                     <h3>Message :- '.$mess.'</h3>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>
    alert('Email has been sent successfully!');
    window.location.href = 'contact.php';
  </script>";
    
} catch (Exception $e) {
    echo "<script>alert('Email has been sent successfully!');</script>";
}
}
else{
    echo "Error";
}
?>
