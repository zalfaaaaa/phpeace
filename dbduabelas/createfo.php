<!DOCTYPE html>
<html lang="en">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <p><?= $_GET['error'] ?></p>
            </div>
        <?php endif ?>
    <form action="create.php" method="POST" class="container mt-5">
        
        <h1>ADD USER</h1>
        <div class="mb-3">
            <label class="form-label">Nis : </label>
            <input type="text" class="form-control" name="nis" required>
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Nama : </label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Kelas : </label>
            <select name="kelas" class="form-control" id="" required>
                <option value="12 RPL">12 RPL</option>
                <option value="12 TKJ">12 TKJ</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success btn-block" value="simpan">
    </form>
</div>
</body>
</html>