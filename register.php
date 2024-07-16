<?php
    // Retrieve POST data
    $ID = $_POST['id'];
    $NIC = $_POST['nic'];
    $name = $_POST['username'];
    $pin = $_POST['password'];
    $address = $_POST['adress']; // Corrected spelling of "address"
    $course_type = $_POST['course_type'];
    $tel = $_POST['telephone'];
  
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

    // Prepare SQL statement using prepared statement
    $qry = $conn->prepare("INSERT INTO `students` (`id`, `nic`, `username`, `password`, `address`, `tel_no`, `course`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters and execute query
    $qry->bind_param("issssis", $ID, $NIC, $name, $pin, $address, $tel, $course_type);
    $result = $qry->execute();

    // Check for query execution success
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $qry->error;
    }

    // Close statement and connection
    $qry->close();
    $conn->close();
?>
