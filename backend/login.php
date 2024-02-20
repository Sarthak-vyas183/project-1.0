
<?php
 $login = false;
 $showError = false;

 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  require("dbconnect.php");
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $name = $_POST['sname'];

  $sql = "SELECT * FROM `labordata` WHERE `email` = '$email'";
  $result = mysqli_query($conn, $sql); 
  $num = mysqli_num_rows($result);
  
  if($num == 1) {
    while($row = mysqli_fetch_assoc($result) ) {
      if(password_verify($pass , $row['pass'])) {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email'] = $email;
          echo "<script>alert('Login successfully');</script>";
          header("Refresh: 0; URL= ../index.php");
      } else {
        echo "<script>alert('Login failed. Please check your credentials.');</script>";
        header("Refresh: 0; URL=../index.php");
      }
    }
   }

 }
?>
