<?php
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $rarity = isset($_POST['raritas']) ? $_POST['raritas'] : '';
    $arena = isset($_POST['arena']) ? $_POST['arena'] : '';
    $colo = isset($_POST['colo']) ? $_POST['colo'] : '';
    $raid = isset($_POST['raid']) ? $_POST['raid'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tampilkan.css"  >
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
                <li><a href="tambah-hero.php" class="active">Tambah Hero</a></li>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="about-me.html">About Me</a></li>
                <button class="theme-toggle" onclick="toggleTheme()">Light Mode</button>
            </ul>
        </nav>
    </div>
<section class="tampil">
    <div class="konten">
        <div class="isi">
                <p class="nama-hero">
                    <?=
                    $nama;
                    ?>
                </p>
                <div class="foto"> 
                    <img src="lp.gif" alt="">
                </div>
                <div class="bintang">
                    <?=
                    $rarity;
                    ?>
                </div>
                <?php
                if (isset($_POST["nama"])){ ?>
                    <div class="ket">
                    <p>Arena : <?=$arena?></p>
                    <p>Colloseum : <?=$colo?></p>
                    <p>Raid : <?=$raid?></p>   
                    </div>
                <?php } 
                else {?>
                    <p>Data Hero Masih Kosong</p>
                <?php } ?> 
                
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
    <script type="text/javascript" src="tampilkan.js"></script>
</body>
</html>


