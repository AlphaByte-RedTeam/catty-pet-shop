<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cattypetshopdb";

// Establish connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection status
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
