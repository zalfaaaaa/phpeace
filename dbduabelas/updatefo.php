<?php

$nis = $_GET['nis'];

$db =new PDO("mysql:host=localhost;dbname=nicole",'root','');
$query = $db->query("SELECT * FROM `siswa` WHERE `nis`='$nis'");

$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Data</title>
</head>
<body>
    <form action="update.php" method="POST" class="container mt-5">
        <h1>U P D A T E</h1>
    <input type="hidden" name="nis" value="<?= $nis ?>">  
        <div>
            <label class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <br>
      
        <div>
            <label class="form-label">Kelas</label>
            <select class="form-control" name="kelas" nis="">
                <option value="12 RPL" <?= $data['nis'] == '12 RPL' ? 'selected' : '' ?>>12 RPL</option>
                <option value="12 TKJ" <?= $data['nis'] == '12 TKJ' ? 'selected' : '' ?>>12 TKJ</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-warning" value="simpan">
    </form>
</body>
</html>