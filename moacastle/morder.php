<?php

$ci=$_POST['checkin'];
$co=$_POST['checkout'];
$nape=$_POST['namapemesan'];
$email=$_POST['email'];
$nata=$_POST['namatamu'];
$ntlp=$_POST['nohp'];
$timar=$_POST['tipekamar'];

$k = new PDO('mysql:host=localhost;dbname=moac','root','');
$query = $k->query("INSERT INTO moaorder VALUES ('','$ci','$co','$nape','$email','$ntlp','$nata','$timar');");

if($query){
    header("location:homeu.html");
}