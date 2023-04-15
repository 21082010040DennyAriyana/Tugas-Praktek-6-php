<?php
// Ambil nilai dari form login
$nama = $_POST['nama'];
$email = $_POST['email'];

// Periksa apakah data lengkap
if (!$nama || !$email) {
	// Data tidak lengkap
	echo "Maaf, data Anda tidak lengkap. Mohon isi semua field.<br>";
	echo "<a href='no 2 Login.html'>Kembali ke halaman login</a>";
} else {
	// Data lengkap
	// Lakukan redirect kembali ke halaman login
	echo "Selamat datang, $nama! <br>";
echo "Email: $email <br>";
echo "Hari ini tanggal " . date("d/m/Y") . "<br>";
echo "Sekarang jam " . date("H:i:s");
}
?>
