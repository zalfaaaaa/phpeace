<?php

session_start();

if(isset($_SESSION['username'])){
  if ($_SESSION['role']=='admin'){
    header("location:homea.php");
  }
  if ($_SESSION['role']=='user'){
    header("location:homeu.php");
  }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MoaCastle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <div style="padding: 50px;">
    <br><br>
        <form action="loin.php"  method="POST">
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 ">
        <div class="card my-6" style="background: #434343;">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center text-white" style="font-family: 'Poppins', sans-serif;">L O G I N</h2>
              <div class="mb-3 mt-3 text-center text-white">
                Username : <br>
                <input class="rounded-3 border-light" type="text" name="username" placeholder="username" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Password : <br>
                <input class="rounded-3 border-light" type="password" name="password" placeholder="password" style="width: 300px;" required>
              </div>
              <div class="text-center text-white mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Login</button> <br>
                <p><i>don't have any account yet? click <a href="register.php" class="text-danger">Register</a></i></p>
                </div>
              </div>
          </form>
        </div>
      <div class="col-md-6 mt-5">
        <img src="m.jpg" class="img-fluid rounded mx-auto d-block" width="500px" alt="">
    </div>
</body>
</html>