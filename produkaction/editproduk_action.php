<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$kdproduk = $_POST['kdproduk'];
$namaproduk= $_POST['namaproduk'];
$idkategori= $_POST['idkategori'];
$stok= $_POST['stok'];
$harga= $_POST['harga'];

// update data ke database
mysqli_query($koneksi,"update tbproduk set namaproduk='$namaproduk', idkategori='$idkategori', stok='$stok', harga='$harga' where kdproduk='$kdproduk'");

// mengalihkan halaman kembali tampil pelanggan
header("location:../home.php?page=produk");

?>