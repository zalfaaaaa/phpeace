<?php

session_start();

$type = $_POST['type'];
$bed = $_POST['bedding'];
$fac = $_POST['facility'];
$qty = $_POST['quantity'];
$price = $_POST['price'];

$z = new PDO("mysql:host=localhost;dbname=moac",'root','');
$query = $z->query("INSERT INTO `moaroom` VALUES('','$type','$bed','$fac','$qty','$price')");

header("location:daroom.php");