<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP PGRI 1 Buduran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="./images/logo.jpg" alt=""></a>
            </div>
            <div class="sekolah">
                <h2>SMP PGRI 1 Buduran</h2>
            </div>
            <div class="nav">
                <li><a href="?menu=home">home</a></li>
                <li><a href="?menu=sejarah">sejarah</a></li>
                <li><a href="?menu=kegiatan">kegiatan</a></li>
                <li><a href="?menu=jadwal">jadwal</a></li>
                <li><a href="?menu=galeri">galeri</a></li>
                <li><a href="?menu=kontak">kontak</a></li>
            </div>
        </div>
        <div class="content">
            <?php
                if (isset($_GET["menu"])) {
                    $menu=$_GET["menu"];
                    echo $menu;

                    if ($menu=="home") {
                        require_once("pages/home.php");
                    }
                    if ($menu=="sejarah") {
                        require_once("pages/sejarah.php");
                    }
                    if ($menu=="kegiatan") {
                        require_once("pages/kegiatan.php");
                    }
                    if ($menu=="jadwal") {
                        require_once("pages/jadwal.php");
                    }
                    if ($menu=="galeri") {
                        require_once("pages/galeri.php");
                    }
                    if ($menu=="kontak") {
                        require_once("pages/kontak.php");
                    }
                }
                else {
                    require_once("pages/home.php");
                }
            ?>
        </div>
        <div class="footer">
            <div class="alamat">
                <div class="map">
                    <img src="./images/map.jpg" alt="">
                </div>
                <div class="a-txt">
                    <h4>Jl. Kebangsaan Ngawi No.69</h4>
                </div>
            </div>
            <div class="telepon">
                <div class="telpon">
                    <img src="./images/telpon.jpg" alt="">
                </div>
                <div class="t-txt">
                    <h4>081234567890</h4>
                </div>
            </div>
            <div class="email">
                <div class="mail">
                    <img src="./images/mail.jpg" alt="">
                </div>
                <div class="e-txt">
                    <h4>smppgri1buduran99@gmail.com</h4>
                </div>
            </div>
            <p>web ini dibuat oleh: Zilli</p>
        </div>
        <div class="cpr">
            <p>&copy SMP PGRI 1 Buduran. All rights reserved.</p>
        </div>
    </div>
</body>
</html>