<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$idpemasok = $_POST['idpemasok'];
$namapemasok= $_POST['namapemasok'];
$alamatpemasok= $_POST['alamatpemasok'];
$teleponpemasok= $_POST['teleponpemasok'];
$pic= $_POST['pic'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbpemasok values('$idpemasok','$namapemasok','$alamatpemasok','$teleponpemasok','$pic')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:../home.php?page=pemasok");

?>