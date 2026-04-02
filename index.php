<?php
include "baglan.php";

$mesajGonderildi = false;


if(isset($_POST['gonder'])){
    $ad = $_POST['ad'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];

    $sql = "INSERT INTO iletisim (ad, email, mesaj) VALUES ('$ad','$email','$mesaj')";
    if(mysqli_query($conn, $sql)){
        $mesajGonderildi = true;
    }
}
?>
 
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gezi Blogu</title>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
</head>

<body>

<header class="navbar">
  <ul>
    <li><a href="#hosgeldiniz">Ana Sayfa</a></li>
    <li><a href="#ispanya">İspanya</a></li>
    <li><a href="#fransa">Fransa</a></li>
    <li><a href="#italya">İtalya</a></li>
    <li><a href="#hakkimizda">Hakkımızda</a></li> 
    <li><a href="#iletisim">İletişim</a></li>
  </ul>
</header>


<section class="section" id="hosgeldiniz">
  <h1>Hoşgeldiniz!</h1>
  <p>Avrupa'nın en güzel ülkelerini keşfetmeye hazır mısınız?</p>
</section>


<section class="section" id="ispanya">
  <video autoplay muted loop class="arka-plan-video">
    <source src="ispanya.mp4" type="video/mp4">
  </video>
  <div class="country-card">
    <h3>İspanya</h3>
    <p>Renkli kültür ve tarihi mekanları keşfedin.</p>
    <a href="ispanya.html"><button>Keşfet</button></a>
  </div>
</div>
</section>

<section class="section" id="fransa">
  <video autoplay muted loop class="arka-plan-video">
    <source src="fransa.mp4" type="video/mp4">
  </video>
  <div class="country-card">
    <h3>Fransa</h3>
    <p>Sanat ve romantizmin başkenti.</p>
    <a href="fransa.html"><button>Keşfet</button></a>
  </div>
</section>


<section class="section" id="italya">
  <video autoplay muted loop class="arka-plan-video">
    <source src="italya.mp4" type="video/mp4">
  </video>
  <div class="country-card">
    <h3>İtalya</h3>
    <p>Tarih, mimari ve lezzet durakları.</p>
    <a href="italya.html"><button>Keşfet</button></a>
  </div>
</section>

<section class="section" id="hakkimizda">
  <h2>Hakkımızda</h2>
  <p>Bu blog Avrupa'daki güzel destinasyonları keşfetmeniz için hazırlandı.</p>
</section>


<section class="section" id="iletisim">
    <div class="overlay">

        <?php if($mesajGonderildi): ?>
            <div class="success-message">
                <h3>🎉 Mesajınız gönderildi!</h3>
                <p>En kısa sürede size dönüş yapacağız.</p>
            </div>
        <?php else: ?>

            <h2>İletişim</h2>
            <form method="POST" >
                <input type="text" name="ad" placeholder="Adınız Soyadınız" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="mesaj" placeholder="Mesajınız" required></textarea>
                <button type="submit" name="gonder">Gönder</button>
            </form>

        <?php endif; ?>

    </div>
</section>

</body>
</html>