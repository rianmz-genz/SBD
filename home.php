<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">AMIKOM PURWOKERTO MART</h1>
		<h3 class="deskripsi">Jalan Jajan No. 1 Purwokerto Utara</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="home.php?page=beranda">BERANDA</a></li>  			
  			<li><a href="home.php?page=karyawan">KARYAWAN</a></li>
  			<li><a href="home.php?page=pelanggan">PELANGGAN</a></li>
  			<li><a href="home.php?page=pemasok">PEMASOK</a></li>
  			<li><a href="home.php?page=kategori">KATEGORI</a></li>
  			<li><a href="home.php?page=produk">PRODUK</a></li>
  			<li><a href="home.php?page=penjualan">PENJUALAN</a></li>
			<li><a href="home.php?page=tentang">TENTANG</a></li>
		</ul>
	</div>

    <div class="badan">
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'beranda':
				include "beranda.php";
				break;			
			case 'karyawan':
				include "tampilkaryawan.php";
				break;
			case 'pelanggan':
				include "tampilpelanggan.php";
				break;
			case 'pemasok':
				include "tampilpemasok.php";
				break;
			case 'kategori':
				include "tampilkategori.php";
				break;	
			case 'produk':
				include "tampilproduk.php";
				break;
			case 'penjualan':
				include "tampilpenjualan.php";
				break;
			case 'tentang':
				include "tentang.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "beranda.php";
	}

	 ?>
   </div>
</div>
</body>
</html>