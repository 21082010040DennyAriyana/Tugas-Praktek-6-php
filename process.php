<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Lakukan validasi data
if ($name == '' || $email == '' || $password == '') {
	echo "Error: Mohon isi semua field.";
	exit;
}

// Tampilkan pesan selamat datang
echo "Selamat datang, $name! <br>";
echo "Email: $email <br>";
echo "Hari ini tanggal " . date("d/m/Y") . "<br>";
echo "Sekarang jam " . date("H:i:s");
?>
