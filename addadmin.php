<?php
    // Retrieve POST data
    $ID = $_POST['adminID'];
    $name = $_POST['adminUsername'];
    $pin = $_POST['adminPassword'];

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

    // Prepare SQL statement using prepared statement to prevent SQL injection
    $qry = $conn->prepare("INSERT INTO `users` (`id`, `username`, `password`) VALUES (?, ?, ?)");

    // Bind parameters to the prepared statement
    $qry->bind_param("iss", $ID, $name, $pin);

    // Execute the prepared statement
    if ($qry->execute()) {
       echo "<span style='color: green; font-size: 50px;'>New record created successfully</span>";
        
    } else {
        echo "<span style='color: red;'>Error: " . $qry->error . "</span>";
    }

    // Close statement and connection
    $qry->close();
    $conn->close();

?>
