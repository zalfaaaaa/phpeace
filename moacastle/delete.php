<?php

$id=$_GET['idmoa'];

$d = new PDO('mysql:host=localhost;dbname=moac','root',''); 
$query = $d->query("DELETE FROM `moaorder` WHERE `idmoa`='$id' ");

if($query){
    header('location:homea.php');}