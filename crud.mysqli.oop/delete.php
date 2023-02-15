<?php
// Include the database connection file
require_once 'config/conn.php';

// Get the id of the employee to be deleted
$id = $_GET['id'];

// SQL query to delete the employee
$query = "DELETE FROM tbl_employees WHERE ID = $id";

// Execute the query and store the result
$result = $conn->query($query);

// Check if the query was successful
if ($result === TRUE) {
    // If successful, redirect the user to the index page
    header("Location: index.php?deleted");
    exit;
} else {
    // If not successful, display an error message
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>