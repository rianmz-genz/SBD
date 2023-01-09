<?php 
$koneksi = mysqli_connect("localhost","root","","22sa11a080_adrian");

// Cek Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>

