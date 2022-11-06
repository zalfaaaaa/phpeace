<?php

$id = $_POST['idmou'];
$fame = $_POST['facilityname'];
$img = $_POST['img'];
$loc = $_POST['location'];
$qty = $_POST['qty'];

$r = new PDO("mysql:host=localhost;dbname=moac",'root','');
$query = $r->query("UPDATE `moaoutel` SET `facilityname`='$fame',`img`='$img',`location`='$loc',`qty`='$qty' WHERE `idmou`='$id'");

if($query){
    header("location:hotel.php");
}
?>