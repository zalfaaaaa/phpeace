<?php

$id=$_POST['idOrder'];
$ci=$_POST['checkin'];
$co=$_POST['checkout'];
$jumar=$_POST['jumlah'];
$nape=$_POST['namapemesan'];
$email=$_POST['email'];
$ntlp=$_POST['nohp'];
$timar=$_POST['tipekamar'];

$u = new PDO('mysql:host=localhost;dbname=moac','root','');
$query = $u->query("UPDATE `moaorder` SET `checkin`='$ci',`checkout`='$co',`jumlah`='$jumar',`namapemesan`='$nape',`email`='$email',`nohp`='$ntlp',`tipeKamar`='$timar' WHERE `idOrder`='$id'");

if($query){
    header('location:homea.php');
}

