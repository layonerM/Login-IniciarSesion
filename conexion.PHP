<?php
$servername = "localhost";
$username = "id22094022_layoner";
$password = "Layo3186244636#";
$database = "id22094022_host";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected ,";
