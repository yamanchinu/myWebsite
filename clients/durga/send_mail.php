<?php
if (isset($_POST['SEND'])) {
include 'scripts/PHPMailer-master/src/Exception.php';
include 'scripts/PHPMailer-master/src/PHPMailer.php';
include 'scripts/PHPMailer-master/src/SMTP.php';


$firstName =  $_POST['FIRST_NAME'];
$lastName  =  $_POST['LAST_NAME'];
$email     =  $_POST['EMAIL'];
$mobile    =  $_POST['MOBILE_NUMBER'];
$message   =  $_POST['MESSAGE'];


$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail-> IsSMTP(); // enable SMTP

$mail-> SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only

$mail-> SMTPAuth = 'true'; // authentication enabled

$mail-> SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail-> Host = 'sg2plcpnl0047.prod.sin2.secureserver.net';  //SMTP server address, use 'smtp.gmail.com' for gmail smtpout.secureserver.net

$mail-> Username = 'webyaman@yamanagrawal.com'; //It is your gmail address

$mail-> Password = 'India@1234';

$mail-> Port = 465; //465 for SMTPSecure = ssl 25

$mail-> SetFrom('webyaman@yamanagrawal.com','Yaman Website');

$mail-> addAddress('agrawalyaman6@gmail.com','SBM Goldoyl');  //Recipient address// sbmgoldoyl@gmail.com

$mail-> addReplyTo('webyaman@yamanagrawal.com','noreply');

$mail-> isHTML(true);

$mail-> Subject = 'Sbm Goldoyl - Contact Us';

$mail-> Body = "
            <html>
                <p>Hi SBM Goldoyl, </p>
                <p> My name is  ".$firstName."  " .$lastName.", I have the following query. </p>
                <p><b>Query</b></p>
                <p>".$message."</p>
                <p>You can contact me on</p>
                <span>".$email." or </span>
                <span>".$mobile."</span>
            </html>";

if (!$mail->send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
     echo "Message sent!";
 }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SBM Goldoyl Acknowledge</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body style="visibility : hidden; position : relative;background-color: #f2f2f0;
    font-size: 14px;
    font: 1em SabonNextW01-RegSC,Arial,sans-serif;">
        <php if (isset(#success) && $success) { ?>
            <h1 style="position:absolute;visibility:initial;top:0;"> Your query has been submitted, please expect a response within the next 24 hours</h1>
        <a href="contact.html" style="position:absolute;visibility:initial;top:80px;background-color: #cccccc;
    border: none;
    padding: 20px 60px;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 3px;text-decoration: none;left: 0;";>Back to Contact Page</a>
        <? } ?>
    </body>
</html>