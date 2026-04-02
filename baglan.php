<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "avrupablogu"; 

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn){
    die("Bağlantı hatası: " . mysqli_connect_error());
}
?>