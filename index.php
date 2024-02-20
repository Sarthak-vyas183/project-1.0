
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fourm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="partials/style.css">  
</head>
  <body>
    <?php
    require ("partials/header.php");
    ?>
   <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active"  data-bs-interval="3000">
      <img src="partials/labor1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
             <div class="main">
                <h2>Doorstep <br><span>Service Instantly</span></h2>
                <p>Find skilled labour swiftly on kamconnect <br> your express lane to reliable assistance, just a click away!</p>
               <span class="home-btn"><button><a href="service.php">Find Worker</a></button><p><a href="">Register yourself</a></p></span>
            </div> 
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="partials/labor2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="main">
                <h2>Doorstep <br><span>Service Instantly</span></h2>
                <p>Find skilled labour swiftly on kamconnect <br> your express lane to reliable assistance, just a click away!</p>
               <span class="home-btn"><button><a href="">Find Worker</a></button><p><a href="">Register yourself</a></p></span>
            </div>
      </div>
    </div>
    
    <div class="carousel-item"  data-bs-interval="2000">
      <img src="partials/img4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="main">
                <h2>Doorstep <br><span>Service Instantly</span></h2>
                <p>Find skilled labour swiftly on kamconnect <br> your express lane to reliable assistance, just a click away!</p>
               <span class="home-btn"><button><a href="">Find Worker</a></button><p><a href="">Register yourself</a></p></span>
            </div>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://source.unsplash.com/500x400/?labour,constraction" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="main">
                <h2>Doorstep <br><span>Service Instantly</span></h2>
                <p>Find skilled labour swiftly on kamconnect <br> your express lane to reliable assistance, just a click away!</p>
               <span class="home-btn"><button><a href="">Find Worker</a></button><p><a href="">Register yourself</a></p></span>
            </div>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://source.unsplash.com/500x400/?labor,constraction" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="main">
                <h2>Doorstep <br><span>Service Instantly</span></h2>
                <p>Find skilled labour swiftly on kamconnect <br> your express lane to reliable assistance, just a click away!</p>
               <span class="home-btn"><button><a href="">Find Worker</a></button><p><a href="">Register yourself</a></p></span>
            </div>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <?php require("partials/footer.php")?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <script src="partials/script.js"></script> 
</html>