<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['idpelanggan'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbpelanggan where idpelanggan='$id'");

// mengalihkan halaman kembali ke home.php
header("location:home.php?page=pelanggan");

?>