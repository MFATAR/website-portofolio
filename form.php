<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "farid.sr2411@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Sending Email</title>
</head>
<body>
    <div class="profile">
        <h2>Thank you for contacting me. I will get back to you as soon as possible</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
    </div>
</body>
</html>
';


?>