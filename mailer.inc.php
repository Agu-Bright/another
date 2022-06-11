<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.titan.email';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@wisetechglobals.com';                     //SMTP username
    $mail->Password   = 'Tochukwu878';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->isHTML(true);


    require 'dbhandler.inc.php';
    // require 'function.inc.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $email = $_POST['email'];
    $confirm = $_POST['pwd'];


    //Recipients
    $mail->setFrom('support@wisetechglobals.com', 'WiseTech');
    $mail->addAddress($email, $email);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    $user = $_POST['name'];
    // $email = $_GET['Code'];
    $body = "Hello ". $name. ",". "<p>You have successfully registered with WiseTech, Experienced. Specialized. Professional. We always Strive to be leaders and strategic planning of our development for years to come!</p><p>Your Confirmation code is: </p>". $code."<p>Thank You!</p>";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Registration Successfull';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}