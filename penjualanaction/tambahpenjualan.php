<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah penjualan</title>
</head>
<body>
<h2>TAMBAH DATA PENJUALAN</h2>
	<br/>
	<a href="../home.php?page=penjualan">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambahpenjualan_aksi.php">
		<table>
			<tr>			
				<td>Kd penjualan</td>
				<td><input type="text" name="kdjual"></td>
			</tr>
			<tr>
				<td>Tanggal penjualan</td>
				<td><input type="date" name="tgljual"></td>
			</tr>
            <tr>
                <td>Nik Karyawan</td>
                <td><input type="text" name="nik"></td>
            </tr>
            <tr>
                <td>Id Pelanggan</td>
                <td><input type="number" name="idpelanggan"></td>
            </tr>
			<tr>
				<td>Total penjualan</td>
				<td><input type="text" name="totaljual"></td>
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
			case 'penjualan':
				include "../tampilpenjualan.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

</body>
</html>