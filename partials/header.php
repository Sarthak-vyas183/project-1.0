<?php

 session_start();

 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "
    <style>
        .profile , .logout {
            display:flex;
        }
        .loginbtn , .dropdown {
          display:none;
        }
    </style>
    ";
  } else {
    echo "
    <style>
        .profile , .logout {
            display:none;
        }
    </style>
    ";
  }
  
 
 echo '
 <nav class="navbar navbar-expand-lg bg-dark" id="nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KamConnect</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link enable" aria-disabled="true" href="./about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link enable" aria-disabled="true" href="./service.php">Services</a>
        </li>
        <li class="nav-item welcome">
          <a class="nav-link enable" aria-disabled="true" href="./welcome.php">Welcome</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link enable" aria-disabled="true">contact</a>
        </li>
      </ul>
        <form class="d-flex" role="search" >

        <div class="dropdown">
        <a class="btn btn-outline-info me-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Registration 
        </a>
      
        <ul class="dropdown-menu">
          <li id="As-user"><a class="dropdown-item" href="./singUp/user.php">As User</a></li>
          <li id="As-professional"><a class="dropdown-item" href="./singUp/labor.php">As Professional</a></li>
          <li id="As-Contractor"><a class="dropdown-item" href="./singUp/contractor.php">As Contractor</a></li>
        </ul>
      </div>
        <button class="btn btn-outline-info me-2 loginbtn" type="button" id="drop-btn" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@getbootstrap">
          login
        </button>
        <button class="btn btn-outline-info me-2 profile" type="button">
          profile
        </button>
        <a class="btn btn-outline-info me-2 logout" href="logout.php">Logout</a>

        
        </form>
    </div>
  </div>
</nav>
 ';
 
 require("loginModel.php");
?>
