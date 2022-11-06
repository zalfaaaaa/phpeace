<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
</head>
<body style="font-family: 'Poppins', sans-serif;background:#B7C4CF">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" style="font-family: 'Poppins', sans-serif;">
          <h1 class="text" style="color:#76BA99">Moa<span class="text" style="color:#D57E7E">Castle</span></h1>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="homeu.php"> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abus.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="room.php">Room</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="checkio.php">Check out</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">History</a>
          </li>
          </ul>
          <ul class="d-flex navbar-nav">
            <li>
              <a href="logout.php" onclick="return confirm('affh iyh mau logout?')" class="btn btn-danger">Logout</a>
            </li>
          </ul>
      </nav>
        <div class="mt-3 row justify-content-center row-cols-1 row-cols-md-3 g-4" style="margin: auto;">
          <div class="col">
            <div class="card">
              <img src="zoo (2).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Deluxe Room</h5>
                <p class="card-text">
                  <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star-half-alt text-warning"></i>
                  <span class="text-warning">4.5</span>
                  <div class="row">
                  </div>
                  <span>located in Dago, a neighborhood in Bandung, Braga Street, you can visit Bandung Zoo and Trans Studio Bandung tho.</span> 
                  <a href="deluxe.html" class="text-primary fw-bold"><u>detail</u></a></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="park (2).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Superior Room</h5>
                <p class="card-text"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star-half-alt text-warning"></i>
                  <span class="text-warning">4.5</span>
                  <div class="row">
                  </div>
                  <span>located in Dago, a neighborhood in Bandung, Braga Street, you can visit Bandung Zoo and Trans Studio Bandung tho.</span> 
                  <a href="superior.html" class="text-primary fw-bold"><u>detail</u></a></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="niki (2).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Twin Room</h5>
                <p class="card-text"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star-half-alt text-warning"></i>
                  <span class="text-warning">4.5</span>
                  <div class="row">
                  </div>
                  <span>located in Dago, a neighborhood in Bandung, Braga Street, you can visit Bandung Zoo and Trans Studio Bandung tho.</span> 
                  <a href="twin.html" class="text-primary fw-bold"><u>detail</u></a></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="lux (1).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">King Room</h5>
                <p class="card-text"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                  <span class="text-warning">5.0</span>
                  <div class="row">
                  </div>
                  <span>located in Dago, a neighborhood in Bandung, Braga Street, you can visit Bandung Zoo and Trans Studio Bandung tho.</span> 
                  <a href="king.html" class="text-primary fw-bold"><u>detail</u></a></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="geo (1).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Single Room</h5>
                <p class="card-text"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                  <span class="text-warning">5.0</span>
                  <div class="row">
                  </div>
                  <span>located in Dago, a neighborhood in Bandung, Braga Street, you can visit Bandung Zoo and Trans Studio Bandung tho.</span> 
                  <a href="single.html" class="text-primary fw-bold"><u>detail</u></a></p>
              </div>
            </div>
          </div>
        </div>
        <br><br><br>
    <footer class="bg-light mt-5 text-center text-lg-start">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
    </footer>
</body>
</html>