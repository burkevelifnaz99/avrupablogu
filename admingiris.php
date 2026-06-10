<?php
session_start();
include "baglan.php";

$error = "";

if($_POST){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,
    "SELECT * FROM admin WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($result) > 0){

        $_SESSION['admin'] = $username;
        header("Location: admin.php");
        exit;

    } else {
        $error = "Hatalı kullanıcı adı veya şifre!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Admin Giriş</title>
<link rel="stylesheet" href="giris.css">
</head>

<body>
<div class="bg-videos">
    <video autoplay muted loop>
        <source src="ispanya.mp4" type="video/mp4">
    </video>

    <video autoplay muted loop>
        <source src="italya.mp4" type="video/mp4">
    </video>

    <video autoplay muted loop>
        <source src="fransa.mp4" type="video/mp4">
    </video>
</div>
<div class="login-box">

    <h2>🔐 Admin Giriş</h2>

    <?php if($error != "") echo "<div class='error'>$error</div>"; ?>

    <form method="POST">

        <input type="text" name="username" placeholder="Kullanıcı adı">
    
      <div class="password-box">
            <input type="password" name="password" id="password" placeholder="Şifre">

            <span class="eye" onclick="togglePassword()">👁</span>
        </div>
        <button type="submit">Giriş Yap</button>

    </form>

</div>
<script src="göz.js"></script>
</body>
</html>