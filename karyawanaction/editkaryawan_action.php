<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$namakaryawan= $_POST['namakaryawan'];
$telepon= $_POST['telepon'];
$jabatan= $_POST['jabatan'];
$sandi= $_POST['sandi'];

// update data ke database
mysqli_query($koneksi,"update tbkaryawan set namakaryawan='$namakaryawan',telepon='$telepon',jabatan='$jabatan',sandi='$sandi' where nik='$nik'");

// mengalihkan halaman kembali tampil pelanggan
header("location:../home.php?page=karyawan");

?>