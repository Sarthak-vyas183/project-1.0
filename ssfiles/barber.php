
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../partials/style.css">
    <link rel="stylesheet" href="style.css">
     
</head>
<body>
<?php
  require("../partials/header.php"); 
  require("../backend/dbconnect.php");

  $sql = "SELECT * FROM `labordata`";
  $result = mysqli_query($conn,$sql);
  echo "<div class='grid-container'>";
  while($row = mysqli_fetch_assoc($result)) {
    if($row['skillname'] == 'barber') {
    echo "
    <div class='card' id='card'>
    <p class='card-title'> ". $row['skillname'] ." </p>

    <p><span id='card-header'>Name: &nbsp &nbsp  " . $row['sname'] . "</span> </p>
    <p><span id='card-header'>Email: &nbsp &nbsp ". $row['email'] ." </span></p>
    <p><span id='card-header'>Contact: &nbsp &nbsp  " . $row['contact'] ."</span> </p>
    <p><span id='card-header'>Skill Name: &nbsp &nbsp " . $row['skillname'] . "</span> </p>
    <p class='scroll'><span id='card-header'>About The Professional :</span>  " . $row['BriefIntro'] . "</p>

    <div class='go-corner'>
       <div class='go-arrow'><a id='icon' href='https://wa.me/" . $row['contact'] . "' target='_blank'><i class='fa-brands fa-whatsapp'></i></a></div>
    </div>
  </div>
    ";
 }
}
  echo"</div>";
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>