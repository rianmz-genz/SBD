<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$nik = $_GET['nik'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbkaryawan where nik='$nik'");

// mengalihkan halaman kembali ke home.php
header("location:../home.php?page=karyawan");

?>