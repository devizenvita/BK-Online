<?php
    include"koneksi.php";
    $query = "SELECT * FROM guru_bk WHERE (nip = '".$_POST['nip']."') AND (password= '".$_POST['password']."');";
    $login = mysql_query($query);
    $rowcount = mysql_num_rows($login);
    session_start();
   if($rowcount==1){
        $_SESSION['nip'] = $_POST['nip'];
        $_SESSION['password'] = $_POST['password'];
        echo "
            <script>
                alert('Anda berhasil masuk');
                window.location.href='indexguru.php';
            </script>
        ";
    } else {
        // echo "
        //     <script>
        //         alert('Anda gagal masuk');
        //         window.location.href='login_guru.php';
        //     </script>
        // ";
    }
    mysql_close();
?>