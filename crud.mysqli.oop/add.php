<?php
// Include the database connection file
require_once 'config/conn.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];

    // SQL query to insert data into the `tbl_employees` table
    $query = "INSERT INTO tbl_employees (Firstname, Lastname) VALUES ('$firstname', '$lastname')";

    // Execute the query and store the result
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result === TRUE) {
        // If successful, redirect the user to the index page
        header("Location: index.php?success");
        exit;
    } else {
        // If not successful, display an error message
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation Using PHP, MySQLi, and Bootstrap</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container">
            <a class="navbar-brand text-warning" href="#">Crud App</a>
        </div>
    </nav>
    <div class="container ">
        <h3 class="text-center my-5">CRUD App Using PHP, MySQL, and Bootstrap 5</h3>
        <p class="text-center">Add a new Record</p>
        <div class="container w-50 m-auto">
            <form action="" method="post">
                <input class="form-control mb-3" type="text" name="fname" placeholder="Enter First Name" required>
                <input class="form-control mb-3" type="text" name="lname" placeholder="Enter Last Name" required>
                <input class="btn btn-success mb-3" type="submit" name="submit" value="Add Record">
                <a href="index.php" class="btn btn-warning mb-3">Back to Home</a>
            </form>
        </div>
    </div>
</body>
</html>