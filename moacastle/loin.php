<?php

session_start();

$usn = $_POST['username'];
$pass = $_POST['password'];

$k = new PDO('mysql:host=localhost;dbname=moac','root','');
$query = $k->query("SELECT * FROM enlogi WHERE username='$usn' AND password='$pass'");
$data = $query->fetch();

if($query->rowCount()> 0){
    if($data['role']=="admin"){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['role'] = "admin";
        header('location:homea.php');
    }else if($data['role']=="user"){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['role'] = "user";
        header('location:homeu.php');
    }if($data['role']=="cashier"){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['role'] = "cashier";
        header('location:homec.php');
    }
} 
else {
    header('location:login.php?error=$pesan_error');
}