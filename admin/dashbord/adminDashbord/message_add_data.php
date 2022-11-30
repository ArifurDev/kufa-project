<?php
session_start();
require_once('../../../connect.php'); //connection database
//message
$name = htmlspecialchars($_POST['name']);
$email = $_POST['email'];
$message = htmlspecialchars($_POST['message']);

$flag=false;
//name validation
if ($name) {
    $remove_sps = str_replace(" ", "", $name);
    if (ctype_alpha($remove_sps)) {
       //email validation
            if ($email) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                   if ($message) {
                        $message_query="INSERT INTO `message`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
                        mysqli_query($db_connection,$message_query);
                        $_SESSION['message_success']='message Insert success';
                        $flag = true;
                   } else {
                    $flag = true;
                    $_SESSION['message_error'] = 'fill in the blanks';
                   }


                }else{
                    $flag = true;
                    $_SESSION['message_error'] = 'fill in the blanks';
                }
            } else {
                $flag = true;
                $_SESSION['message_error'] = 'fill in the blanks';
            } 
    } else {
        $flag = true;
        $_SESSION['message_error'] = 'fill in the blanks';          
    }
} else {
    $flag = true;
    $_SESSION['message_error'] = 'fill in the blanks';   
}

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
    $mail->SMTPDebug  = 1;                         //Enable verbose debug output
    $mail->isSMTP();                                               //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                         //Enable SMTP authentication
    $mail->Username   = 'arifurrahmanrifat72@gmail.com';                            //SMTP username
    $mail->Password   = 'ioscredonyfpbjbn';                          //SMTP password
    $mail->SMTPSecure = 'tls';                                    //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('arifurrahmanrifat72@gmail.com', 'Joe User');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Message';
    $mail->Body    = "
    <h1>$name</h1>
    <h2>$email</h2>
    <h3>$message</h3>
    ";
 


    $mail->send();
    $flag=true;
    $_SESSION['email_error']='Message has been sent';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


if ($flag) {
    header('location:../fontend/index.php');
}
