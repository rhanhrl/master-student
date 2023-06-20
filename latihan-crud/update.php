<?php
include 'koneksi.php';
$dataedit = mysqli_query($conn, "SELECT * FROM datacrud WHERE NIM = '".$_GET['NIM']."'");
$result = mysqli_fetch_array($dataedit);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crud Input</title>
		<h2>Edit Data</h2>
		<a href="index.php" style="background-color: midnightblue; color: yellow; padding: 10px 20px;
		  border-radius: 10px; text-decoration: none;">Kembali</a><br><br>
	</head>	
	<body>
		<form action="" method="POST">
			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="NIM" value="<?php echo $result['NIM'] ?>" required></td>
				</tr>

				<tr>
					<td>NAMA</td>
					<td>:</td>
					<td><input type="text" name="NAMA" value="<?php echo $result['NAMA'] ?>" required></td>
				</tr>

				<tr>
					<td>JURUSAN</td>
					<td>:</td>
					<td>
						<select name="JURUSAN">
							<option value="<?php echo $result['JURUSAN'] ?>"><?php echo $result['JURUSAN'] ?></option>
							<option value="Teknik Sipil">TEKNIK SIPIL</option>
							<option value="Teknik Informatika">TEKNIK INFORMATIKA</option>
							<option value="Kimia">KIMIA</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>INSTITUT</td>
					<td>:</td>
					<td><input type="text" name="INSTITUT" value="<?php echo $result['INSTITUT'] ?>" required></td>
				</tr>

				<tr>
					<td>NO HP</td>
					<td>:</td>
					<td><input type="text" name="NOHP" value="<?php echo $result['NOHP'] ?>" required></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="Edit" value="SIMPAN"></td>
				</tr>
		    </table>
		</form>
		<?php
		if (isset($_POST['Edit'])) {
			$update = mysqli_query($conn, "UPDATE datacrud SET NAMA = '".$_POST['NAMA']."', 
				JURUSAN = '".$_POST['JURUSAN']."', INSTITUT = '".$_POST['INSTITUT']."', 
				NOHP = '".$_POST['NOHP']."'WHERE NIM = '".$_GET['NIM']."'");
			if ($update) {
				echo "BERHASIL";
			} else{
				echo "TIDAK BERHASIL";
			}
		}
		?>
	</body>
</html>
