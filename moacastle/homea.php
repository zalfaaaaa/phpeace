<?php

$db = mysqli_connect("localhost","root","","moac");

$result = mysqli_query($db, "SELECT * FROM moaorder");
// var_dump($result);

if(isset($_GET['homea'])){
  $u = $_GET['homea'];
  $result = mysqli_query($db, "SELECT * FROM moaorder ORDER BY '$u' ASC");
}

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
<body style="font-family: 'Poppins', sans-serif;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid" style="font-family: 'Poppins', sans-serif;">
            <h1 class="text-white">Moa<span class="text-danger">Castle</span></h1>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homea.php"> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="daroom.php">Room</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hotel.php">Hotel</a>
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
    <div class="container mt-5 ">
      <form class="d-flex col-auto">
        <span class="text-black fs-4">Sort By :</span> &nbsp;
        <select name="homea.php" class="form-control me-2" style="width:200px;" id="">
        <option value=""></option>
        <option value="checkin">Check In</option>
        <option value="checkout">Check Out</option>
        <option value="namapemesan">Nama Pemesan</option>
        <option value="namatamu">Nama Tamu</option>
        <option value="tipekamar">Tipe Kamar</option>
        </select>
        <!-- <input class="form-control me-2" style="width:200px" type="search" placeholder="Search" aria-label="Search"> -->
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
        <div class="container mt-5 table-responsive text-center">
        <div class="d-grip gap-2 col-12">
    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Check In</th>
      <th scope="col">check Out</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Email</th>
      <th scope="col">Nama Tamu</th>
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
      <td><?=$row['namatamu'];?></td>
      <td><?=$row['tipekamar'];?></td>
      <td>
        <a href="updatef.php?idmoa=<?=$row['idmoa'];?>" class="btn btn-sm btn-light ml-auto mb-3">Update</a>

        <a href="delete.php?idmoa=<?=$row['idmoa'];?>" class="btn btn-sm btn-danger ml-auto mb-3">Delete</a>
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