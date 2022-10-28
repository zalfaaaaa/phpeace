<?php

session_start();

$id=$_POST['idroom']; 
$type=$_POST['type'];	
$bed=$_POST['bedding'];	
$fac=$_POST['facility'];
$qty=$_POST['quantity'];
$price=$_POST['price'];

$r = new PDO("mysql:host=localhost;dbname=moac",'root','');
$query = $r->query("UPDATE `moaroom` SET `type`='$type',`bedding`='$bed',`facility`='$fac',`quantity`='$qty',`price`='$price' WHERE `idroom`='$id'");

if($query){
    header("location:daroom.php");
}
?>