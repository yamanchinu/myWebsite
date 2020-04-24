<?php
if (isset($_POST['SEND'])) {
    $to = 'agrawalyaman6@gmail.com'; // Target email i.e where you want the email to be sent
    $subject = 'Feedback from the website';
    $message = 'Name: ' . $_POST['FIRST_NAME'] . "\r\n\r\n";
    $message .= 'Email: ' .$_POST['EMAIL'] . "\r\n\r\n";
    $message .= 'Message: ' .$_POST['MESSAGE'];


    $headers = "From: officialwebsite@yamanagrawal.com\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';

    $email = filter_input(INPUT_POST, 'EMAIL', FILTER_VALIDATE_EMAIL);
    if ($email) {
        $headers .= "\r\nReply-To: $email";
    }

    $success = mail($to, $subject, $message, $headers, '-fagrawalyaman6@gmail.com');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <title>SBM Goldoyl Acknowledge</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <php if (isset(#success) && $success) { ?>
            <h1> Your query has been submitted, please expect a response within the next 24 hours</h1>
        <? } else { ?>
            <h1> Sorry there was a problem sending the message, please try again.</h1>
        <? } ?>
    </body>
</html>
