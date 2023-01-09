<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>TAMBAH DATA PELANGGAN</h2>
	<br/>
	<a href="home.php?page=pelanggan">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambahpelanggan_aksi.php">
		<table>
			<tr>			
				<td>Id Pelanggan</td>
				<td><input type="text" name="idpelanggan"></td>
			</tr>
			<tr>
				<td>Nama Pelanggan</td>
				<td><input type="text" name="namapelanggan"></td>
			</tr>
			<tr>
				<td>Alamat Pelanggan</td>
				<td><input type="text" name="alamatpelanggan"></td>
			</tr>
			<tr>
				<td>Telepon Pelanggan</td>
				<td><input type="number" name="teleponpelanggan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'pelanggan':
				include "tampilpelanggan.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

</body>
</html>