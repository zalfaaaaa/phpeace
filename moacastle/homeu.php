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
    <div class="text-center">
        <img src="moa.png" class="mt-5 img-fluid" width="900px"  alt="">
    </div><br>
    <div class="text-center mt-3">
      <h1>Why You Should Book Room In MoaCastle?</h1>
      <p>Cuman di MoaCastle dapat diskon 50% kalo kalian bawa album enhypen atau txt kesini. Anda akan dapat diskon 100% kalo <br> kalian bawa sunghoon atau ni-ki kesini! mau diskon 80%? coba bawa lightstick nct dan photocard enhypen! ngomong ngomong <br> levi ackraman sama mikasa pernah check out disini karna liburan keluarga. Cuman disini kalian bisa menginap sembari cuci muka loh! <br> karna para employee kita cantik cantik mirip member new jeans group idol kpop rookie itu.</p>
    </div>
    <footer class="bg-light mt-5 text-center text-lg-start">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
    </footer>
</body>
</html>