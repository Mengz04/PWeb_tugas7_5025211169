<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Siswa | SMK Coding</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./mystyle.css">
</head>

<body class="bg-dark mt-5">
	<div class="container col-md-6 bg-light align-center p-4">
		<div class="col align-center">
			<header>
				<h4 class="text-center gothBL mb-3">Formulir Edit Siswa</h4>
			</header>
			
			<form action="proses-edit.php" method="POST">
				
				<fieldset>
					
					<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
				
				<p>
					<label for="nama">Nama: </label>
					<input type="text" class="form-control" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
				</p>
				<p>
					<label for="alamat">Alamat: </label>
					<textarea name="alamat" class="form-control"><?php echo $siswa['alamat'] ?></textarea>
				</p>
				<p>
					<label for="jenis_kelamin">Jenis Kelamin: </label>
					<?php $jk = $siswa['jenis_kelamin']; ?>
					<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
					<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
				</p>
				<p>
					<label for="agama">Agama: </label>
					<?php $agama = $siswa['agama']; ?>
					<select name="agama" class="form-control">
						<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
						<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
						<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
						<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
						<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
					</select>
				</p>
				<p>
					<label for="sekolah_asal">Sekolah Asal: </label>
					<input type="text" name="sekolah_asal" class="form-control" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
				</p>
				<p class="text-center">
					<input type="submit" class="btn btn-success" value="Simpan" name="simpan" />
				</p>
				
				</fieldset>
				
			
			</form>
	
	</body>
</html>
