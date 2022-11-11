<?php

$idm = $_GET['idmou'];

$db =new PDO("mysql:host=localhost;dbname=moac",'root','');
$query = $db->query("SELECT * FROM `moaoutel` WHERE `idmou`='$idm'");

$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
  <title>Update</title>
</head>
<body style="font-family: 'Poppins', sans-serif;background: #B7C4CF;">
<div style="padding: 50px;"> 
  <form action="up.php"  method="POST">
    <div class="container mt-3">
      <div class="row" >
      <div class="col-md-6 offset-md-3">
        <div class="card my-6" style="background: #6780a1;">
          <form class="card-body cardbody-color p-lg-4 text-white form-control">
            <a href="hotel.php" type="button" style="float:left" class="btn btn-close mb-3 mt-3 px-3" aria-label="Close"></a>
            <h1 class="mt-3 mb-3 text-center">Update Facility</h1>
            <span class="border-bottom"></span>
            <input type="hidden" name="idmou" value="<?= $idm ?>">
            <div class="mb-3 mt-3 px-3">
              Facility Name : <br>
              <input type="text" name="facilityname" class="form-control" value="<?= $data['facilityname']?>">
            </div>
            <div class="mb-3 mt-3 px-3">
              Image : <br>
              <input type="file" name="img" class="form-control" value="<?= $data['img']?>">
            </div>
            <div class="mb-3 mt-3 px-3">
              Location : <br>
              <input type="text" name="location" class="form-control" value="<?= $data['location']?>">
            </div>
            <div class="mb-3 mt-3 px-3">
              Quantity : <br>
              <input type="text" name="qty" class="form-control" value="<?= $data['qty']?>">
            </div>
            <div class="mb-3 mt-3 px-3">
              <button class="btn btn-success">Update</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </form>
</div>
</body>
</html>