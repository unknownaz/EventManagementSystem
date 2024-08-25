<?php

$host = "localhost";
$username = "root";
$password = "qwerty12345#";
$dbname = "login_info";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
