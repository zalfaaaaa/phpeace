<?php

session_start();

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 text-center">
    <h1>Anda Telah Logout</h1>
    <h3>Mau Kembali Ke Masa Lalu?</h3>
    <a class="btn btn-danger" href="formse.php">Kembali saja</a>
    </div>
    <div class="text-center">
        <img src="anjing.jfif" class="my-5" width="300px" alt="">
    </div>
</body>
</html>