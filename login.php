<?php 
// koneksi database
include 'koneksi.php';

 $username=$_GET['namakaryawan'];
 $sandi=$_GET['sandi'];

 $data = mysqli_query($koneksi,"select namakaryawan,sandi from tbkaryawan where namakaryawan='$namakaryawan' and sandi='$sandi'");
 $row=mysqli_fetch_assoc($data);
 if($username==$row['namakaryawan'] && $psw==$row['sandi']){
  header("Location: home.php");
 }
 else{
  echo "Gagal Login";

 }
?>