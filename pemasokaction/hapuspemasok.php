<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$idpemasok = $_GET['idpemasok'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbpemasok where idpemasok='$idpemasok'");

// mengalihkan halaman kembali ke home.php
header("location:../home.php?page=pemasok");

?>