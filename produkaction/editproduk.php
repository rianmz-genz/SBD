<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>EDIT DATA PRODUK</h2>
    <br />
    <a href="../home.php?page=produk">KEMBALI</a>
    <br />
    <br />
    <?php
    include '../koneksi.php';
    $kdproduk = $_GET['kdproduk'];
    $data = mysqli_query($koneksi, "select * from tbproduk where kdproduk='$kdproduk'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="editproduk_action.php">
            <table>
                <tr>
                    <td>Nama produk</td>
                    <td>
                        <input type="hidden" name="kdproduk" value="<?php echo $d['kdproduk']; ?>">
                        <input type="text" name="namaproduk" value="<?php echo $d['namaproduk']; ?>">
                    </td>
                    <td>Id Kategori</td>
                    <td>
                        <input type="text" name="idkategori" value="<?php echo $d['idkategori']; ?>">
                    </td>
                    <td>Stok produk</td>
                    <td>
                        <input type="number" name="stok" value="<?php echo $d['stok']; ?>">
                    </td>
                    <td>Harga</td>
                    <td>
                        <input type="text" name="harga" value="<?php echo $d['harga']; ?>">
                    </td>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'produk':
                include "../tampilproduk.php";
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }

    ?>
</body>

</html>