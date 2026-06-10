<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    
</body>
</html>
<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: admingiris.php");
    exit;
}
?>

<?php

include "baglan.php";

// Mesaj silme işlemi
if(isset($_GET['sil'])){
    $id = $_GET['sil'];
    mysqli_query($conn, "DELETE FROM iletisim WHERE id=$id");
}

// Başlık
echo "<h1>📝 Gelen Mesajlar</h1>";

// Mesajları çek
$result = mysqli_query($conn, "SELECT * FROM iletisim ORDER BY id DESC");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='mesaj-kart'>";
    echo "<h3>".$row['ad']."</h3>";
    echo "<p>".$row['mesaj']."</p>";
    echo "<small>".$row['email']." | ".$row['tarih']."</small>";
    echo "<br><a class='sil-btn' href='admin.php?sil=".$row['id']."' onclick='return confirm(\"Silinsin mi?\")'>Sil</a>";

    echo "</div>";
}
?>




