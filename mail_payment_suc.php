<?php

$to = 'info@mobb-eg.com';
$sql = "SELECT * FROM `appointment` WHERE `state`='0' order by  `id` desc limit 1";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $firstname = $row["name"];
    $email = $row["email"];
    $text = $row["message"];
    $phone = $row["tel"];
    $date = $row["date"];
    $title = $date == "" ? "Transaction has been completed successfully for service plan " : "BOOK AN APPOINTMENT with date: " . $date;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message = '<h1>' . $title . '</h1><table style="width:100%">
        <tr>
            <td>Name ' . $firstname . '</td>
        </tr>
        <tr><td> ' . $email . '</td></tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>phone: ' . $phone . '</td></tr>
     </table>';

    if (@mail($to, $email, $message, $headers)) {
        
    } else {
        
    }
    if ($row['date'] != "") {
        $sql = "UPDATE `appointment` SET `state`='1' WHERE `id`='$row[id]'";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "DELETE FROM `appointment` WHERE `id`='$row[id]'";
        $result = mysqli_query($conn, $sql);
    }
}