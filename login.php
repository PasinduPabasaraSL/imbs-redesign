<?php
  // Retrieve POST data
  $_ID=$_POST['id'];
  $name = $_POST['username'];
  $pin = $_POST['password'];
  $user_type = $_POST['user_type'];
  
  // Database connection parameters
  $server = "localhost"; 
  $username = "root";
  $password = "1234";
  $database_name = "campus"; 

  // Create database connection
  $conn = new mysqli($server, $username, $password, $database_name);

  // Check for connection errors
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Corrected spelling of "failed"
  }

  // Check user type
  if ($user_type == "admin") {
    // Query to check admin credentials
    $qry = "SELECT * FROM users WHERE  id='$_ID' AND username='$name' AND password='$pin' ";

    // Execute query
    $result = $conn->query($qry);

    // Check if any rows are returned
    if ($result->num_rows > 0) {
      // Redirect to admin profile if credentials are correct
      header("Location: crud.php?name=" . urlencode($name)); // Pass name as query parameter
      exit(); // Added exit after header redirect
    } else {
      // Redirect to error page if credentials are incorrect
      header("Location: error.html");
      exit(); // Added exit after header redirect
    }
  } else {

      //Query to check student credentials
      $qry = "SELECT * FROM students WHERE id='$_ID' AND  username='$name'  AND password='$pin'";

      // Execute query
      $result = $conn->query($qry);
    
      // Check if any rows are returned
      if ($result->num_rows > 0) {
        // Redirect to admin profile if credentials are correct
        header("Location: lms.php?name=" . urlencode($name)); // Pass name as query parameter
        exit(); // Added exit after header redirect
      } else {
        // Redirect to error page if credentials are incorrect
        header("Location: error.html");
        exit(); // Added exit after header redirect
    }

  }

  // Close database connection
  $conn->close();
?>



