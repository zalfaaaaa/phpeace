<?php

session_start();

$db = mysqli_connect("localhost","root","","moac");

$result = mysqli_query($db, "SELECT * FROM moaorder");
// var_dump($result);

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
<body style="font-family: 'Poppins', sans-serif;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid" style="font-family: 'Poppins', sans-serif;">
        <h1 class="text-secondary">Moa<span class="text-danger">Castle</span></h1>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="homeu.php"> Home</a>
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
        <div class="container mt-5 table-responsive">
        <div class="d-grip gap-2 col-12">
    <table class="table table-light table-hover text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Check In</th>
      <th scope="col">check Out</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor Ponsel</th>
      <th scope="col">Tipe Kamar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?=$row['checkin'];?></td>
      <td><?=$row['checkout'];?></td>
      <td><?=$row['jumlah'];?></td>
      <td><?=$row['namapemesan'];?></td>
      <td><?=$row['email'];?></td>
      <td><?=$row['nohp'];?></td>
      <td><?=$row['tipeKamar'];?></td>
      <td>
        <a href="updatef.php?idOrder=<?=$row['idOrder'];?>" class="btn btn ml-auto mb-3" style="background:#00a611;color:white" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-print"></i></a>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Price detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div style="float: left;">
                
                </div>
              </div>
              <div class="modal-footer">
                <a href="order.html" type="button" class="btn btn-secondary rounded-3">Print</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
</body>
</html>