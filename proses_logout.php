<?php 
session_start();
session_destroy();
echo "<script>
	alert('Logout Berhasil');
	window.location.assign('login.php');
</script>";
?>