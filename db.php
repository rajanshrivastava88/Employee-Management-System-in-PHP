<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydatabase";

// Create Connection
$conn = new mysqli($servername, $username, $password, $database, port:"3307");

// Connection Check

if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

?>