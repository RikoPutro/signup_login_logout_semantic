<?php
include "koneksi.php";?>
<?php
	$query = "SELECT * FROM data_sekolah";
	$sql = mysql_query($query, $koneksi);
	$jml_baris = mysql_num_rows($sql);
	echo "jumlah keseluruhan data : ".$jml_baris;
	
?>

<!-- daftar pesan -->
<table border=1 cellspacing=0 width="80%">
	<tr>
		<td>nama</td>
		<td>npsn</td>
		<td>jenjang</td>
		<td>status</td>
	</tr>
	<?php if($jml_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
	
	<tr>
		<?php while($data = mysql_fetch_object($sql)): ?>
		<td><?php echo $data->nama_sekolah;?></td>
		<td><?php echo $data->npsn;?></td>
		<td><?php echo $data->jenjang;?></td>
		<td><?php echo $data->status_sekolah;?></td>
	</tr>
		<?php endwhile;?>
		<?php endif; ?>
</table>
<br/>



	
	