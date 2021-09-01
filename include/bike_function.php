<?php

$height = $_POST['height'];
$weight = $_POST['weight'];
$age = $_POST['age'];
$email = $_POST['email'];
$time = $_POST['time'];
$Pace = $_POST['Pace'];
$result =(int) ((($Pace * 3.09 * $weight) / 200) * $time);

echo "<script> window.location.href='index.php?page=" . $page_cal . "&result=" . $result . "' </script>";
