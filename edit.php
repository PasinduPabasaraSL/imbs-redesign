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

// CREATE operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    // Retrieve form data
    $nic = $_POST['nic'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $course = $_POST['course'];

    // Insert data into database
    $sql = "INSERT INTO students (nic, username, password, address, tel_no, course) VALUES ('$nic', '$username', '$password', '$address', '$telephone', '$course')";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Record created successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error creating record: ' . $conn->error . '</div>';
    }
}

// READ operation
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data in a table
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>ID</th><th>NIC</th><th>Username</th><th>Password</th><th>Address</th><th>Telephone</th><th>Course</th></tr></thead>';
    echo '<tbody>';
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nic"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td><td>".$row["address"]."</td><td>".$row["tel_no"]."</td><td>".$row["course"]."</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo '<div class="alert alert-info" role="alert">No records found</div>';
}

// UPDATE operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $nic = $_POST['nic'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $course = $_POST['course'];

    // Update data in database
    $sql = "UPDATE students SET nic='$nic', username='$username', password='$password', address='$address', tel_no='$telephone', course='$course' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Record updated successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error updating record: ' . $conn->error . '</div>';
    }
}

// DELETE operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Retrieve ID of the record to delete
    $id = $_POST['id'];

    // Delete record from database
    $sql = "DELETE FROM students WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Record deleted successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error deleting record: ' . $conn->error . '</div>';
    }
}

// Close database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>www.ibmbs.lk</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Boostrap Linked -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>    
</head>
<body>
<!-- HTML form for creating records -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mt-4 mb-4">Create Record</h2>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <input type="text" class="form-control" name="nic" placeholder="NIC">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="telephone" placeholder="Telephone">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="course" placeholder="Course">
                </div>
                <button type="submit" class="btn btn-success" name="create">Create</button>
            </form>
        </div>
    </div>
</div>

<!-- HTML form for updating or deleting records -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Update / Delete Record</h2>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <input type="text" class="form-control" name="id" placeholder="ID">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="nic" placeholder="NIC">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="telephone" placeholder="Telephone">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="course" placeholder="Course">
                </div>
                <button type="submit" class="btn btn-warning" name="update">Update</button>
                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>