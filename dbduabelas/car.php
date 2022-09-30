<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class="container mt-5">
    <?php
        $h = new PDO('mysql:host=localhost;dbname=nicole','root','');
        $query = $h->query('SELECT * FROM siswa');
    ?>
        <h1>Hi!</h1><br>

        <a href="createfo.php" class="btn btn-dark mb-3">Add User</a>
        
        <ul class="list-group">
        
    <?php
        while($data=$query->fetch()):?>
        <li class="list-group-item d-flex justify-content-between">
        
        <a href="updatefo.php?nis=<?=$data['nis'];?>"><?= $data['nama'];?></a>

        <a href="delete.php?nis=<?=$data['nis'];?>" class="btn btn-sm btn-danger ml-auto">Delete</a>
    </li>
    <?php endwhile ?>
</ul>
</div>
</body>
</html>