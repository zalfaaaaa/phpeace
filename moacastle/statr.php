<?php

$id = $_GET['idOrder'];

$k = new PDO('mysql:host=localhost;dbname=moac','root','');
$query = $k->query("UPDATE `moaorder` SET `status`='refund' WHERE `idOrder`=$id");

if($query){
    header('location:homec.php');
}

