<?php
    if (!isset($_SESSION['email'])) {
        header("location:login.php")
    }
    if (!isset($_SESSION['cart'])) {
        echo "<h1>Keranjang kosong</h1>"
    }
    if (isset($_GET['hapus'])) {
        $id=$_GET['hapus'];
        unset($_SESSION['cart'][$id]);
    }
    $isikeranjang= count($_SESSION['cart']);
    if ($isikeranjang == 0) {
        header("location:index.php")
    }
    if (isset($_GET['add'])) {
        $id=$_GET['add']
    }
    // echo $id;
    $sql= "SELECT * FROM produk  WHERE id = $id";
    // echo $sql;
    $hasil= mysqli_query($koneksi, $sql);
    $baris= mysqli_num_rows($hasil);
    // echo $row[1];
    // echo $row[3];
    $jumlahbeli=
    if (!isset($_SESSION['cart'][$id])) {
        $jumlahbeli= 1;
    }else {
        $jumlahbeli++;
    }
    $_SESSION['cart']['$id']=['produk' => $row[1], 'harga' => $row[3], 'id' => $row[0], 'jumlah' => isset($_SESSION['cart'][$id]) ? $_SESSION['cart'][$id]['jumlah']+1 : 1;]
?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($_SESSION['cart'] as $key) {
                ?>
                <tr>
                    <td><?= $key['No']?></td>
                    <td><?= $key['Produk']?></td>
                    <td><?= $key['Harga']?></td>
                    <td><?= $key['Jumlah'] * $key['Harga']?></td>
                    <td><a href="?menu=cart&hapus=<?= $key['id']?>">Hapus</a></td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<div class="cart">
    <h1>Cart</h1>
</div>