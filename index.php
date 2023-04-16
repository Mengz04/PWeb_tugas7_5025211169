<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark mt-5">
	<div class="container col-md-6 bg-light align-center p-4">
		<div class="col align-center">
			<header>
				<h3>Pendaftaran Siswa Baru</h3>
				<h1>SMK Coding</h1>
			</header>
			
			<h4>Menu</h4>
			<nav>
				<ul>
					<li><a href="form-daftar.php">Daftar Baru</a></li>
					<li><a href="list-siswa.php">Pendaftar</a></li>
				</ul>
			</nav>
			
			
			<?php if(isset($_GET['status'])): ?>
			<p>
				<?php
					if($_GET['status'] == 'sukses'){
						echo "Pendaftaran siswa baru berhasil!";
					} else {
						echo "Pendaftaran gagal!";
					}
				?>
			</p>
			<?php endif; ?>
	
</body>
</html>
