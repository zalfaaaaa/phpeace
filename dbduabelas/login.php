<?php

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$k = new PDO("mysql:host=localhost;dbname=nicole",'root','');
$query = $k->query("SELECT * FROM login WHERE username='$username' AND password='$password'");
$data=$query->fetch();

if($query->rowCount() > 0 ){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    header("location:beranda.php");
} else{
    echo "Kamu belum login ngab";
    header("location:formse.php");
}