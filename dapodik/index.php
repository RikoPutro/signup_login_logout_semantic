<?php
include "koneksi.php";?>
<?php
	$query = "SELECT * FROM data_sekolah";
	$sql = mysql_query($query, $koneksi);
	$jml_baris = mysql_num_rows($sql);
	echo "jumlah keseluruhan data : ".$jml_baris;

?>

<!-- daftar pesan -->
<head>
	<title> Data Sekolah </title>
</head>

<h2><center> Data - Data Sekolah Negeri dan Swasta </center></h2>

				<li><a target="_blank" href="/semester4/dapodik/swasta.php"><button> Data Sekolah Swasta</button></a></li>
				<li><a target="_blank" href="/semester4/dapodik/negeri.php"><button> Data Sekolah Negeri</button></a></li>
				<li><a target="_blank" href="/semester4/dapodik/sd_swasta.php"><button> Data SD Swasta</button></a></li>
				<li><a target="_blank" href="/semester4/dapodik/dapodik.php"><button> Data Sekolah</button></a></li>
				</br>


<table border=1 cellspacing=0 width="80%">
	<tr>
		<td><center>Nama Sekolah</center></td>
		<td><center>NPSN</center></td>
		<td><center>Jenjang</center></td>
		<td><center>Status Sekolah</center></td>
	</tr>
	<?php if($jml_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
	
	<tr>
		<?php while($data = mysql_fetch_object($sql)): ?>
		<td><?php echo $data->nama_sekolah;?></td>
		<td><center><?php echo $data->npsn;?></center></td>
		<td><center><?php echo $data->jenjang;?></center></td>
		<td><center><?php echo $data->status_sekolah;?></center></td>
		
	</tr>
		<?php endwhile;?>
		<?php endif; ?>
</table>
<br/>



	
	