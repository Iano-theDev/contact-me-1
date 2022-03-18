<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "sinceianmike@gmail.com";

mail($recipient, $subject, $message, $mailheader)

or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">
        <h1>Thanks for Contacting Me, I\'\ll be in touch ASAP</h1>
        <p class="back">Go Back<a href="index.html"> Home</a></p>
    </div>
    
</body>
</html>
';

?>