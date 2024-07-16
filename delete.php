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

// Check if the "id" parameter is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete student record from the database
    $sql = "DELETE FROM students WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Redirect back to the student list page
header("Location: crud.php");
exit();
?>
