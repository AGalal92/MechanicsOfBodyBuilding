<?php

$height = $_POST['height'];
$weight = $_POST['weight'];
$age = $_POST['age'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$activity = $_POST['activity'];
//man
if ($sex == 0) {
    $bmr = 66.473 + (13.7516 * $weight) + (5.0033 * $height) - (6.755 * $age);
} else {//wome
    $bmr = 655.0955 + (9.5634 * $weight) + (1.8496 * $height) - (4.6756 * $age);
}
$result=(int) $bmr ;
if ($activity == 0) {
    $result2= (int) ($bmr * 1.1);
} else if ($activity == 1) {
     $result2= (int) ($bmr * 1.2);
} else if ($activity == 2) {
     $result2= (int) ($bmr * 1.3);
} else if ($activity == 3) {
     $result2= (int) ($bmr * 1.4);
} else if ($activity == 4) {
     $result2= (int) ($bmr * 1.5);
}
echo "<script> window.location.href='index.php?page=".$page_cal."&result=".$result."&result2=".$result2."' </script>";

