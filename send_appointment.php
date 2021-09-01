
<?php

include './database_security/database/database_configuration.php';
$name = $_POST["fname"] . " " . $_POST['lname'];
$dateTime = $_POST['date'] . " ," . $_POST['hour'] . ":" . $_POST['minutes'];
$sql = "INSERT INTO `appointment`( `email`, `tel`, `date`, `state`, `name`) VALUES ('$_POST[email]','$_POST[tel]','$dateTime','0','$name')";
$result = mysqli_query($conn, $sql);
include './paymentMethod.php';
//echo "<script> window.location.href='index.php?page=services&s=1' </script>";
?>