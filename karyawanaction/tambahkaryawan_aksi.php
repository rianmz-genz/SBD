<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$nik = $_POST['nik'];
$namakaryawan= $_POST['namakaryawan'];
$telepon= $_POST['telepon'];
$jabatan= $_POST['jabatan'];
$sandi= $_POST['sandi'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbkaryawan values('$nik','$namakaryawan','$telepon','$jabatan','$sandi')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:../home.php?page=karyawan");

?>