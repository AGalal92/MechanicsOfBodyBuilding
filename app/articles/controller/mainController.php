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
$target_file = str_replace("../", "", $target_file);
if ($_POST['submit'] == 'save') {
    $sql = "INSERT INTO `articles`(`title`, `short_description`,`details`,  `by`, `date`,`image`) VALUES ('$_POST[title]','$_POST[short_description]','$_POST[sub_title]','$_POST[by]','$_POST[date]','$target_file')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> window.location.href='../page.php?page=main' </script>";
    } else {
        echo 'Error';
    }
} else if ($_POST['submit'] == 'update') {
    $sql = "UPDATE `articles` SET `title`='$_POST[title]',`short_description`='$_POST[short_description]',`details`='$_POST[sub_title]' ,`by`='$_POST[by]' ,`date`='$_POST[date]',`image`='$target_file' where `id`='$_POST[id]'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> window.location.href='../page.php?page=main' </script>";
    } else {
        echo 'Error';
    }
} else if ($_POST['submit'] == 'delete') {
    $sql = "DELETE FROM `articles` WHERE `id`='$_POST[id]'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> window.location.href='../page.php?page=main' </script>";
    } else {
        echo 'Error';
    }
}
