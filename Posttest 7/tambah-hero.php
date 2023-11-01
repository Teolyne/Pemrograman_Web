<?php
session_start();
require "koneksi.php";

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];
    $raritas = $_POST["raritas"];
    $arena = $_POST["arena"];
    $colo = $_POST["colo"];
    $raid = $_POST["raid"];
    $gambar = $_FILES['gambar']['name'];
    $explode = explode('.', $gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = date("Y-m-d")."$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/' . $gambar_baru)) {
        $result = mysqli_query($conn, "insert into detail_hero 
        (id, nama, raritas, arena, colo, raid, gambar) 
        values ('', '$nama', '$raritas', '$arena', '$colo', '$raid', '$gambar_baru')");

        if ($result) {
            echo "
                    <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'index.php';
                    </script>
                ";
        } else {
            echo "
                <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'tambah.php';
                </script>
            ";
        }
    }

}
date_default_timezone_set('Asia/Makassar');
$date = date('d M Y H:i:s');

if (!isset($_SESSION['login'])) 
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah-hero.css">
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
                <li><a href="logout.php" class="active">Log Out</a></li>
                <li class="waktu"><?= $date ?></li>
                <li><a href="tambah-hero.php" class="active">Tambah Hero</a></li>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about-me.php" class="abot">About Me</a></li>
                <button class="theme-toggle" onclick="toggleTheme()">Light Mode</button>
            </ul>
        </nav>
    </div>
    <section class="iyh">
        <div class="tambah">
            <div class="isi">
                <div class="atas">
                    <p>Tambah Hero</p>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="" class="left">Nama Hero : </label>
                    <input type="text" name="nama" required><br>
                    <label for="" class="left">Raritas : </label>
                    <div class="starwrapper">
                        <input type="radio" name="raritas" value="⭐" required>⭐
                        <input type="radio" name="raritas" value="⭐⭐" required>⭐⭐
                        <input type="radio" name="raritas" value="⭐⭐⭐" required>⭐⭐⭐<br>
                    </div>
                    <label for="" class="left">Rating Arena : </label>
                    <input type="number" name="arena" step="any" required><br>
                    <label for="" class="left">Rating Colloseum : </label>
                    <input type="number" name="colo" step="any" required><br>
                    <label for="" class="left">Rating Raid : </label>
                    <input type="number" name="raid" step="any" required><br>
                    <label for="" class="left">Gambar Hero : </label>
                    <input type="file" name="gambar" step="any" required><br>
                    <input type="submit" value="Tambah" name="tambah">
                </form>
            </div>
        </div>
    </section>
    <div class="tblh">
        <a href="index.php" class="home">Kembali ke Home</a>
    </div>
    <div class="gerak">
        Teo
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
    <script type="text/javascript" src="tambah-hero.js"></script>
</body>

</html>