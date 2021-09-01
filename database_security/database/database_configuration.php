<?php
date_default_timezone_set('africa/cairo');
$servername = "localhost";
$username = "mobbeg5_data";
$password = "asdfgASDFG12345";
$dbname = "mobbeg5_mobb";

$servername = 'mysql:host=localhost;dbname=mobbeg5_mobb';
$user = 'root';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset('utf8');
