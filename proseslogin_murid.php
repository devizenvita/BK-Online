<?php
    include"koneksi.php";
    $query = "SELECT * FROM murid WHERE (nis = '".$_POST['nis']."') AND (password= '".$_POST['password']."');";
    $login = mysql_query($query);
    $rowcount = mysql_num_rows($login);
    session_start();
   if($rowcount==1){

        while($buff=mysql_fetch_array($login)){

        $_SESSION['nis'] = $_POST['nis'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['id_sis'] = $buff['id_murid'];

        header('location: indexmurid.php');
        } 
    }else {
        echo "
            <script>
                alert('Anda gagal masuk');
                window.location.href='login_murid.php';
            </script>
        ";
    }

?>