<?php

$id=$_GET['idOrder'];

$d = new PDO('mysql:host=localhost;dbname=moac','root',''); 
$query = $d->query("DELETE FROM `moaorder` WHERE `idOrder`='$id' ");

if($query){
    header('location:homea.php');}