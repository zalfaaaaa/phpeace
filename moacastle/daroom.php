<?php

$db = mysqli_connect("localhost","root","","moac");

$result = mysqli_query($db, "SELECT * FROM moaroom");
// var_dump($result);
if(isset($_GET['daroom'])){
  $u = $_GET['daroom'];
  $result = mysqli_query($db, "SELECT * FROM moaroom ORDER BY '$u' ASC");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <option value="harga">Harga</option>
        <option value="jumlah">Jumlah</option>
        </select>
        <!-- <input class="form-control me-2" style="width:200px" type="search" placeholder="Search" aria-label="Search"> -->
        <button class="btn btn-success" type="submit">Search</button>
      </form>
        <div class="container mt-5 table-responsive text-center">
        <div class="d-grip gap-2 col-12">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Room Tipe</th>
      <th scope="col">Bedding</th>
      <th scope="col">Fasilitas</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?=$row['tipekamar'];?></td>
      <td><?=$row['bedding'];?></td>
      <td><?=$row['fasilitas'];?></td>
      <td><?=$row['harga'];?></td>
      <td><?=$row['jumlah'];?></td>
      <td>
        <a href="updatefo.php?idmoro=<?=$row['idmoro'];?>" class="btn btn-sm btn-primary ml-auto mb-3">Update</a>

        <a href="deletes.php?idmoro=<?=$row['idmoro'];?>" class="btn btn-sm btn-danger ml-auto mb-3">Delete</a>
      </td>
    </tr>
  </tbody>
  <?php $i++; ?>
  <?php endwhile ?>
</table>
</body>
</html>
