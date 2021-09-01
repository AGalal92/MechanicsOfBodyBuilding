
<?php

include './database_security/database/database_configuration.php';
$sql = "INSERT INTO `cal_mail`( `mail`) VALUES ('$_POST[email]')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    
}
$cal_name = $_POST['cal_name'];
if ($cal_name == "bmr_cal") {
    $page_cal = "bmi-calculator";
    include './include/bmr_function.php';
} elseif ($cal_name == "tread_cal") {
    $page_cal = "tread-calculator";
    include './include/tread_function.php';
} elseif ($cal_name == "bike_cal") {
    $page_cal = "bike-calculator";
    include './include/bike_function.php';
} elseif ($cal_name == "stair_cal") {
    $page_cal = "stair-calculator";
    include './include/stair_function.php';
}
?>