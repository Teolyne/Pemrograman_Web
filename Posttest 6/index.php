<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from detail_hero");

$detail_hero = [];

while ($row = mysqli_fetch_assoc($result)) {
    $detail_hero[] = $row;
}

date_default_timezone_set('Asia/Makassar');
$date = date('d M Y H:i:s');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tierlist Karakter Game Guardian Tales</title>
</head>

<body>
    <div class="content">
        <nav class="fContainer">
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
        </nav>
        <div class="header">
            <h1>Content Arena, Colossseum, dan Raid</h1>
        </div>
        <?php
            $i = 1;
            foreach ($detail_hero as $dth): ?>
                <div class="hero">
                    <div class="ket-hero">
                        <div class="logo"> <img src="img/<?= $dth['gambar'] ?>" alt=""></div>
                        <div class="nama-hero"><?= $dth["nama"] ?></div>
                        <ul class="rarity">
                            <li>
                                <?= $dth["raritas"] ?>
                            </li>
                        </ul>
                    </div>
                    <div class="rating">
                        <div class="arena">Arena : <?= $dth["arena"] ?></div>
                        <div class="colo">Colosseum : <?= $dth["colo"] ?></div>
                        <div class="raid">Raid : <?= $dth["raid"] ?></div>
                    </div>
                    <div class="edithapus">
                        <div class="edit">
                            <a href="edit.php?id=<?= $dth["id"]; ?>">Edit</a>
                        </div>
                        <div class="hapus">
                            <a href="hapus.php?id=<?= $dth["id"]; ?>">Hapus</a>
                        </div>
                    </div>
                    
                </div>
        <?php
            $i++; 
            endforeach; 
        ?>
    </div>
    <footer>
        <div class="footer">
            <div class="fatas">
                2023 All Rights Reserved by Teo
            </div>
            <div class="fbawah">
                Guardian Tales is copyrighted by Kakao Games Corp. This wiki is in no way affiliated with Kakao Games
                Corp.
            </div>
        </div>
    </footer>
    <div class="popup" id="popup">
        <div class="popup-content">
            <span class="close-btn" id="close-btn">&times;</span>
            <h2>Selamat Datang di Website Tierlist Guardian Tales</h2>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>