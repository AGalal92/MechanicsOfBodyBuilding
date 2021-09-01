<?php

if (!isset($_SESSION["val"]) || $_SESSION["val"] != $_SERVER['REMOTE_ADDR']) {
    echo "<script> window.location.href='../../app/login/' </script>";
    die();
}
