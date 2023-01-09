<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>TAMBAH DATA PEMASOK</h2>
	<br/>
	<a href="../home.php?page=pemasok">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambahpemasok_aksi.php">
		<table>
			<tr>			
				<td>Id Pemasok</td>
				<td><input type="text" name="idpemasok"></td>
			</tr>
			<tr>
				<td>Nama Pemasok</td>
				<td><input required type="text" name="namapemasok"></td>
			</tr>
            <tr>
                <td>Alamat Pemasok</td>
                <td><input type="text" name="alamatpemasok"></td>
            </tr>
            <tr>
                <td>Telepon Pemasok</td>
                <td><input type="number" name="teleponpemasok"></td>
            </tr>
			<tr>
				<td>Pic</td>
				<td><input type="text" name="pic"></td>
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
			case 'karyawan':
				include "../tampilkaryawan.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

</body>
</html>