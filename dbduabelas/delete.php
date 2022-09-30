<?php

$nis=$_GET['nis'];

$d = new PDO('mysql:host=localhost;dbname=nicole','root',''); 
$query = $d->query("DELETE FROM `siswa` WHERE `nis`='$nis' ");

if($query){
    header('location:crud.php');}