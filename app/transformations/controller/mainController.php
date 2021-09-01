<?php

session_start();
include '../../../database_security/security/security.php';
include '../../../database_security/database/database_configuration.php';
foreach ($_FILES['fileToUpload']['tmp_name'] as $f => $name) {
    $target_file = basename($_FILES["fileToUpload"]["name"][$f]);
    if ($target_file == '') {
        $target_file = @$_POST['image'];
    } else {
        include './uploadimage.php';
        if ($uploadOk == 0) {
            die("Problem! Image Upload");
        }
    }
}
$target_file =str_replace("../", "", $target_file);
if ($_POST['submit'] == 'add') {
    $sql = "INSERT INTO `transformations`(  `image`) value"
            . "('$target_file')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> window.location.href='../page.php' </script>";
    } else {
        echo 'Error';
    }
} elseif ($_POST['submit'] == 'update') {
    $sql = "DELETE FROM `transformations` WHERE `id`='$_POST[id]'";
    $result = mysqli_query($conn, $sql);
 
    $sql = "INSERT INTO `transformations`(  `image`) value"
            . "('$target_file')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> window.location.href='../page.php' </script>";
    } else {
        echo 'Error';
    }
} elseif ($_POST['submit'] == 'delete') {
    $sql = "delete from `transformations`  WHERE `id`='$_POST[id]'";
    $result = mysqli_query($conn, $sql);
    echo "<script> window.location.href='../page.php' </script>";
}

