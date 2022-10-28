<?php

$id = $_GET['idroom'];

$db =new PDO("mysql:host=localhost;dbname=moac",'root','');
$query = $db->query("SELECT * FROM `moaroom` WHERE `idroom`='$id'");

$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <title>Update</title>
  <form action="up.php" method="post">
  <div class="container mt-lg-5 col-9 rounded-3" style="background:#d1d1d1;">
  <a href="daroom.php" type="button" style="float:left" class="btn btn-close mt-3" aria-label="Close"></a>
    <div class="row">
    <form class="card-body p-lg-4 text-dark form-control rounded-3">
    <div class="card-body">
      <h2 class="text-center">Update Data Room</h2>
      <input type="hidden" name="idroom" value="<?= $id ?>">
      <div class="mb-3 mt-3 text-center" style="width: 300px;margin: 0px auto" >
        <span class="fw-bold">Room Type :</span><br>
        <input type="text" class="form-control mt-1 rounded-3" name="type" value="<?= $data['type'];?>">
      </div>
      <div class="mb-3 mt-3 text-center" style="width: 300px;margin: 0px auto" >
        <span class="fw-bold">Bedding</span><br>
        <input type="text" class="form-control mt-1 rounded-3" name="bedding" value="<?= $data['bedding'];?>">
      </div>
      <div class="mb-3 mt-3 text-center" style="width: 300px;margin: 0px auto" >
        <span class="fw-bold">Facility :</span><br>
        <input type="text" class="form-control mt-1 rounded-3" name="facility" value="<?= $data['facility'];?>">
      </div>
      <div class="mb-3 mt-3 text-center" style="width: 300px;margin: 0px auto" >
        <span class="fw-bold">Quantity :</span><br>
        <input type="text" class="form-control mt-1 rounded-3" name="quantity" value="<?= $data['quantity'];?>">
      </div>
      <div class="mb-3 mt-3 text-center" style="width: 300px;margin: 0px auto" >
        <span class="fw-bold">Price :</span><br>
        <input type="text" class="form-control mt-1 rounded-3" name="price" value="<?= $data['price'];?>">
      </div>
      <div class="text-center mt-3"> 
        <button type="submit" onclick="return confirm('affh iyh mau update?')" class="btn btn-success px-3 mb-5" style="width: 200px;">Update</button>
      </div>
      </form>
    </div>
  </div>
</form>
</head>
<body>
  
</body>
</html>