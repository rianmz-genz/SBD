<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>EDIT DATA KARYAWAN</h2>
    <br />
    <a href="../home.php?page=karyawan">KEMBALI</a>
    <br />
    <br />
    <?php
    include '../koneksi.php';
    $nik = $_GET['nik'];
    $data = mysqli_query($koneksi, "select * from tbkaryawan where nik='$nik'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="editkaryawan_action.php">
            <table>
                <tr>
                    <td>Nama Karyawan</td>
                    <td>
                        <input type="hidden" name="nik" value="<?php echo $d['nik']; ?>">
                        <input type="text" name="namakaryawan" value="<?php echo $d['namakaryawan']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>
                        <input type="number" name="telepon" value="<?php echo $d['telepon']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>
                        <input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>">
                    </td>
                    <tr />
                <tr>
                    <td>Sandi</td>
                    <td>
                        <input type="text" name="sandi" value="<?php echo $d['sandi']; ?>">
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
            case 'karyawan':
                include "../tampilkaryawan.php";
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }

    ?>
</body>

</html>