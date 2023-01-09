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
<h2>DATA KATEGORI</h2>
	<br/>
	<a href="kategoriaction/tambahkategori.php">+ TAMBAH KATEGORI</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Id Kategori</th>
			<th>Nama Kategori</th>
			<th>Id Pemasok</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbkategori order by idkategori");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['idkategori']; ?></td>
				<td><?php echo $d['namakategori']; ?></td>
				<td><?php echo $d['idpemasok']; ?></td>
				<td>
					<a href="kategoriaction/editkategori.php?idkategori=<?php echo $d['idkategori']; ?>">Edit</a>
					<a href="kategoriaction/hapuskategori.php?idkategori=<?php echo $d['idkategori']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

	</table>
</body>
</html>