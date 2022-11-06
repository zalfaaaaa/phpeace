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
    </div>
    <div style="padding: 50px;">
      <form action="morder.php"  method="POST">
      <div class="container mt-3">
      <div class="row" >
        <div class="col-md-8 offset-md-2">
      <div class="card my-6" style="background:#7E8A97;">
          <form class="card-body cardbody-color p-lg-4 text-dark form-control">
          <h2 class="mb-3 mt-4 text-center border-5 text-dark">Booking Information</h2>
          <div class="mb-3 mt-3 row text-center">
              <div class="col text-dark">
                  Check in : <br> 
                  <input type="date" name="checkin" required class="rounded-3 border-light form-control" style="width: 150px;margin: 0px auto">
              </div>
              <div class="col text-dark">
                  Check out : <br> 
                  <input type="date" name="checkout" required class="rounded-3 border-light form-control" style="width: 150px;margin: 0px auto">   
              </div>
              <div class="col text-dark">
                  Quantity : <br>
                  <input type="number" name="jumlah" required class="rounded-3 border-light form-control" style="width: 80px;margin: 0px auto">   
              </div>
          </div>
            <div class="mb-3 mt-3 text-center text-dark">
              Customer Name <br>
              <input class="rounded-3 border-light form-control" type="text" name="namapemesan" placeholder="insert nama pemesan" style="width: 300px;margin: 0px auto" required>
            </div>
            <div class="mb-3 mt-3 text-center text-dark">
              Email : <br>
              <input class="rounded-3 border-light form-control" type="email" name="email" placeholder="insert email" style="width: 300px;margin: 0px auto" required>
            </div>
            <div class="mb-3 mt-3 text-center text-dark">
              Phone Number : <br>
              <input class="rounded-3 border-light form-control" type="text" name="nohp" placeholder="insert your active phone number" style="width: 300px;margin: 0px auto" required>
            </div>
            <div class="mb-3 mt-3 text-center text-dark">
              Room Type : <br>
              <select name="tipekamar" class="form-control rounded-3 border-light" style="width: 300px;margin: 0px auto;" required>
              <option value=""></option>
              <option value="Superior Room ">Superior Room</option>
              <option value="Deluxe Room">Deluxe Room</option>
              <option value="Twin Room">Twin Room</option>
              <option value="Single Room">Single Room</option>
              </select>
            </div>
            <div class="text-center mt-3"> 
              <button type="submit" onclick="myalert()" class="btn px-3 mb-5 text-white" style="width: 300px;background: rgb(38, 107, 107);">Order</button> <br>
              <script> 
                function myalert() { 
                    alert("Terimakasih karna mempercayai kami!" + 
                    "Anda berhasil check out" +  "di MoaCastle!"); } 
            </script>
              </div>
            </div>
          </form>
      </div> 
      <br><br><br>
    <div class="text-center mt-5 p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
</body>
</html>