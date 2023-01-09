<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$idpemasok = $_POST['idpemasok'];
$namapemasok= $_POST['namapemasok'];
$alamatpemasok= $_POST['alamatpemasok'];
$teleponpemasok= $_POST['teleponpemasok'];
$pic= $_POST['pic'];

// update data ke database
mysqli_query($koneksi,"update tbpemasok set namapemasok='$namapemasok', alamatpemasok='$alamatpemasok', teleponpemasok='$teleponpemasok', pic='$pic' where idpemasok='$idpemasok'");

// mengalihkan halaman kembali tampil pelanggan
header("location:../home.php?page=pemasok");

?>