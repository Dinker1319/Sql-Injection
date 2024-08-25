<?php
// db.php

$host = "localhost";
$user = "root";
$password = "root";
$database = "sql_injection_lab";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
