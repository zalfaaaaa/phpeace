<?php

$id = $_GET['idmoa'];

$db =new PDO("mysql:host=localhost;dbname=moac",'root','');
$query = $db->query("SELECT * FROM `moaorder` WHERE `idmoa`='$id'");

$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid" style="font-family: 'Poppins', sans-serif;">
        <h1 class="text-secondary">Moa<span class="text-danger">Castle</span></h1>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="homeu.html"> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="abus.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="room.html">Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.html">Check out</a>
          </li>
        </ul>
        <ul class="d-flex navbar-nav">
              <li>
                <a href="log.php" onclick="myalert()" class="btn btn-danger">Logout</a>
              </li>
              <script> 
                function myalert() { 
                    alert("Affh iyh yakin mau logout?"); } 
                </script>
            </ul>
    </nav>
    </div>
    <div style="padding: 50px;">
      <form action="update.php"  method="POST">
      <div class="container mt-3">
      <div class="row" >
      <div class="col-md-6 offset-md-3">
      <div class="card my-6 bg-dark">
          <form class="card-body cardbody-color p-lg-4 text-white form-control">
          <h2 class="mb-3 mt-4 text-center border-5 text-white">Booking Information</h2>
          <input type="hidden" name="idmoa" value="<?= $id ?>">
          <div class="mb-3 mt-3 row text-center">
              <div class="col text-white">
                  Check in : <br> 
                  <input type="date" name="checkin" required class="rounded-3 border-light form-control" style="width: 150px;margin: 0px auto" value="<?= $data['checkin'] ?>">
              </div>
              <div class="col text-white">
                  Check out : <br> 
                  <input type="date" name="checkout" required class="rounded-3 border-light form-control" style="width: 150px;margin: 0px auto" value="<?= $data['checkout'] ?>">   
              </div>
              <div class="col text-white">
                  Jumlah Kamar : <br>
                  <input type="number" name="jumlah" required class="rounded-3 border-light form-control" style="width: 80px;margin: 0px auto" value="<?= $data['jumlah'] ?>">   
              </div>
          </div>
            <div class="mb-3 mt-3 text-center text-white">
              Name Pemesan: <br>
              <input class="rounded-3 border-light form-control" type="text" name="namapemesan" placeholder="insert nama pemesan" style="width: 300px;margin: 0px auto" value="<?= $data['namapemesan'] ?>" required>
            </div>
            <div class="mb-3 mt-3 text-center text-white">
              Email : <br>
              <input class="rounded-3 border-light form-control" type="email" name="email" placeholder="insert email" style="width: 300px;margin: 0px auto" value="<?= $data['email'] ?>" required>
            </div>
            <div class="mb-3 mt-3 text-center text-white">
              Nomor Telepon : <br>
              <input class="rounded-3 border-light form-control" type="text" name="nohp" placeholder="insert your active phone number" style="width: 300px;margin: 0px auto" value="<?= $data['nohp'] ?>" required>
            </div>
            <div class="mb-3 mt-3 text-center text-white">
             Nama Tamu : <br>
              <input class="rounded-3 border-light form-control" type="text" name="namatamu" placeholder="insert nama tamu" style="width: 300px;margin: 0px auto" value="<?= $data['namatamu'] ?>" required>
            </div>
            <div class="mb-3 mt-3 text-center text-white">
              Tipe Room : <br>
              <select name="tipekamar" class="form-control rounded-3 border-light" style="width: 300px;margin: 0px auto;" required>
              <option value="superior" <?= $data['idmoa'] == 'superior' ? 'selected' : '' ?>>Superior</option>
              <option value="deluxe" <?= $data['idmoa'] == 'deluxe' ? 'selected' : '' ?>>Deluxe</option>
              <option value="twin" <?= $data['idmoa'] == 'twin' ? 'selected' : '' ?>>Twin Room</option>
              <option value="single" <?= $data['idmoa'] == 'single' ? 'selected' : '' ?>>Single Room</option>
              </select>
            </div>
            <div class="text-center mt-3"> 
              <button type="submit" onclick="myalert()" class="btn btn-success px-3 mb-5" style="width: 300px;">Update</button> <br>
              <script> 
                function myalert() { 
                    alert("yakin mau di update?"); } 
            </script>
              </div>
            </div>
          </form>
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