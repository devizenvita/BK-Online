<?php 
include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	body{
		width: 800px;
		margin:30px auto;
	}
</style>
<body onload="window.print();">
		<?php
	
				include"koneksi.php";
				session_start();
				$id_daftar = $_SESSION["id_sis"];
				$select="select * from konseling inner join jadwal on konseling.id_jadwal = jadwal.id_jadwal where murid_fk=".$id_daftar."";
				$buff=mysql_fetch_array(mysql_query($select));
			?>
	 <h3><center>HASIL BIMBINGAN KONSELING MURID SMA NEGERI 2 TANGERANG SELATAN</center></h3>
	<table border="0">
		<thead>
		<tr>
			<th width="300">Nama</th>
			<td>: <?php echo $buff['nama_daftar'];?></td>
		</tr>
		<tr>
			<th>Kategori</th>
			<td>: <?php echo $buff['kategori'];?></td>
		</tr>
		<tr>
			<th>Jadwal</th>
			<td>: <?php echo $buff['jadwal'];?></td>
		</tr>
		<tr>
			<th>Nama Guru BK</th>
			<td>: <?php echo $buff['nama_guru'];?></td>
		</tr>
		<tr>
			<th>Waktu</th>
			<td>: <?php echo $buff['waktu'];?></td>
		</tr>
		<tr>
			<th>Note</th>
			<td>: <?php echo $buff['note'];?></td>
		</tr>
		<tr>
			<th>Hasil Konseling</th>
			<td>: <?php echo $buff['hasil'];?></td>
		</tr>
		</thead>

	
	</table>
	

</body>
</html>