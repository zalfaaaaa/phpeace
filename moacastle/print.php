<?php

$id = $_GET['idOrder'];

$s = new PDO("mysql:host=localhost;dbname=moac",'root','');
$query = $s->query("SELECT * FROM `moaorder` WHERE `idOrder`='$id'");

$data=$query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;background:#B7C4CF">
<div style="padding: 50px;"> 
<a href="history.php" type="button" style="float:left" class="btn btn-close px-3 mt-3" aria-label="Close"></a>
  <form action="upd.php"  method="POST">
    <div class="container mt-3">
      <div class="row" >
      <div class="col-md-6 offset-md-3">
        <div class="card my-6 rounded-3" style="background: #4B6587;">
          <form class="card-body cardbody-color p-lg-4 text-white form-control">
            <div class="border-bottom mb-3 mt-3 px-3">
                <h1 class="text-center text-light" style="font-family: 'Cinzel', serif;">MoaCastle</h1>
                <div class="text-center text-white mb-3" style="font-size: 12px;">
                <span>Jl. Braga No.81, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat <br> Telp : 022 202 066 &nbsp; Email : moaenhypen@gmail.com</span>
              </div>
            </div>
            <div class="mb-2 px-3 text-white fs-6 mt-5" style="font-family: 'Lora', serif;text-align:center">
              Full Name : <?=$data['namapemesan'];?><br>
            </div>
            <div class="mb-2 px-3 text-white fs-6" style="font-family: 'Lora', serif;text-align:center">
              Check In Date : <?=$data['checkin'];?><br>
            </div>
            <div class="mb-2 px-3 text-white fs-6" style="font-family: 'Lora', serif;text-align:center">
              Check Out Date : <?=$data['checkout'];?><br>
            </div>
            <div class="mb-2 px-3 text-white fs-6" style="font-family: 'Lora', serif;text-align:center">
              Room Type : <?=$data['tipekamar'];?><br>
            </div>
            <div class="mb-5 px-3 text-white fs-6" style="font-family: 'Lora', serif;text-align:center">
              Quantity : <?=$data['jumlah'];?> 
            </div>
            <div class="mb-3 mt-3 px-3 text-end">
                <a href="history.php" class="btn btn-info text-light" onclick="window.print();"><i class="fas fa-print" style="color: white;"></i>&nbsp;Print</a>
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