<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="partials/style.css">
</head>
<style>
  body {
    overflow-x: hidden;
  }
    .card {
        margin: 40px;
        height:500px;
    }
    .main-service-div {
      position: absolute;
      top: 10vh;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-evenly;
   

    } 
  .card-text{
    color:black;
  }
  .card img {
    height:60%;
  }
</style>
<body>
 <?php
  require("partials/header.php");
 ?>
   
<div class="main-service-div">
    <div  class="card" style="width: 18rem;">
        <img src="servicesImg/construction-worker.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">General Labour</h5>
          <p class="card-text">Book a labour for Genral labor work , cleaning ,unloading materials </p>
          <a href="ssfiles/GL.php" class="btn btn-primary">Book Labour</a>
        </div>
      </div>

 <div class="card" style="width: 18rem;">
    <img src="servicesImg/painter.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Painter</h5>
      <p class="card-text">Color Your World with Our Expertise : Call Painter</p>
      <a href="ssfiles/painter.php" class="btn btn-primary">Book Painter </a>
    </div>
  </div>



 <div class="card" style="width: 18rem;">
    <img src="servicesImg/welder.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Welder</h5>
      <p class="card-text">Spark Your Imagination, Welding Your Vision : Call Welder</p>
      <a href="ssfiles/welder.php" class="btn btn-primary">Book Welder</a>
    </div>
  </div>

 <div class="card" style="width: 18rem;">
    <img src="servicesImg/electrician.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Electrician</h5>
      <p class="card-text">Shocking Quality, Electrifying Service : Call Electrician</p>
      <a href="ssfiles/electrician.php" class="btn btn-primary">Book Electrician</a>
    </div>
  </div>

       <div class="card" style="width: 18rem;">
        <img src="servicesImg/plumber.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Plumber : </h5>
          <p class="card-text">Leak Problems? We’ve Got the Solution : Call Plumber</p>
          <a href="ssfiles/plumber.php" class="btn btn-primary">Book Plumber</a>
        </div>
      </div>


      

       <div class="card" style="width: 18rem;">
        <img src="servicesImg/barber2.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Barber</h5>
          <p class="card-text">Your Look, Our Expertise!: Call Barber</p>
          <a href="ssfiles/barber.php" class="btn btn-primary">Book barber</a>
        </div>
      </div>



     <div class="card" style="width: 18rem;">
        <img src="servicesImg/farmer.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Farming Labour</h5>
          <p class="card-text">Where Hard Work Meets Heart for the Harvest: Call farming labour </p>
          <a href="ssfiles/former.php" class="btn btn-primary">Book Labour</a>
        </div>
      </div>




       <div class="card" style="width: 18rem;">
        <img src="servicesImg/ac-repair-large.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Teachnician</h5>
          <p class="card-text">Home Appliance Repair: Call Technician  </p>
          <a href="ssfiles/technician.php" class="btn btn-primary">Book Teachnician</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="servicesImg/cook.webp" class="card-img-top" alt="...">
         <div class="card-body">
          <h5 class="card-title">Cook</h5>
          <p class="card-text">From Our Kitchen to Your Heart : Call Cook</p>
          <a href="ssfiles/cook.php" class="btn btn-primary">Book Cook</a>
         </div>
      </div>
   
</div>
  
</body>

</html>