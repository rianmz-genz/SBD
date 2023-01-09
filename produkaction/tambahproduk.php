<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
<h2>TAMBAH DATA PRODUK</h2>
	<br/>
	<a href="../home.php?page=produk">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambahproduk_aksi.php">
		<table>
			<tr>			
				<td>Kd produk</td>
				<td><input type="text" name="kdproduk"></td>
			</tr>
			<tr>
				<td>Nama produk</td>
				<td><input type="text" name="namaproduk"></td>
			</tr>
            <tr>
                <td>Id Kategori</td>
                <td><input type="text" name="idkategori"></td>
            </tr>
            <tr>
                <td>Stok produk</td>
                <td><input type="number" name="stok"></td>
            </tr>
			<tr>
				<td>Harga Produk</td>
				<td><input type="text" name="harga"></td>
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
			case 'produk':
				include "../tampilproduk.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

</body>
</html>