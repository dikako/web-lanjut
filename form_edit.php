<!DOCTYPE html>
<html>
<head>
	<title>Biodata Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Tugas Kuliah Pemmrograma Web Lanjut</h2>
		<h3>Biodata Mahasiswa</h3>
	</div>

	<br />
	<a href="index.php">
		<button>< Lihat Semua Data</button>
	</a>
	
	<h3>Edit Biodata</h3>
	<form action="proses_edit.php" method="post">
		<?php 
		include "koneksi.php";
		$id = $_GET['id'];

		$query = mysqli_query($con, "SELECT * FROM biodata WHERE id = '$id'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required></td>					
			</tr>	
			<tr>
				<td>No. Handphone</td>
				<td><input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>" required></td>					
			</tr>	
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>

