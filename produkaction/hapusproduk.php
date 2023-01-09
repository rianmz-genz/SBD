<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$kdproduk = $_GET['kdproduk'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbproduk where kdproduk='$kdproduk'");

// mengalihkan halaman kembali ke home.php
header("location:../home.php?page=produk");

?>