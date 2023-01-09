<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>TAMBAH DATA KATEGORI</h2>
	<br/>
	<a href="../home.php?page=kategori">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambahkategori_aksi.php">
		<table>
			<tr>			
				<td>Id Kategori</td>
				<td><input type="text" maxlength="2" name="idkategori"></td>
			</tr>
			<tr>
				<td>Nama Kategori</td>
				<td><input required type="text" name="namakategori"></td>
			</tr>
            <tr>
                <td>Id Pemasok</td>
                <td><input type="text" name="idpemasok"></td>
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
			case 'kategori':
				include "../tampilkategori.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

</body>
</html>