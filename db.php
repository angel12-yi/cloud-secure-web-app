<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "taskdb";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed");
}

?>