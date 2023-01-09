<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>DATA PELANGGAN</h2>
	<br/>
	<a href="tambahpelanggan.php"
	style="	background: #f3f4f6;
	text-decoration: none;
	cursor: pointer;
	border: 1px solid black;
    color: black;
    padding: 0.25rem 1rem;
    border-radius: 1rem;">+ TAMBAH PELANGGAN</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Id Pelanggan</th>
			<th>Nama Pelanggan</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbpelanggan order by idpelanggan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['idpelanggan']; ?></td>
				<td><?php echo $d['namapelanggan']; ?></td>
				<td><?php echo $d['alamatpelanggan']; ?></td>
				<td><?php echo $d['teleponpelanggan']; ?></td>
				<td>
					<a href="editpelanggan.php?idpelanggan=<?php echo $d['idpelanggan']; ?>">Edit</a>
					<a href="hapuspelanggan.php?idpelanggan=<?php echo $d['idpelanggan']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

	</table>
</body>
</html>