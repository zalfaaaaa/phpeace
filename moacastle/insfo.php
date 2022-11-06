<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Facility</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
</head>
<body>
<body style="font-family: 'Poppins', sans-serif;background:#B7C4CF">
<div style="padding: 50px;">
      <form action="ins.php"  method="POST">
      <div class="container mt-3">
      <div class="row" >
      <div class="col-md-6 offset-md-3">
      <div class="card my-6" style="background: #4B6587;">
        <form class="card-body cardbody-color p-lg-4 text-white form-control">
        <a href="hotel.php" type="button" style="float:left" class="btn btn-close px-3 mt-3" aria-label="Close"></a>
            <div class="mb-3 mt-3 px-3 text-center border-bottom">
                <h2 class="text-white"> Add Facility Hotel</h2>
            </div>
            <div class="mb-3 mt-2 px-3 text-white">
                Facility Name : 
                 <input type="text" name="facilityname" class="form-control" placeholder="Insert New Hotel Facility">
            </div>
            <div class="mb3 mt-3 px-3 text-white">
                 Image :
                <input type="file" name="img" class="form-control" placeholder="Insert Image">
            </div>
            <div class="mb-3 mt-3 px-3 text-white">
                Location : 
                <input type="text" name="location" class="form-control" placeholder="Insert New Location">
            </div>
            <div class="mb-3 mt-3 px-3 text-white">
                Quantity :
                <input type="number" name="qty" class="form-control" placeholder="Insert Qty">
            </div>
            <div class="mb-3 mt-3 px-3 text-end">
                <button class="btn btn-info text-white" type="submit">Add</button>
            </div>
            </form>
        </div>
    </div>
</form>
</div>
</body>
</html>