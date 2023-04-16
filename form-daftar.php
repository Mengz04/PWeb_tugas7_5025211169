<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark mt-5">
	<div class="container col-md-6 bg-light align-center p-4">
		<div class="col align-center">
			<header>
				<h4 class="text-center">Formulir Pendaftaran Siswa Baru</h4>
			</header>
			
			<form action="proses-pendaftaran.php" method="POST">
				<fieldset>
				
				<p>
					<label for="nama">Nama:</label>
					<input type="text" class="form-control" name="nama" placeholder="nama lengkap" />
				</p>
				<p>
					<label for="alamat">Alamat: </label>
					<textarea name="alamat" class="form-control" ></textarea>
				</p>
				<p>
					<label for="jenis_kelamin">Jenis Kelamin: </label>
					<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
					<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
				</p>
				<p>
					<label for="agama">Agama: </label>
					<select name="agama" class="form-control">
						<option>Islam</option>
						<option>Kristen</option>
						<option>Hindu</option>
						<option>Budha</option>
						<option>Atheis</option>
					</select>
				</p>
				<p>
					<label for="sekolah_asal">Sekolah Asal: </label>
					<input type="text" class="form-control" name="sekolah_asal" placeholder="nama sekolah" />
				</p>
				<p class="text-center">
					<input type="submit" class="btn btn-success" value="Daftar" name="daftar" />
				</p>
				
				</fieldset>
			
			</form>
		</div>
	</div>
	</body>
</html>
