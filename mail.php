<?php

$to = 'support@mobb-eg.com';
$firstname = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["message"];
$phone = $_POST["mobile"];



$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message = '<table style="width:100%">
        <tr>
            <td>' . $firstname . '</td>
        </tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>phone: ' . $phone . '</td></tr>
        <tr><td>Text: ' . $text . '</td></tr>
    </table>';

if (@mail($to, $email, $message, $headers)) {
    echo "<script> window.location.href='index.php?mail=1' </script>";
} else {
    echo 'failed';
}
