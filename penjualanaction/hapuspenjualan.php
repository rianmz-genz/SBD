<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$kdjual = $_GET['kdjual'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbpenjualan where kdjual='$kdjual'");

// mengalihkan halaman kembali ke home.php
header("location:../home.php?page=penjualan");

?>