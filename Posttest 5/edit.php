<?php
require "koneksi.php";
$id = $_GET["id"];

$result = mysqli_query($conn, "select * from detail_hero where id = '$id'");

$detail_hero = [];

while ($row = mysqli_fetch_assoc($result)) {
    $detail_hero[] = $row;
}

$detail_hero = $detail_hero[0];

if (isset($_POST["ubah"])) {
    $nama = $_POST["nama"];
    $raritas = $_POST["raritas"];
    $arena = $_POST["arena"];
    $colo = $_POST["colo"];
    $raid = $_POST["raid"];

    $result = mysqli_query($conn, "update detail_hero set nama = '$nama', raritas = '$raritas', arena = '$arena', colo = '$colo', raid = '$raid' where id = '$id'");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah!');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
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
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about-me.html" class="abot">About Me</a></li>
                <button class="theme-toggle" onclick="toggleTheme()">Light Mode</button>
            </ul>
        </nav>
    </div>
    <section class="comment">
        <div class="ubah">
            <div class="isi">
                <div class="atas">
                    <p>Edit Hero</p>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="" class="left">Nama Hero : </label>
                    <input type="text" name="nama" value="<?= $detail_hero["nama"] ?>" required><br>
                    <label for="" class="left">Raritas : </label>
                    <div class="starwrapper">
                        <input type="radio" name="raritas" value="⭐" value="<?= $detail_hero["raritas"] ?>" required>⭐
                        <input type="radio" name="raritas" value="⭐⭐" value="<?= $detail_hero["raritas"] ?>" required>⭐⭐
                        <input type="radio" name="raritas" value="⭐⭐⭐" value="<?= $detail_hero["raritas"] ?>"
                            required>⭐⭐⭐<br>
                    </div>
                    <label for="" class="left">Rating Arena : </label>
                    <input type="number" name="arena" step="any" value="<?= $detail_hero["arena"] ?>" required><br>
                    <label for="" class="left">Rating Colloseum : </label>
                    <input type="number" name="colo" step="any" value="<?= $detail_hero["colo"] ?>" required><br>
                    <label for="" class="left">Rating Raid : </label>
                    <input type="number" name="raid" step="any" value="<?= $detail_hero["raid"] ?>" required><br>
                    <input type="submit" value="Ubah" name="ubah">
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