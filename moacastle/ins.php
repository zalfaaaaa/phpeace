<?php

$fame = $_POST['facilityname'];
$img = $_POST['img'];
$loc = $_POST['location'];
$qty = $_POST['qty'];

$K = new PDO("mysql:host=localhost;dbname=moac",'root','');
$query = $K->query("INSERT INTO `moaoutel` VALUES ('','$fame','$img','$loc','$qty')");

if($query){
    header("location:hotel.php");
}