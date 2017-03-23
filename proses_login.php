<?php 
session_start();
include "koneksi.php";
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql=mysql_query("select * from datane where email='$email' and password='$password'");
$panggil=mysql_fetch_object($sql);
if ($panggil) { 
	# code...
	$_SESSION['email']=$email;
	if ($panggil->hakakses=='pengunjung') {
		# code...
		echo "<script> 
			alert('Selamat anda berhasil login');
			window.location.assign('halaman_pengunjung.php');
			</script>";
	}
	elseif ($panggil->hakakses=='administrator') {
		# code...
		echo "<script> 
			alert('Login Anda Berhasil');
			window.location.assign('halaman_admin.php');
			</script>";
	}			
	?> 
	<?php
}
else{
	?>
	<?php
	echo "<script>
		alert('Anda belum terdaftar');
		window.location.assign('login.php');
	</script>";
}?>