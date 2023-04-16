<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark mt-5">
	<div class="container col-md-8 bg-light align-center p-4">
		<div class="col align-center">
			<header>
				<h3>Siswa yang sudah mendaftar</h3>
			</header>
			
			<nav>
				<a href="form-daftar.php">[+] Tambah Baru</a>
			</nav>
			
			<br>
			
			<table border="1" class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Sekolah Asal</th>
					<th>Tindakan</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
				$sql = "SELECT * FROM calon_siswa";
				$query = mysqli_query($db, $sql);
				
				while($siswa = mysqli_fetch_array($query)){
					echo "<tr>";
					
					echo "<td>".$siswa['id']."</td>";
					echo "<td>".$siswa['nama']."</td>";
					echo "<td>".$siswa['alamat']."</td>";
					echo "<td>".$siswa['jenis_kelamin']."</td>";
					echo "<td>".$siswa['agama']."</td>";
					echo "<td>".$siswa['sekolah_asal']."</td>";
					
					echo "<td>";
					echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
					echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
					echo "</td>";
					
					echo "</tr>";
				}		
				?>
				
			</tbody>
			</table>
			
			<p>Total: <?php echo mysqli_num_rows($query) ?></p>
		</div>
	</div>
</body>
</html>
