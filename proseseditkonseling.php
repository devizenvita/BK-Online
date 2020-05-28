<?php
include "koneksi.php";
if(isset($_POST['id_daftar'])){
	$edit="update konseling set 
	nama_daftar='$_POST[nama_daftar]',kategori='$_POST[kategori]',jadwal='$_POST[jadwal]',
	nama_guru='$_POST[nama_guru]',id_jadwal='$_POST[waktu]',note='$_POST[note]', hasil='$_POST[hasil]' where id_daftar='$_POST[id_daftar]'";
	
$hasil=mysql_query($edit);
if($hasil){
	echo"<script>alert('Data Berhasil di Edit');window.location.href='konseling_murid.php';</script>";
}

}
?>