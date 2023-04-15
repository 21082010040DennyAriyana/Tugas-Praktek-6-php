<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biodata</title>
	<style>
		/* Style yang sama dengan halaman input biodata */
	</style>
</head>
<body>
	<header>
		<h1>Biodata</h1>
	</header>
	<?php
		// Cek apakah ada data yang dikirimkan dari form
		if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['address']) && isset($_POST['job'])) {
			// Simpan data yang diinputkan ke dalam variabel
			$name = $_POST['name'];
			$age = $_POST['age'];
			$address = $_POST['address'];
			$job = $_POST['job'];

			// Tampilkan data yang diinputkan
			echo '<div style="max-width: 600px; margin: 20px auto; border: 1px solid #ddd; border-radius: 5px; padding: 20px;">';
			echo '<p>Nama: '.$name.'</p>';
			echo '<p>Umur: '.$age.'</p>';
			echo '<p>Alamat: '.$address.'</p>';
			echo '<p>Pekerjaan: '.$job.'</p>';
			echo '</div>';
		}
		else {
			// Jika data tidak lengkap, tampilkan pesan kesalahan
			echo '<p style="text-align: center;">Maaf, data yang Anda masukkan tidak lengkap.</p>';
		}
	?>
</body>
</html>
