<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Mengenkripsi password

    $query = "INSERT INTO user (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameter ke query
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);

    // Eksekusi statement
    if (mysqli_stmt_execute($stmt)) {
        header("Location: login.php"); // Redirect to login.php after successful registration
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    mysqli_stmt_close($stmt);
}

date_default_timezone_set('Asia/Makassar');
$date = date('d M Y H:i:s');
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
                    <p>Register</p>
                </div>
                <form action="" method="post">
                    <label for="" class="left">Username : </label>
                    <input type="text" name="username" required><br>
                    <label for="" class="left">Password : </label>
                    <input type="password" name="password" step="any"required><br>
                    <input type="submit" value="Register" name="register">
                </form>
            </div>
        </div>
    </section>
    <div class="tblh">
        <a href="login.php" class="home">Ke Halaman Login</a>
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