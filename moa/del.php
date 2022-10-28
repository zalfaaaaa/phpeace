<?php

$id=$_GET['idroom'];

$d = new PDO('mysql:host=localhost;dbname=moac','root',''); 
$query = $d->query("DELETE FROM `moaroom` WHERE `idroom`='$id' ");

if($query){
    header('location:daroom.php');}