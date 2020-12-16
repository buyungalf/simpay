<?php

include "../lib/koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

if(!ctype_alnum($username) OR !ctype_alnum($password)) {
	echo "<center>LOGIN GAGAL! <br>
		Username atau Password Anda tidak benar. <br>
		Atau akun Anda sedang diblokir.<br>";
	echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
} else {
	$login = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");
	$match = mysqli_num_rows($login);
	$u = mysqli_fetch_array($login);

	if ($match>0) {
		session_start();
		$_SESSION['namauser'] = $u['username'];
		$_SESSION['passuser'] = $u['password'];
		header('location:main.php?pages=home');
	} else {
		echo "<center>LOGIN GAGAL! <br>
			Username atau Password Anda tidak benar. <br>
			Atau akun Anda sedang diblokir2.<br>";
		echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
	}
}

?>