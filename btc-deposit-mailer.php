<?php
session_start();
$username = $_SESSION["useruid"];
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
    $mail->Host       = 'mail.privateemail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@firmcedar.com';                     //SMTP username
    $mail->Password   = 'Tochukwu878';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->isHTML(true);


    require 'dbhandler.inc.php';
    $query = "SELECT * FROM `users` WHERE `usersUsername` = '$_SESSION[useruid]'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_assoc($result);
    $email = $rows['usersEmail'];


    //Recipients
    $mail->setFrom('support@firmcedar.com', 'FirmCedar');
    $mail->addAddress($email, $email);     //Add a recipient


    $sql = mysqli_query($conn, "SELECT * FROM history ORDER BY id DESC LIMIT 1");
    $resultS = mysqli_fetch_row($sql);
    $amount = $resultS[3];
    $id = $resultS[0];
    $username= $resultS[1];
    


    
    $name = $rows['usersName'];
    $body = "Hello ". $name. ",". "<p>Your deposit request of ".$amount." is via BITCOIN submitted successfully.</p><p>Details of your payment:</p><p>Amount: ".$amount."Btc</p><p>Charge: 0 Btc</p><p>Transaction ID: ".$username ."".$id."</p><p>Amount: ".$amount."Btc</p><p>Thank you!</p>";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Deposit Request Successfully Submitted';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}