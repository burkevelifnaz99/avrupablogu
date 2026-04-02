<?php
// Database configuration with environment variable fallback
$host = getenv('DB_HOST') ?: "localhost";
$user = getenv('DB_USER') ?: "root";
$password = getenv('DB_PASSWORD') ?: "";
$db = getenv('DB_NAME') ?: "avrupablogu"; 

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn){
    die("Bağlantı hatası: " . mysqli_connect_error());
}

// Set UTF-8 encoding
mysqli_set_charset($conn, "utf8mb4");
?>