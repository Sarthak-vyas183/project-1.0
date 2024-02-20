<?php
include("backend/login.php");


// Define CSS styles for the profile box
$profileStyle = "
    .profile-data {
        position: absolute;
        top: 20vh;
        right:20px;
        width: 250px;
        height: 250px;
        background-color: rgb(250,255,255);
        z-index:10;
        border-radius: 5px;
    }
";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        <?php echo $profileStyle; ?>
        
    </style>
</head>
<body>
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo '<div class="profile-data">
              <p>Email: ' . $_SESSION['email'] . '</p>
             
          </div>';    
}
?>
</body>
</html>
