<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add background color to the body */
        body {
            background-color: #f8f9fa; /* Light gray */
            font-family: Arial, sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #19ac6f !important; /* Custom green */
        }

        .navbar-brand img {
            max-height: 40px;
            vertical-align: middle;
        }

        /* Add padding to the admin section */
        .admin-section {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Form Styling */
        .form-control {
            border-radius: 15px;
        }

        .btn-primary {
            border-radius: 15px;
        }

        .btn-dark {
            border-radius: 15px;
        }

        /* Footer Styling */
        footer {
            background-color: #19ac6f;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #19ac6f;">
        <a class="navbar-brand ms-2" href="#" ><img src="../imbs/img/brand/imbslogo.png" width="230" height="60" alt=""></a>
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

<div class="navigation">
    <nav class="navigation navbar-expand-lg navbar-light bg-light" style="background-color: #19ac6f;">
        <a class="navbar-brand ms-2 " href="#">Administration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            <li class="btn btn-success ms-3 me-2 rounded-pill">
                <a class="nav-link" href="sms.php">Student Management System
                </a>
            </li>
          </ul>

        </div>
    </nav>
</div>

<!-- Admin Section -->
<section class="admin-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="img/admin-default.png" class="card-img-top" alt="admin image">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <?php
                            if (isset($_GET['name'])) {
                                $name = $_GET['name'];
                                echo "Welcome Admin <br> $name";
                            } else {
                                echo "Error: Name parameter is missing!";
                            }
                            ?>
                        </h5>
                        <a href="logout.php" class="btn btn-dark">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Admin Form -->
        <div class="row mt-4 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Add New Admin</div>
                    <div class="card-body">
                        <form action="addadmin.php" method="post">
                            <div class="mb-3">
                                <label for="adminID" class="form-label">ID:</label>
                                <input type="number" class="form-control" id="adminID" name="adminID" required>
                            </div>
                            <div class="mb-3">
                                <label for="adminUsername" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="adminUsername" name="adminUsername" required>
                            </div>
                            <div class="mb-3">
                                <label for="adminPassword" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="adminPassword" name="adminPassword" required>
                            </div>
                            <div>
                                <input type="submit" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<footer>
    <div class="container">
        <p>&copy; All Rights Reserved, IMBS GREEN CAMPUS powered by icrony solutions</p>
    </div>
</footer>

</body>
</html>
