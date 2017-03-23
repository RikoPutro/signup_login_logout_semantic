<?php
include "koneksi.php";?>
<?php
	$query = "SELECT *FROM data_sekolah WHERE status_sekolah='Swasta'";
	$sql = mysql_query($query, $koneksi);
	$jml_baris = mysql_num_rows($sql);
	echo "jumlah keseluruhan data : ".$jml_baris;
	
?>
<!-- daftar pesan -->
<head>
	<title> Data Sekolah Swasta </title>
</head>

<h2><center> Data Sekolah Swasta </center></h2>

<table border=1 cellspacing=0 width="80%">
	<tr>
		<td><center>Nama Sekolah</center></td>
		<td><center>jenjang</center></td>
		<td><center>Status</center></td>
	</tr>
	<?php if($jml_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
	
	<tr>
		<?php while($data = mysql_fetch_object($sql)): ?>
		<td><?php echo $data->nama_sekolah;?></td>
		<td><?php echo $data->jenjang;?></td>
		<td><?php echo $data->status_sekolah;?></td>

	</tr>
		<?php endwhile;?>
		<?php endif; ?>
</table>
<br/>