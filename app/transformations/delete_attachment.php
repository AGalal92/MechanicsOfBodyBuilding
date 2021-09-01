<?php

include '../../../database_security/database/database_configuration.php';
$sql = "UPDATE `$_POST[taple]` SET `$_POST[row]`='' WHERE `id`='$_POST[row_id]'";
$result = mysqli_query($conn, $sql);
