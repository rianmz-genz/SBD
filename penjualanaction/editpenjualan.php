<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>EDIT DATA jual</h2>
    <br />
    <a href="../home.php?page=penjualan">KEMBALI</a>
    <br />
    <br />
    <?php
    include '../koneksi.php';
    $kdjual = $_GET['kdjual'];
    $data = mysqli_query($koneksi, "select * from tbpenjualan where kdjual='$kdjual'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="editpenjualan_action.php">
            <table>
                <tr>
                    <td>Tanggal Penjualan</td>
                    <td>
                        <input type="hidden" name="kdjual" value="<?php echo $d['kdjual']; ?>">
                        <input type="date" name="tgljual" value="<?php echo $d['tgljual']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Total Penjualan</td>
                    <td>
                        <input type="number" name="totaljual" value="<?php echo $d['totaljual']; ?>">
                    </td>
                </tr>
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
            case 'penjualan':
                include "../tampilpenjualan.php";
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }

    ?>
</body>

</html>