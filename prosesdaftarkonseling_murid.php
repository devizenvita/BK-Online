<?php
session_start();
 include "koneksi.php";
       $mysql = "INSERT INTO `konseling`( `nama_daftar`, `kategori`, `jadwal`, `nama_guru`, `note`, `murid_fk`, `id_jadwal`) VALUES ('".$_POST["nama_daftar"]."', '".$_POST["kategori"]."','".$_POST["jadwal"]."', '".$_POST["nama_guru"]."', '".$_POST["note"]."', '".$_SESSION['id_sis']."', '".$_POST["waktu"]."');";
                //echo "mysql  ".$mysql;
        if(!mysql_query($mysql))
        die (mysql_error());


echo"<script>alert('Selamat, Anda telah terdaftar');window.location.href='daftarkonseling_murid.php';</script>";

mysql_close();
?>