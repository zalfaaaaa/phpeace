<?php

$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];

$k = new PDO('mysql:host=localhost;dbname=nicole','root','');
$query = $k->query("UPDATE `siswa` SET `nama`='$nama', `kelas`='$kelas' WHERE `nis`='$nis'");

if($query){
    header('location:crud.php');
}