<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$idkategori = $_POST['idkategori'];
$namakategori= $_POST['namakategori'];
$idpemasok= $_POST['idpemasok'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbkategori values('$idkategori','$namakategori','$idpemasok')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:../home.php?page=kategori");

?>