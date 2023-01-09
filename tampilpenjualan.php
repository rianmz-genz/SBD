<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100%;
            min-height: 100vh;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
        }
    </style>
</head>
<body>
<h2>DATA penjualan</h2>
	<br/>
	<a href="penjualanaction/tambahpenjualan.php">+ TAMBAH penjualan</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>KD penjualan</th>
			<th>Tanggal penjualan</th>
			<th>Nik Karyawan</th>
			<th>Id pelanggan</th>
			<th>Total penjualan</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbpenjualan order by kdjual");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kdjual']; ?></td>
				<td><?php echo $d['tgljual']; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['idpelanggan']; ?></td>
				<td><?php echo $d['totaljual']; ?></td>
				<td>
					<a href="penjualanaction/editpenjualan.php?kdjual=<?php echo $d['kdjual']; ?>">Edit</a>
					<a href="penjualanaction/hapuspenjualan.php?kdjual=<?php echo $d['kdjual']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

	</table>
</body>
</html>