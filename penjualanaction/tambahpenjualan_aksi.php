<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$kdjual = $_POST['kdjual'];
$tgljual= $_POST['tgljual'];
$nik= $_POST['nik'];
$idpelanggan= $_POST['idpelanggan'];
$totaljual= $_POST['totaljual'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbpenjualan values('$kdjual','$tgljual','$nik','$idpelanggan','$totaljual')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:../home.php?page=penjualan");

?>