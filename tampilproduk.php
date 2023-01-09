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
<h2>DATA PRODUK</h2>
	<br/>
	<a href="produkaction/tambahproduk.php"
    style="	background: #f3f4f6;
	text-decoration: none;
	cursor: pointer;
	border: 1px solid black;
    color: black;
    padding: 0.25rem 1rem;
    border-radius: 1rem;">+ TAMBAH PRODUK</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>KD Produk</th>
			<th>Nama Produk</th>
			<th>Id Kategori</th>
			<th>Stok Produk</th>
			<th>Harga Produk</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbproduk order by kdproduk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kdproduk']; ?></td>
				<td><?php echo $d['namaproduk']; ?></td>
				<td><?php echo $d['idkategori']; ?></td>
				<td><?php echo $d['stok']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td>
					<a href="produkaction/editproduk.php?kdproduk=<?php echo $d['kdproduk']; ?>">Edit</a>
					<a href="produkaction/hapusproduk.php?kdproduk=<?php echo $d['kdproduk']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

	</table>
</body>
</html>