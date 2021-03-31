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
	<a href="form_tambah.php">
		<button>+ Tambah Data Baru</button>
	</a>

	<h3>Biodata Mahasiswa</h3>
	<div style="overflow: auto;">
		<table border="1" class="table">
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No. Handphone</th>
				<th>Aksi</th>		
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM biodata") or die(mysqli_error($con));
			$nomor = 1;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td><?php echo $data['no_hp']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
</body>
</html>