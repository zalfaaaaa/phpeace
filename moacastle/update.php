<?php

$id=$_POST['idmoa'];
$ci=$_POST['checkin'];
$co=$_POST['checkout'];
$jumar=$_POST['jumlah'];
$nape=$_POST['namapemesan'];
$email=$_POST['email'];
$nata=$_POST['namatamu'];
$ntlp=$_POST['nohp'];
$timar=$_POST['tipekamar'];

$u = new PDO('mysql:host=localhost;dbname=moac','root','');
$query = $u->query("UPDATE `moaorder` SET `checkin`='$ci',`checkout`='$co',`jumlah`='$jumar',`namapemesan`='$nape',`email`='$email',`nohp`='$ntlp',`namatamu`='$nata',`tipeKamar`='$timar' WHERE `idmoa`='$id'");

if($query){
    header('location:homea.php');
}
