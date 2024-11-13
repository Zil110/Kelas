<?php
    session_start();
    $host='localhost';
    $user='root';
    $password='';
    $database='tokoku';

    $koneksi = mysqli_connect($host, $user, $password, $database)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokoku</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
            <a href="index.php"><img src="./images/atsukodent.jpg" alt=""></a>
            </div>
            <div class="judul">
                <h2>Tokoku</h2>
            </div>
            <div class="nav">
                <ul>
                    <a href="?menu=cart"><li>cart</li></a>
                    <?php
                        if (!isset($_SESSION['email'])) {
                    ?>
                        <a href="?menu=register"><li>register</li></a>
                        <a href="?menu=login"><li>login</li></a>
                    <?php
                        }else {
                    ?>
                        <li><?= $_SESSION['email']?></li>
                        <a href="?menu=logout"><li>logout</li></a>
                    <?php
                        }
                    ?>
                    <a href="?menu=product"><li>product</li></a>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
            if (isset($_GET['menu'])) {
                $menu = $_GET['menu'];

                require_once './pages/'.$menu.'.php';
            }else {
                    require_once('./pages/product.php');
                }
            ?>
        </div>
        <div class="footer">
            <p>web ini dibuat oleh Zilli</p>
        </div>
    </div>
</body>
</html>