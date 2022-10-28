<?php

$ci=$_POST['checkin'];
$co=$_POST['checkout'];
$jumar=$_POST['jumlah'];
$nape=$_POST['namapemesan'];
$email=$_POST['email'];
$ntlp=$_POST['nohp'];
$timar=$_POST['tipekamar'];

$k = new PDO('mysql:host=localhost;dbname=moac','root','');
$query = $k->query("INSERT INTO moaorder VALUES ('','$ci','$co', '$jumar','$nape','$email','$ntlp', '$timar');");

if($query){
    header("location:homeu.php");
}