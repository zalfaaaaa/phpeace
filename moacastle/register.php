<!DOCTYPE html>
<head>
    <title>MoaCastle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;background: #B7C4CF;">
    <div style="padding: 50px;">
        <form action="rein.php"  method="POST">
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6" style="background: #6780a1;">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center text-white" style="font-family: 'Yeseva One', cursive;">R E G I S T E R</h2>
              <div class="mb-3 mt-3 text-center text-white">
                Name : <br>
                <input class="rounded-3 border-light" type="text" name="nama" placeholder="insert your name" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Email : <br>
                <input class="rounded-3 border-light" type="email" name="email" placeholder="insert your email" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Username : <br>
                <input class="rounded-3 border-light" type="text" name="username" placeholder="username" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Nomor Telepon : <br>
                <input class="rounded-3 border-light" type="text" name="notelp" placeholder="insert your phone number" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Password : <br>
                <input class="rounded-3 border-light" type="password" name="password" placeholder="insert you password" style="width: 300px;"required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Role : <br>
                <select name="role" class="form-control" rounded-3 border-light style="width: 300px;margin: 0px auto;" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="cashier">Cashier</option>
                </select>
              </div>
              <div class="text-center text-white mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Register</button> <br>
                <p><i>Already have account? click <a href="login.php" class="text-danger">Login</a></i></p>
                </div>
              </div>
            </form>
        </div>
</div>
</body>
</html>