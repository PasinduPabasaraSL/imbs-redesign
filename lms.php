<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Learining Management System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Boostrap Linked -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>    
</head>
<body>
    <!-- navbar section start -->
    <div class="navbar-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #19ac6f;">
        <a class="navbar-brand" href="#"><img src="../imbs/img/brand/imbslogo.png" width="250" height="60" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home </a>
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
            <li class="nav-item me-1" >
                <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
    
        </div>
    </nav>
    </div>
    
    <div class="navbar-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #19ac6f;">
        <a class="navbar-brand ms-1" href="#">Learning Managment System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">MY PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">EDIT PROFILE</a>
            <li class="nav-item">
                <a class="nav-link" href="#">EXAMINATION CENTER</a>
            </li>
            <li class="btn btn-primary ms-3 me-1 rounded-pill">
                <a class="nav-link" href="logout.php">SIGN OUT</a>
            </li>
          </ul>
    
        </div>
    </nav>
    </div>
    <!-- navbar section end -->

    <div class="card" style="width: 18rem;">
		<img src="img/user-default.png" 
			class="card-img-top" 
			alt="admin image">
		<div class="card-body text-center">
			<h5 class="card-title">
            <?php
                // Check if the "name" query parameter exists
                if (isset($_GET['name'])) {
                    // Retrieve the value of the 'name' query parameter
                    $name = $_GET['name'];

                    // Retrieve the value of the 'name' query parameter
                    echo "Welcome, $name";
                } else {
                    // If the "name" query parameter is missing, display an error message
                    echo "Error: Name parameter is missing!";
                }
            ?>
			</h5>
			<a href="logout.php" class="btn btn-dark">Logout</a>
			</div>
	</div>

</body>
</html>   