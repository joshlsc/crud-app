<?php

// Define database connection credentials
$servername = "localhost"; // server name
$username = "root"; // database username
$password = ""; // database password
$dbname = "crud_db"; // database name

// Create a new database connection using MySQLi object-oriented approach
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
  // If connection fails, display an error message and stop the script
  die("Connection failed: " . $conn->connect_error);
}

// If connection was successful, display a success message
// echo "Connected successfully";

?>