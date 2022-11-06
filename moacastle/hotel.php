<?php

session_start();

$db = mysqli_connect("localhost","root","","moac");

$result = mysqli_query($db, "SELECT * FROM moaoutel");
// var_dump($result);
if(!isset($_SESSION['username'])){
  header("location:login.php");
} 

if(isset($_GET['caper'])){
  $z = $_GET['caper'];
  $result =mysqli_query($db,"SELECT * FROM moaoutel ORDER BY `$z` DESC");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            <h1 class="text" style="color:#76BA99">Moa<span class="text" style="color:#D57E7E">Castle</span></h1>&emsp;
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
                <a href="logout.php" onclick="return confirm('affh iyh mau logout?')" class="btn btn-danger">Logout</a>
              </li>
            </ul>
        </nav>
        <h1 class="text-center mt-5">Hotel Facility</h1><br>
        <div class="container mt-3">
        <div class="row fw-bold">
          <form>
            <div class="row">  
                <div class="col-auto">
                <span class="text-black fs-4">Sort By :</span>
             </div>
             <div class="col-auto">
                  <select name="caper" class="form-control" style="width:200px" id="">
                    <option value="facilityname">Facility Name</option>
                    <option value="img">Imange</option>
                    <option value="location">Location</option>
                    <option value="qty">Quantity</option>
                  </select>
             </div>
                  <div class="col-auto">
                  <button class="btn btn text-white" style="background:#00a6bf;">Urutkan</button>
                </div>
                </div>
              </div>
          </form>
        </div>
      </div>
</div>
        <div class="container mt-5 table-responsive text-center">
        <div class="d-grip gap-2 col-12">
        <table class="table table-hover table-responsive mb-5">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Facility Name</th>
      <th scope="col">Img</th>
      <th scope="col">Location</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr>
    <th scope="row"><?= $i ?></th>
      <td><?=$row['facilityname'];?></td>
      <td><img src="<?= $row['img']; ?>" width="200" height="150" /></td>
      <td><?=$row['location'];?></td>
      <td><?=$row['qty'];?></td>
      <td>
        <a href="upf.php?idmou=<?=$row['idmou'];?>" class="btn btn-sm btn-primary ml-auto mb-3"><i class="fas fa-edit"></i></a>

        <a href="delt.php?idmou=<?=$row['idmou'];?>" class="btn btn-sm btn-danger ml-auto mb-3"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
  <?php $i++; ?>
  <?php endwhile ?>
</table>
<div class="container mb-3 px-3 text-end">
  <a href="insfo.php" class="btn btn-dark">Add Hotel Facility</a>
</div>
</body>
</html>