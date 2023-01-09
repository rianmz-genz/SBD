<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
</head>
<body>
<h2>TAMBAH DATA KARYAWAN</h2>
	<br/>
	<a href="../home.php?page=karyawan">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambahkaryawan_aksi.php">
		<table>
			<tr>			
				<td>Nik Karyawan</td>
				<td><input type="text" name="nik"></td>
			</tr>
			<tr>
				<td>Nama Karyawan</td>
				<td><input type="text" name="namakaryawan"></td>
			</tr>
            <tr>
                <td>Telepon Karyawan</td>
                <td><input type="number" name="telepon"></td>
            </tr>
			<tr>
				<td>Jabatan Karyawan</td>
				<td><input type="text" name="jabatan"></td>
			</tr>
			<tr>
				<td>Sandi</td>
				<td><input type="password" name="sandi"></td>
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