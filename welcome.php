<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo "<script>alert(' Please Login First !');</script>";
          header("Refresh: 0; URL= index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="partials/style.css">  
     <style>
        .welcome {
            display : none;
        
        }
        .user-email {
            display:flex;
            justify-content:center;
            margin:20px;
        }
        p {
            color:red;
        }
        .card-title{
            color :red;
            font-size:30px;
        }
        
     </style>
</head>
<body>
    <?php require "partials/header.php" ?>
    <h2 class="user-email"> <p class="ptag">Welcome, <?php echo $_SESSION['email']; ?>! </p></h2>
    <hr>
    <div class="container">
    <div class="card">
  <div class="card-header">
    Status - Development on the way ..............
  </div>
  <div class="card-body">
    <h5 class="card-text">Page is Under the Development</h5>
    <p class="card-title">After Complete the Development you can Edit your profile and many more feature will be enable after complete the development</p>
    <a href="service.php" class="btn btn-primary">Go to Services</a>
  </div>
</div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <script src="partials/script.js"></script> 
 
</html>
