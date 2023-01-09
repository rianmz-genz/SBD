<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$id = $_POST['idpelanggan'];
$namapelanggan = $_POST['namapelanggan'];
$alamatpelanggan = $_POST['alamatpelanggan'];
$teleponpelanggan = $_POST['teleponpelanggan'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbpelanggan values('$id','$namapelanggan','$alamatpelanggan','$teleponpelanggan')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:home.php?page=pelanggan");

?>