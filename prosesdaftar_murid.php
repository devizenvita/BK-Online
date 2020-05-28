<?php
include "koneksi.php";

$mysql = "INSERT INTO murid(nama_murid, nis, ttl, email, kelas, nama_walas, password) VALUES
('$_POST[nama_murid]','$_POST[nis]', '$_POST[ttl]', '$_POST[email]', '$_POST[kelas]','$_POST[nama_walas]', '$_POST[password]')";

if(!mysql_query($mysql))
die (mysql_error());

echo"<script>alert('Selamat, Anda telah terdaftar');window.location.href='indexmurid.php';</script>";

mysql_close();
?>