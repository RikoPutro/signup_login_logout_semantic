<?php
include "koneksi.php";
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];
$jeniskelamin=$_POST['jeniskelamin'];
$agama=$_POST['agama'];
$pekerjaan=$_POST['pekerjaan'];
$hakakses=$_POST['hakakses'];
$query=mysql_query("insert into datane (username,email,password,nama,alamat,usia,jeniskelamin,agama,pekerjaan,hakakses) 
	values('$username','$email',md5('$password'),'$nama','$alamat','$usia','$jeniskelamin','$agama','$pekerjaan','$hakakses')");
if ($query) {
	# code...
	echo "<script>
		alert('Data berhasil di tambahkan');
		window.location.assign('login.php');
	</script>";
}
else{
	echo mysql_error();
}
?>