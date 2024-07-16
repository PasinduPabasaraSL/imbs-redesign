<?php
// Database connection parameters
$server = "localhost";
$username = "root";
$password = "1234";
$database_name = "campus";

// Create database connection
$conn = new mysqli($server, $username, $password, $database_name);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch student records from the database
function fetchStudents($conn) {
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nic"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["tel_no"] . "</td>";
            echo "<td>" . $row["course"] . "</td>";
            echo "<td>";
            echo "<a href='edit.php?id=" . $row["id"] . "' class='btn btn-primary'>Edit</a>";
            echo "<a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No students found</td></tr>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Management System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add background color to the body */
        body {
            background-color: #f8f9fa; /* Light gray */
        }
        /* Adjust spacing for better readability */
        .navbar-light {
            margin-bottom: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #19ac6f;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../imbs/img/brand/imbslogo.png" width="250" height="60" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Courses
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">java</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item me-1">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="navbar-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #19ac6f;">
        <div class="container">
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                    <li class="btn btn-success ms-3 me-1 rounded-pill">
                        <a class="nav-link" href="crud.php">Admin Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container">
    <h2 class="text-center">Student Management System</h2>
    <!-- Create Form -->
    
    </div>
    <!-- Display Users -->
<div class="card">
    <div class="card-header">Students</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIC</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Course</th>
                    <th>Action</th> <!-- For CRUD operations -->
                </tr>
            </thead>
            <tbody>
                <?php
                fetchStudents($conn); // Call the function to display student records
                ?>
            </tbody>
        </table>
    </div>
</div>

</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
