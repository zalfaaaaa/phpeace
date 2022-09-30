<?php

$db = mysqli_connect("localhost","root","","nicole");

$result = mysqli_query($db, "SELECT * FROM siswa");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-grip gap-2 col-12">
          <a href="beranda.php" class="btn btn-secondary mb-3">Kembali</a>
          <a href="createfo.php" class="btn btn-primary mb-3">Add User</a>
          <img src="cat.jfif" width="55px" alt="">
    <table class="table table-dark table-hover table-borderless text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?=$row['nis'];?></td>
      <td><?=$row['nama'];?></td>
      <td><?=$row['kelas'];?></td>
      <td>
        <a href="updatefo.php?nis=<?=$row['nis'];?>" class="btn btn-sm btn-light ml-auto">Update</a>

        <a href="delete.php?nis=<?=$row['nis'];?>" class="btn btn-sm btn-danger ml-auto">Delete</a>
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