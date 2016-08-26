<?php
require 'config.php';

/* Connect to Database */

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// $conn->close();

?>