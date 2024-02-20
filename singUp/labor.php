<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="singUp.css"> 
    <link rel="stylesheet" href="../partials/style.css"> 
    <style>
       
    </style>
</head>
<body>
<?php
require("../partials/header.php");
?>
<div class="labor-main-container">
        <h2 class="labor-h2">Register as Professional</h2>
   <form class="labor-form" action="../backend/laborConn.php" method="post">
    <label for="Name">Name:*</label>
    <input type="text" name="sname" placeholder="Enter your name" required>

    <label for="email">Email:*</label>
    <input type="email" name="email" placeholder="Enter your email" required>

    <label for="contact">contact:*</label>
    <input type="text" name="contact" placeholder="Enter your contact"maxlength="10" required>

    <label for="pass">password:*</label>
    <input type="password" name="pass" placeholder="create a password" required>

    <label for="Aadhar">Aadhar No:*</label>
    <input type="text" name="AadharNo" placeholder="Enter your Aadhar card No"maxlength="12" required>

    <label for="skill"> Are you skilled :</label>
    <select name="skilled" id="skill">
        <option value="">---select---</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

      <label for="skillname" id="skillname">select skill Name:</label>
      <select name="skillname" id="skillname" class="skillname">
     
        <option value="">---select---</option>
        <option value="construction">knowledge of building and construction</option>
        <option value="painter">Painter</option>
        <option value="Welding">Welding</option>
        <option value="electrician">electrician</option>
        <option value="barber">barber</option>
        <option value="plumber">plumber</option>
        <option value="AC_repair">AC & home appliance repair</option>
        <option value="Cook">chef</option> 
        <option value="FarmLabour">Farming Labour</option>
        <option value="other">other</option>
   </select>

    <label for="age">Age:*</label>
    <input type="Age" name="age" placeholder="enter your age:" maxlength="2"required>

    <label for="add">Address</label>
    <input type="text" name="addr" placeholder="Address">

    <label for="state">State</label>
    <input type="text" name="state" placeholder="State">

    <label for="city">City</label>
    <input type="text" name="city" placeholder="Enter city name">

    <label for="pincode">pincode</label>
    <input type="text" name="pin" placeholder="Area pincode" maxlength="8">

    <label for="text">Introduction</label>
    <textarea name="BriefIntro" id="text" cols="10" rows="10" placeholder="Brief Introduction About you and your work" maxlength="500"></textarea>


    <button>submit</button>

   </form>
</div>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <script src="../partials/script.js"></script> 
<script>
    let As_professional = document.querySelector("#As-professional");
    As_professional.style.display = "none";
    document.addEventListener("DOMContentLoaded", function() {
            let skill = document.querySelector("#skill");
            let skillname = document.querySelector("#skillname");
            let skillName = document.querySelector(".skillname");

            skill.addEventListener("change", function() {
                if (skill.value === 'Yes') {
                    skillname.style.display = 'block';
                    skillName.style.display = 'block';
                } else {
                    skillname.style.display = 'none';
                    skillName.style.display = 'none';
                }
            });
        });
</script>
</html>