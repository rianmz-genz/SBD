<!DOCTYPE html>
<html>

<head>
	<title></title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="content">
		<header style="background: transparent; border: none;">
			<h1 class="judul">SOEKADJAN MART</h1>
			<h3 class="deskripsi">Jalan Jajan No. 1 Purwokerto Utara</h3>
		</header>

		<div style="
		box-shadow: 0px 0px 4px rgba(0,0,0,.25);
		background: #f3f4f6 !important;
	border: 1px solid #f0f0f0;
	border-radius: 8px;	
	margin-bottom: 10px; 
	position: sticky;">
			<ul style="	list-style:none;
	overflow: hidden;">
				<li style="	float:left;		
	text-transform:uppercase;"><a style="	display:block;	
	padding:0 20px;
	text-decoration:none;
	color:#2c2c2c;
	font-family: sans-serif;
	font-size:13px;
	font-weight:400;
	transition:all 0.3s ease-in-out;" href="home.php?page=beranda">BERANDA</a></li>
				<li style="	float:left;		
	text-transform:uppercase;"><a style="	display:block;	
	padding:0 20px;
	text-decoration:none;
	color:#2c2c2c;
	font-family: sans-serif;
	font-size:13px;
	font-weight:400;
	transition:all 0.3s ease-in-out;" href="home.php?page=karyawan">KARYAWAN</a></li>
				<li style="	float:left;		
	text-transform:uppercase;"><a style="	display:block;	
	padding:0 20px;
	text-decoration:none;
	color:#2c2c2c;
	font-family: sans-serif;
	font-size:13px;
	font-weight:400;
	transition:all 0.3s ease-in-out;" href="home.php?page=pelanggan">PELANGGAN</a></li>
				<li style="	float:left;		
	text-transform:uppercase;"><a style="	display:block;	
	padding:0 20px;
	text-decoration:none;
	color:#2c2c2c;
	font-family: sans-serif;
	font-size:13px;
	font-weight:400;
	transition:all 0.3s ease-in-out;" href="home.php?page=pemasok">PEMASOK</a></li>
				<li style="	float:left;		
	text-transform:uppercase;"><a style="	display:block;	
	padding:0 20px;
	text-decoration:none;
	color:#2c2c2c;
	font-family: sans-serif;
	font-size:13px;
	font-weight:400;
	transition:all 0.3s ease-in-out;" href="home.php?page=kategori">KATEGORI</a></li>
				<li style="	float:left;		
	text-transform:uppercase;"><a style="	display:block;	
	padding:0 20px;
	text-decoration:none;
	color:#2c2c2c;
	font-family: sans-serif;
	font-size:13px;
	font-weight:400;
	transition:all 0.3s ease-in-out;" href="home.php?page=produk">PRODUK</a></li>
				<li style="	float:left;		
	text-transform:uppercase;"><a style="	display:block;	
	padding:0 20px;
	text-decoration:none;
	color:#2c2c2c;
	font-family: sans-serif;
	font-size:13px;
	font-weight:400;
	transition:all 0.3s ease-in-out;" href="home.php?page=penjualan">PENJUALAN</a></li>
				<li style="	float:left;		
	text-transform:uppercase;"><a style="	display:block;	
	padding:0 20px;
	text-decoration:none;
	color:#2c2c2c;
	font-family: sans-serif;
	font-size:13px;
	font-weight:400;
	transition:all 0.3s ease-in-out; 
	" href="home.php?page=tentang">TENTANG</a></li>
			</ul>
		</div>

		<div>
			<?php
			if (isset($_GET['page'])) {
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
			} else {
				include "beranda.php";
			}

			?>
		</div>
	</div>
</body>

</html>