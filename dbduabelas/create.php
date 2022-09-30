<?php

$nis=$_POST['nis'];
$nama=htmlentities(trim($_POST['nama']));
$kelas=$_POST['kelas'];
$pesan_error = "";

if(empty($nama)){
  $pesan_error .= "Data tidak boleh kosong";
}

if($pesan_error == ""){
$a = new PDO('mysql:host=localhost;dbname=nicole','root','');
$query = $a->query("INSERT INTO `siswa` VALUES ('$nis','$nama','$kelas')");

 if($query){
    header('location:crud.php');
 }
} else{
   header("location:createfo.php?error=$pesan_error");
 }

