<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "unipma";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set (optional)
$conn->set_charset("utf8");
?>