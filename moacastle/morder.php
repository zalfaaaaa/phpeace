<?php

$ci = $_POST['checkin'];
$co = $_POST['checkout'];
$jumlah = $_POST['jumlah'];
$namsan = $_POST['namapemesan'];
$email = $_POST['email'];
$tlp = $_POST['nohp'];
$tipka = $_POST['tipekamar'];

$k = new PDO('mysql:host=localhost;dbname=moac','root','');
$query = $k->query("INSERT INTO `moaorder` VALUES ('','$ci','$co','$jumlah','$namsan','$email','$tlp','$tipka','waiting')");

if($query){
    header('location:homeu.php');
}