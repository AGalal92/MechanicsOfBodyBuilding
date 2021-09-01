<?php

session_start();
include '../../../database_security/security/security.php';
include '../../../database_security/database/database_configuration.php';
if ($_POST['submit'] == 'save') {
    $sql = "INSERT INTO `tips`( `title`,`details`) VALUES ('$_POST[title]','$_POST[sub_title]')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> window.location.href='../page.php?page=main' </script>";
    } else {
        echo 'Error';
    }
} else if ($_POST['submit'] == 'update') {
    $sql = "UPDATE `tips` SET `title`='$_POST[title]',`details`='$_POST[sub_title]' where `id`='$_POST[id]'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> window.location.href='../page.php?page=main' </script>";
    } else {
        echo 'Error';
    }
} else if ($_POST['submit'] == 'delete') {
    $sql = "DELETE FROM `tips` WHERE `id`='$_POST[id]'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> window.location.href='../page.php?page=main' </script>";
    } else {
        echo 'Error';
    }
}
