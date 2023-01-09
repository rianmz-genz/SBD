<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Karyawan</title>
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
<h2>DATA KARYAWAN</h2>
	<br/>
	<a href="karyawanaction/tambahkaryawan.php" 
    style="	background: #f3f4f6;
	text-decoration: none;
	cursor: pointer;
	border: 1px solid black;
    color: black;
    padding: 0.25rem 1rem;
    border-radius: 1rem;">+ TAMBAH Karyawan</a>
	<br/>
	<br/>
	<table border="1px">
		<tr style="background: #f3f4f6;">
			<th>No</th>
			<th>Id Karyawan</th>
			<th>Nama Karyawan</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Sandi</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbkaryawan order by nik");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['namakaryawan']; ?></td>
				<td><?php echo $d['telepon']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
				<td><?php echo $d['sandi']; ?></td>
				<td>
					<a href="karyawanaction/editkaryawan.php?nik=<?php echo $d['nik']; ?>">Edit</a>
					<a href="hapuspelanggan.php?nik=<?php echo $d['nik']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

	</table>
</body>
</html>