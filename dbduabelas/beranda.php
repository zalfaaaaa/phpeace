<?php 

session_start();

if(!isset($_SESSION['username'])){
    header("location:formse.php");
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>B E R A N D A <img src="katy.jfif" class="text-center" width="50px"></h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="crud.php">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link text-dark fw-bold" href="log.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <img src="pdip.png" class="my-5" width="350px">
          </div>
    </div>
</body>
</html>