<?php 

session_start();

session_destroy();

header("location:login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
    <title>Logout</title>
</head>
<body>
    <!-- <div class="container mt-5 text-center">
        <h1>Anda Sudah Logout!</h1>
        <a href="login.php" class="mt-4 btn btn-danger">Kembali</a> -->
    </div>
</body>
</html>