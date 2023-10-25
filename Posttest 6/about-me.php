<?php
date_default_timezone_set('Asia/Makassar');
$date = date('d M Y H:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-about-me.css"  >
    <title>Tierlist Karakter Game Guardian Tales</title>
</head>
<body>
    <div class="fContainer">
        <nav class="wrapper">
            <div class="brand">
                <div class="kiri">tierlist</div>
                <div class="tengah">karakter</div>
                <div class="kanan"><img src="guardian-tales.jpg" alt=""></div>
            </div>
            <ul class="navigation">
                <li class="waktu"><?= $date ?></li>
                <li><a href="tambah-hero.php" class="active">Tambah Hero</a></li>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about-me.php" class="abot">About Me</a></li>
                <button class="theme-toggle" onclick="toggleTheme()">Light Mode</button>
            </ul>
        </nav>
    </div>
<section class="aboat">
    <div class="biodata">
        <div class="img">
            <img src="gweh.jpg" alt="">
        </div>
        <div id="nama">
            Ardhifa Firdaus
        </div>
        <div class="nim">
            2209106088
        </div>
        <div class="alias">
            Usually Known As <span class="teo">Teo</span>
        </div>
    </div>
</section>
<div class="gerak">
Teo
</div>
<footer>
    <div class="footer">
        <div class="fatas"> 
            2023 All Rights Reserved by Teo
        </div>
        <div class="fbawah">
            Guardian Tales is copyrighted by Kakao Games Corp. This wiki is in no way affiliated with Kakao Games Corp.
        </div>
    </div>
    </footer>
    <script type="text/javascript" src="script-about-me.js"></script>
</body>
</html>

