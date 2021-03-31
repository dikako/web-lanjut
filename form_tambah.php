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

	<h3>Input Biodata</h3>
	<form action="proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" required></td>					
			</tr>	
			<tr>
				<td>no. Handphone</td>
				<td><input type="text" name="no_hp" required></td>					
			</tr>	
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>
