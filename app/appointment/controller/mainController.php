<?php

session_start();
include '../../../database_security/security/security.php';
include '../../../database_security/database/database_configuration.php';
 if ($_POST['submit'] == 'delete') {
    $sql = "DELETE FROM `appointment` WHERE `id`='$_POST[id]'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> window.location.href='../page.php?page=main' </script>";
    } else {
        echo 'Error';
    }
}
