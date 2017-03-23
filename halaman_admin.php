<?php
session_start();
if (isset($_SESSION['email'])) 
	{
		include "koneksi.php";
		$query = "SELECT * FROM datane";
		$sql = mysql_query($query, $koneksi);
		$jumlah_baris = mysql_num_rows($sql);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous">

  </script>
<script src="dist/semantic.min.js"></script>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Admin</title>

  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="halaman_admin.php" class="header item">
         <img src="gambar/koala.jpg" style="margin-right: 5px" class="image">
          <?php echo "Data ".$_SESSION['email'];?><br>
          (Administrator)
      </a>

      <div class="ui simple dropdown item">
        Data User <i class="dropdown icon"></i>
        <div class="menu">
          <a href="edit_data.php" class="item">Edit Data</a>
          <a href=" " class="item">Data User</a>         
        </div>
      </div>

      <div class="ui simple dropdown item">
        Data Sekolah <i class="dropdown icon"></i>
        <div class="menu">
          <a href="edit_data.php" class="item">Edit Data</a>
          <a href="data_sekolah.php" class="item">Data Sekolah</a>         
        </div>
      </div>

      <div class="ui right header" style="color: white;margin-top: 18px;"><h4><?php echo "Jumlah Data : ".$jumlah_baris;?></h4></div>
    </div>
    <a href="halaman_admin.php" class="ui right header item">Menu Admin</a>
    <a href="proses_logout.php" class="ui right header item">Keluar</a>
  </div>

<!-- Tabel Data -->
<br><br>
<table class="ui selectable celled table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Nama Lengkap</th>
      <th>Alamat Lengkap</th>
      <th>Usia</th>
      <th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>Pekerjaan</th>
      <th>Hak Akses</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php if($jumlah_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
  <?php while($data = mysql_fetch_object($sql)): ?>
	<tr>	
		<td><?php echo $data->id;?></td>
		<td><?php echo $data->username;?></td>
		<td><?php echo $data->email;?></td>
		<td><?php echo $data->password;?></td>
		<td><?php echo $data->nama;?></td>
		<td><?php echo $data->alamat;?></td>
		<td><?php echo $data->usia;?></td>
		<td><?php echo $data->jeniskelamin;?></td>
		<td><?php echo $data->agama;?></td>
    <td><?php echo $data->pekerjaan;?></td>
		<td><?php echo $data->hakakses;?></td>
		<td>	
			<center><button class="ui icon button" onclick="window.location.href='proses_hapus.php?id= <?php echo $data->id;?>'">
				<i class="trash icon" ></i>
			</button></center>
		</td>	
	</tr>
		<?php endwhile;?>
		<?php endif; ?>
  </tbody>
</table>
</body>
</html>
<?php
	}else
		{
			?>Anda tidak memiliki hak untuk mengakses halaman ini!<a href="login.php">Login Dulu Gan</a><?php
		}
?>