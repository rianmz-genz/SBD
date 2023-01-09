<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>EDIT DATA pemasok</h2>
    <br />
    <a href="../home.php?page=kategori">KEMBALI</a>
    <br />
    <br />
    <?php
    include '../koneksi.php';
    $idkategori = $_GET['idkategori'];
    $data = mysqli_query($koneksi, "select * from tbkategori where idkategori='$idkategori'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="editkategori_action.php">
            <table>
                <tr>
                    <td>Nama Kategori</td>
                    <td>
                        <input type="hidden" name="idkategori" value="<?php echo $d['idkategori']; ?>">
                        <input type="text" name="namakategori" value="<?php echo $d['namakategori']; ?>">
                    </td>
                <tr>
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
            case 'pemasok':
                include "../tampilpemasok.php";
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }

    ?>
</body>

</html>