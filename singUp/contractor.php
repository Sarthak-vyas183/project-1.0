<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contractor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="singUp.css"> 
    <link rel="stylesheet" href="../partials/style.css"> 
</head>
<body>
    <?php
    require("../partials/header.php");
    ?>
<div class="con-container">
    <h2>Register As contractor</h2>
    <form action="../backend/contractorCon.php" method="post">
        <label for="Name">Name:*</label>
    <input type="text" name="sname" placeholder="Enter your name" required>

    <label for="email">Email:*</label>
    <input type="email" name="email" placeholder="Enter your email" required>

    <label for="contact">contact:*</label>
    <input type="text" name="contact" placeholder="Enter your contact" maxlength="10" required>

    <label for="pass">password:*</label>
    <input type="password" name="pass" placeholder="create a password" required>

    <label for="Aadhar">Aadhar No:*</label>
    <input type="text" name="AadharNo" placeholder="Enter your Aadhar card No"maxlength="12" required>

     <label for="labourCount">Count of labour You have: </label>
     <input type="text" name="labourCount" placeholder="enter count" maxlength="5">

     <button>submit</button>

    </form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <script src="../partials/script.js"></script>
 <script>
    let As_con = document.querySelector("#As-Contractor");
    As_con.style.display = "none";
 </script>
</html>