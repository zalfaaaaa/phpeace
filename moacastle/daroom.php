<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}

$db = mysqli_connect("localhost","root","","moac");

$result = mysqli_query($db, "SELECT * FROM moaroom");
// var_dump($result);
// if(isset($_GET['caper'])){
//   $z = $_GET['caper'];
//   $result =mysqli_query($db,"SELECT * FROM moaroom ORDER BY `$z` DESC");
// }

if(isset($_GET['search'])){
  $search = $_GET['search'];
  $result = $db->query("SELECT * FROM moaroom WHERE bedding LIKE '%$search%'");
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
        <div class="container mt-5 text-center">
          <h1>Room Information<img src="wkuromi.png" class="img-fluid" width="100px" alt=""></h1>
        </div>
    <!-- <div class="container mt-4">
        <div class="row fw-bold">
          <form>
            <div class="row">  
                <div class="col-auto">
                <span class="text-black fs-4">Sort By :</span>
             </div>
             <div class="col-auto">
                  <select name="caper" class="form-control" style="width:200px" id="">
                    <option value="type">Type</option>
                    <option value="bedding">Bedding</option>
                    <option value="facility">Facility</option>
                    <option value="quantity">Quantity</option>
                    <option value="price">Price</option>
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
</div> -->
        <div class="container mt-4">
            <form action="">
              <div class="row">
                <div class="col-auto">
                  <input type="text" name="search" placeholder="search" class="form-control">
                </div>
                <div class="col-auto">
                  <button type="submit"class="btn btn text-white" style="background:#00a6bf;">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="container mt-5 table-responsive text-center">
        <div class="d-grip gap-2 col-12">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Type</th>
      <th scope="col">Bedding</th>
      <th scope="col">Facility</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?=$row['type'];?></td>
      <td><?=$row['bedding'];?></td>
      <td><?=$row['facility'];?></td>
      <td><?=$row['quantity'];?></td>
      <td><?=$row['price'];?></td>
      <td>
        <a href="updayf.php?idroom=<?=$row['idroom'];?>" class="btn btn-sm btn-primary ml-auto mb-3"><i class="fas fa-edit"></i></a>

        <a href="del.php?idroom=<?=$row['idroom'];?>" class="btn btn-sm btn-danger ml-auto mb-3"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
  <?php $i++; ?>
  <?php endwhile ?>
</table>
<div class="text-end">
  <a href="addf.php" class="btn btn text-white mt-3 mb-3" style="background: #0fb4bf;">Add Data</a>
</div>
</body>
</html>