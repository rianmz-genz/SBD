<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$kdproduk = $_POST['kdproduk'];
$namaproduk= $_POST['namaproduk'];
$idkategori= $_POST['idkategori'];
$stok= $_POST['stok'];
$harga= $_POST['harga'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbproduk values('$kdproduk','$namaproduk','$idkategori','$stok','$harga')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:../home.php?page=produk");

?>