<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idpelanggan = $_POST['idpelanggan'];
$namapelanggan= $_POST['namapelanggan'];
$alamatpelanggan= $_POST['alamatpelanggan'];
$teleponpelanggan= $_POST['teleponpelanggan'];

// update data ke database
mysqli_query($koneksi,"update tbpelanggan set namapelanggan='$namapelanggan',alamatpelanggan='$alamatpelanggan',teleponpelanggan='$teleponpelanggan' where idpelanggan='$idpelanggan'");

// mengalihkan halaman kembali tampil pelanggan
header("location:home.php?page=pelanggan");

?>