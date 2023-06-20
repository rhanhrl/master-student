<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crud MASTER STUDENT</title>
	</head>

	<body>
		<h2>Data Mahasiswa</h2>
		<a href="input.php" style="background-color: midnightblue; color: yellow; padding: 10px 20px; border-radius: 10px; text-decoration: none;">Tambah Data</a><br><br>
		<table border="1" cellspacing="0" width="70%"; style="text-align: center; font-weight: bold;">
			<tr style="background-color: skyblue;">
				<th>NO</th>
				<th>NIM</th>
				<th>NAMA</th>
				<th>JURUSAN</th>
				<th>INSTITUT</th>
				<th>NO HP</th>
				<th>SETTING</th>
			</tr>
			<?php 
			include 'koneksi.php';
			$no = 1;
			$select = mysqli_query($conn, "SELECT * FROM datacrud");
			while ($hasil = mysqli_fetch_array($select)) {
			?>
			<tr style="font-weight: normal; font-size: 17px; color: yellow; background-color: darkblue;">
				<td><?php echo $no++ ?></td>
				<td><?php echo $hasil['NIM'] ?></td>
				<td><?php echo $hasil['NAMA'] ?></td>
				<td><?php echo $hasil['JURUSAN'] ?></td>
				<td><?php echo $hasil['INSTITUT'] ?></td>
				<td><?php echo $hasil['NOHP'] ?></td>
				<td>
					<a href="update.php?NIM=<?php echo $hasil['NIM'] ?>" style="color: yellow;">Edit</a> |
					<a href="delete.php?NIM=<?php echo $hasil['NIM'] ?>" style="color: yellow;">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>