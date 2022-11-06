<?php

$id = $_GET['idOrder'];

$db =new PDO("mysql:host=localhost;dbname=moac",'root','');
$query = $db->query("SELECT * FROM `moaorder` WHERE `idOrder`='$id'");

$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;background:#B7C4CF">
    </div>
    <div style="padding: 50px;">
      <form action="update.php"  method="POST">
      <div class="container mt-3">
      <div class="row" >
      <div class="col-md-6 offset-md-3">
      <div class="card my-6" style="background: #4B6587;">
          <form class="card-body cardbody-color p-lg-4 text-white form-control">
         <a href="homea.php" type="button" style="float:left" class="btn btn-close px-3 mt-3" aria-label="Close"></a>
          <h2 class="mb-3 mt-4 text-center border-5 text-white">Booking Information</h2>
          <input type="hidden" name="idOrder" value="<?= $id ?>">
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
              Tipe Room : <br>
              <select name="tipekamar" class="form-control rounded-3 border-light" style="width: 300px;margin: 0px auto;" required>
              <option value="superior" <?= $data['idOrder'] == 'superior' ? 'selected' : '' ?>>Superior</option>
              <option value="deluxe" <?= $data['idOrder'] == 'deluxe' ? 'selected' : '' ?>>Deluxe</option>
              <option value="twin" <?= $data['idOrder'] == 'twin' ? 'selected' : '' ?>>Twin Room</option>
              <option value="single" <?= $data['idOrder'] == 'single' ? 'selected' : '' ?>>Single Room</option>
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