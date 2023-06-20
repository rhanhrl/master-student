<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crud Input</title>
	</head>

	<body>
		<h2>Input Data</h2>
		<a href="index.php" style="background-color: midnightblue; color: yellow; padding: 10px 20px; border-radius: 10px; text-decoration: none;">Kembali</a><br><br>
		<form action="" method="POST">
			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="NIM" placeholder="NIM" required></td>
				</tr>

				<tr>
					<td>NAMA</td>
					<td>:</td>
					<td><input type="text" name="NAMA" placeholder="NAMA" required></td>
				</tr>

				<tr>
					<td>JURUSAN</td>
					<td>:</td>
					<td>
						<select name="JURUSAN">
							<option value="Teknik Sipil">TEKNIK SIPIL</option>
							<option value="Teknik Informatika">TEKNIK INFORMATIKA</option>
							<option value="Kimia">KIMIA</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>INSTITUT</td>
					<td>:</td>
					<td><input type="text" name="INSTITUT" placeholder="INSTITUT" required></td>
				</tr>

				<tr>
					<td>NO HP</td>
					<td>:</td>
					<td><input type="text" name="NOHP" placeholder="NOHP" required></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="SIMPAN" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
		<?php
		include 'koneksi.php';
		if(isset($_POST['SIMPAN'])){
		$insert = mysqli_query($conn, "INSERT INTO datacrud VALUES
			('".$_POST['NIM']."',
			'".$_POST['NAMA']."',
			'".$_POST['JURUSAN']."',
			'".$_POST['INSTITUT']."',
			'".$_POST['NOHP']."')");
			if ($insert) {
				echo "BERHASIL DISIMPAN";
			} else{
				echo "GAGAL DISIMPAN !";
			}
		}
		?>
	</body>
</html>