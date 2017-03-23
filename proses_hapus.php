<?php
include "koneksi.php";
$key=$_GET['id'];
$query=mysql_query("delete from datane where id=".$key);
echo "<script>
		alert('Berhasil menghapus data');
		window.location.assign('halaman_admin.php');
	</script>";
?>