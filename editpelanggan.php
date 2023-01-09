<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>EDIT DATA PELANGGAN</h2>
	<br/>
	<a href="home.php?page=pelanggan">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$idpelanggan = $_GET['idpelanggan'];
	$data = mysqli_query($koneksi,"select * from tbpelanggan where idpelanggan='$idpelanggan'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="editpelanggan_aksi.php">
			<table>
				<tr>			
					<td>Nama Pelanggan</td>
					<td>
						<input type="hidden" name="idpelanggan" value="<?php echo $d['idpelanggan']; ?>">
						<input type="text" name="namapelanggan" value="<?php echo $d['namapelanggan']; ?>">
					</td>
					<td>Alamat</td>
					<td>
						<input type="text" name="alamatpelanggan" value="<?php echo $d['alamatpelanggan']; ?>">
					</td>
					<td>Telepon</td>
					<td>
						<input type="number" name="teleponpelanggan" value="<?php echo $d['teleponpelanggan']; ?>">
					</td>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

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