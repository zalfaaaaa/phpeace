<?php

$idr = $_GET['idroom'];

$D = new PDO("mysql:host=localhost;dbname=moac;",'root','');
$query = $D->query("SELECT * FROM `moaroom` WHERE `idroom`='$idr'");

$data=$query->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;">
<div style="padding: 50px;">
      <form action="upday.php"  method="POST">
      <div class="container mt-3">
      <div class="row" >
      <div class="col-md-6 offset-md-3">
      <div class="card my-6 bg-secondary">
        <form class="card-body cardbody-color p-lg-4 text-white form-control">
        <a href="daroom.php" type="button" style="float:left" class="btn btn-close px-3 mt-3" aria-label="Close"></a>
            <div class="mb-3 mt-3 px-3 text-center border-bottom">
                <h2 class="text-white"> Update Room</h2>
            </div>
            <input type="hidden" name="idroom" value="<?=$idr;?>">
            <div class="mb-3 mt-2 px-3 text-white">
                Room Type : 
                 <input type="text" name="type" class="form-control" value="<?=$data['type'];?>">
            </div>
            <div class="mb3 mt-3 px-3 text-white">
                 Bedding :
                <input type="text" name="bedding" class="form-control" value="<?=$data['bedding'];?>">
            </div>
            <div class="mb-3 mt-3 px-3 text-white">
                Facility : 
                <input type="text" name="facility" class="form-control" value="<?=$data['facility']?>">
            </div>
            <div class="mb-3 mt-3 px-3 text-white">
                Quantity :
                <input type="number" name="quantity" class="form-control" value="<?=['quantity'];?>">
            </div>
            <div class="mb-3 mt-3 px-3 text-white">
                Price :
                <input type="text" name="price" class="form-control" value="<?=$data['price'];?>">
            </div>
            <div class="mb-3 mt-3 px-3 text-end">
                <button class="btn btn-info text-white" type="submit">Update</button>
            </div>
            </form>
        </div>
    </div>
</form>
</div>
</body>
</html>