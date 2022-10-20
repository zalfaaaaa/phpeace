<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid" style="font-family: 'Poppins', sans-serif;">
            <h1 class="text-white">Moa<span class="text-danger">Castle</span></h1>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homea.php"> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="daroom.php">Room</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hotel.php">Hotel</a>
              </li>
            </ul>
            <ul class="d-flex navbar-nav">
              <li>
                <a href="log.php" onclick="myalert()" class="btn btn-danger">Logout</a>
              </li>
              <script> 
                function myalert() { 
                    alert("Affh iyh yakin mau logout?"); } 
                </script>
            </ul>
        </nav>
    
</body>
</html>