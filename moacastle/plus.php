<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
</head>
<body style="font-family: 'Poppins', sans-serif;">
  <div style="padding: 0px;">
  <div class="container mt-5">
    <div class="row">
    <div class="col-md-6 offset-md-3">
    <div class="card my-6" style="background: #9BA17B;">
        <form action="pluss" method="post" class="card-body my-6">
          <div class="mb-3 text-white">
            Facility Name :
            <input type="text" name="facilityname" class="form-control" style="width: 500px;">
          </div>
          <div class="mb-3 text-white">
            Image :
            <input type="file" name="img" class="form-control" style="width: 500px;">
          </div>
          <div class="mb-3 text-white">
            Location :
            <input type="text" name="location" class="form-control" style="width: 500px;">
          </div>
          <div class="mb-3 text-white">
            Quantity :
            <input type="number" name="qty" class="form-control" style="width: 500px;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>