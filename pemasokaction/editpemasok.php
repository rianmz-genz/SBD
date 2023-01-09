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
    <a href="../home.php?page=pemasok">KEMBALI</a>
    <br />
    <br />
    <?php
    include '../koneksi.php';
    $idpemasok = $_GET['idpemasok'];
    $data = mysqli_query($koneksi, "select * from tbpemasok where idpemasok='$idpemasok'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="editpemasok_action.php">
            <table>
                <tr>
                    <td>Nama pemasok</td>
                    <td>
                        <input type="hidden" name="idpemasok" value="<?php echo $d['idpemasok']; ?>">
                        <input type="text" name="namapemasok" value="<?php echo $d['namapemasok']; ?>">
                    </td>
    </tr>
    <tr>
                    <td>Alamat Pemasok</td>
                    <td>
                        <input type="text" name="alamatpemasok" value="<?php echo $d['alamatpemasok']; ?>">
                    </td>
    </tr>
    <tr>
                    <td>Telepon Pemasok</td>
                    <td>
                        <input type="number" name="teleponpemasok" value="<?php echo $d['teleponpemasok']; ?>">
                    </td>
    </tr>
    <tr>
                    <td>pic</td>
                    <td>
                        <input type="text" name="pic" value="<?php echo $d['pic']; ?>">
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