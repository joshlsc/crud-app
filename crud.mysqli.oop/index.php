<?php
// Include the database connection file
require_once 'config/conn.php';
// Include the functions file
require_once 'function/functions.php';

// SQL query to retrieve data from the `tbl_employees` table
$query = "SELECT * FROM tbl_employees";

// Execute the query and store the result
$result = $conn->query($query);
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
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="#">Crud App</a>
        </div>
    </nav>
    <div class="container mt-5">
        <h3 class="text-center my-5">CRUD App Using PHP, MySQL, and Bootstrap 5</h3>
        <?php 
            successMsg();
            deleteMsg();
            updateMsg();
        ?>
        <a class="btn btn-primary mb-3" href="add.php">Add New Record</a>
        <table class="table table-dark table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if the query was successful and has data to display
                if ($result->num_rows > 0) {
                    // Loop through each row of the result
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $row['ID']; ?></td>
                            <td><?= $row['Firstname']; ?></td>
                            <td><?= $row['Lastname']; ?></td>
                            <td>
                                <!-- Edit and delete links -->
                                <a class="btn btn-primary btn-sm" href="edit.php?id=<?= $row['ID']; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $row['ID']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else { ?>
                    <!-- If no data is found, display a message -->
                    <tr>
                        <td class="text-center" colspan="4"><?php echo 'No data Found'; ?></td>
                    </tr>
                    <?php
                }
                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>

