<?php
session_start();
if (!isset($_SESSION["val"]) || $_SESSION["val"] != $_SERVER['REMOTE_ADDR']) {
    echo "<script> window.location.href='./login/index.php' </script>";
    die();
} else {
    echo "<script> window.location.href='./main/index.php' </script>";
}
