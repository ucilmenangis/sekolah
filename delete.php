<?php
    include "connect.php";
    include "check_login.php";
    if($_GET['kode']){
        if($_SESSION["level"] >= 1){
            mysqli_query($conn , "DELETE from data_siswa where id_siswa = '$_GET[kode]'");
            echo "<script>
                alert('data telah di hapus!')
                window.location.href = 'data.php'
            </script>";
            exit();
        }else{
            echo "<script>
                alert('maaf anda tidak bisa mengubah data karena anda bukan admin')
                window.location.href = 'data.php'
            </script>";
            exit();
        }
        exit();
    }else{
        echo "<script>
            alert('maaf anda tidak ada data yang di maksud')
            window.location.href = 'data.php'
        </script>";
        exit();
    }
?>