<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$kdjual = $_POST['kdjual'];
$tgljual= $_POST['tgljual'];
$totaljual= $_POST['totaljual'];

// update data ke database
mysqli_query($koneksi,"update tbpenjualan set tgljual='$tgljual', totaljual='$totaljual' where kdjual='$kdjual'");

// mengalihkan halaman kembali tampil pelanggan
header("location:../home.php?page=penjualan");

?>