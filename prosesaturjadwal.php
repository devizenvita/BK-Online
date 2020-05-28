<?php
include "koneksi.php";

$mysql = "INSERT INTO jadwal(nama, hari, tanggal, sesi, waktu) VALUES
('$_POST[nama]', '$_POST[hari]','$_POST[tanggal]', '$_POST[sesi]', '$_POST[waktu]')";

if(!mysql_query($mysql))
die (mysql_error());

echo"<script>alert('Berhasil menambahkan jadwal');window.location.href='aturjadwal.php';</script>";

mysql_close();
?>