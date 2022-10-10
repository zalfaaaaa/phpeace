<?php

session_start(); 

$name = $_POST['nama'];
$email = $_POST['email'];
$usn = $_POST['username'];
$ntlp = $_POST['notelp'];
$pass = $_POST['password'];
$role =$_POST['role'];

$k = new PDO('mysql:host=localhost;dbname=moac','root','');
$query = $k->query("INSERT INTO enlogi VALUES ('','$name','$email','$usn','$ntlp','$pass','$role');");

if($query){
    header('location:login.html');
}