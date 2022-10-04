<?php

$db = mysqli_connect("localhost","root","","seza");

$result = mysqli_query($db, "SELECT * FROM ammar");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    <div class="container mt-5">
        <h1>Sangkara</h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link text-dark fw-bold" href="kamar.html">Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="fasilitas.html">Fasilitas</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container mt-5">
        <table class="table table-dark table-hover table-borderless">
            <thead>
              <tr style="text-align:center;">
                <th scope="col">No</th>
                <th scope="col">Tipe Kamar</th>
                <th scope="col">Jumlah Kamar</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <?php $i=1;?>
            <?php while($row = mysqli_fetch_assoc($result)):?>
            <tbody>
              <tr class="text-center">
                <th scope="row"><?= $i ?></th>
                <td><?=$row['tipeKamar'];?></td>
                <td><?=$row['jumlahKamar'];?></td>
              <td>
                <a href="updatef.php?idkamara=<?=$row['idkamara'];?>" class="btn btn-sm btn-light ml-auto">Update</a>

                <a href="delete.php?idkamara=<?=$row['idkamara'];?>" class="btn btn-sm btn-danger ml-auto">Delete</a>
              </td>
              </tr>
            </tbody>
            <?php $i++; ?>
            <?php endwhile ?>
            </table>
        </div>
        <div class="card-footer bg-light mt-5">
            <div class="container mt-2">
            About <br> Privacy Policy <br> Disclaimer <br> Contact <br>
          </div>
          <div class="text-center p-3 mt-4" style="background-color: rgba(85, 83, 83, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://twitter.com/home">drunkedazse</a>
          </div>
        </div>
    </div>
</body>
</html>