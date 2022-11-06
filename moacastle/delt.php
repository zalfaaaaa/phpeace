<?php

$idm=$_GET['idmou'];

$d = new PDO('mysql:host=localhost;dbname=moac','root',''); 
$query = $d->query("DELETE FROM `moaoutel` WHERE `idmou`='$idm' ");

if($query){
    header('location:hotel.php');}