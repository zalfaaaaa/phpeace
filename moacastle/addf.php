<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body  style="font-family: 'Poppins', sans-serif;background:#D3E4CD">
<div style="padding: 50px;">
      <form action="add.php"  method="POST">
      <div class="container mt-3">
      <div class="row" >
      <div class="card my-6 offset-md-3" style="width: 500px;background: #73A9AD;">
          <form class="card-body cardbody-color p-lg-4  form-control">
          <a href="daroom.php" type="button" style="float:left" class="btn btn-close mb-3 mt-3" aria-label="Close"></a>
          <span class="mb-3 mt-4 text-center border-5 fs-1 fw-bold">Adding Data</span>
          <input type="hidden" name="idOrder">
            <div class="mb-3 mt-3 text-center ">
              Type : <br>
              <input class="rounded-3 form-control" type="text" name="type" style="width: 400px;margin: 0px auto"  required>
            </div>
            <div class="mb-3 mt-3 text-center ">
              Bedding : <br>
              <input class="rounded-3 form-control" type="text" name="bedding" style="width: 400px;margin: 0px auto" required>
            </div>
            <div class="mb-3 mt-3 text-center ">
              Facility : <br>
              <input class="rounded-3 form-control" type="text" name="facility" style="width: 400px;margin: 0px auto" required>
            </div>
            <div class="mb-3 mt-3 text-center ">
             Quantity : <br>
              <input class="rounded-3 form-control" type="number" name="quantity" style="width: 400px;margin: 0px auto" required>
            </div>
            <div class="mb-3 mt-3 text-center ">
             Price : <br>
              <input class="rounded-3 form-control" type="text" name="price" style="width: 400px;margin: 0px auto" required>
            </div>
            <div class="text-center mt-3"> 
              <button type="submit" onclick="return confirm('real kah?')" class="btn btn text-white px-3 mb-5 fw-bold" style="width: 200px;background:#00a611">Add Data</button> <br>
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