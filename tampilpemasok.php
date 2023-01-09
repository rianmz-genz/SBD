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
<h2>DATA PEMASOK</h2>
	<br/>
	<a href="pemasokaction/tambahpemasok.php"
    style="	background: #f3f4f6;
	text-decoration: none;
	cursor: pointer;
	border: 1px solid black;
    color: black;
    padding: 0.25rem 1rem;
    border-radius: 1rem;">+ TAMBAH PEMASOK</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Id Pemasok</th>
			<th>Nama Pemasok</th>
			<th>Alamat Pemasok</th>
			<th>Telepon Pemasok</th>
			<th>Pic</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbpemasok order by idpemasok");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['idpemasok']; ?></td>
				<td><?php echo $d['namapemasok']; ?></td>
				<td><?php echo $d['alamatpemasok']; ?></td>
				<td><?php echo $d['teleponpemasok']; ?></td>
				<td><?php echo $d['pic']; ?></td>
				<td>
					<a href="pemasokaction/editpemasok.php?idpemasok=<?php echo $d['idpemasok']; ?>">Edit</a>
					<a href="pemasokaction/hapuspemasok.php?idpemasok=<?php echo $d['idpemasok']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

	</table>
</body>
</html>