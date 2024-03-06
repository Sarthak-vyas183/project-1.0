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
     </style>
</head>
<body>
    <?php require "partials/header.php" ?>
    <h2 class="user-email"> <p>Welcome, <?php echo $_SESSION['email']; ?>! </p></h2>
    <hr>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <script src="partials/script.js"></script> 
 <script>
    color = document.getElementsByclass("welcome");
    
 </script>
</html>
