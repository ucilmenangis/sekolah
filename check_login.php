<?php 
session_start();
if(!isset($_SESSION["login"])){
    echo "<script>
    alert('Login dibutuhkan')
    window.location.href = 'login.php'
    </script>";
    exit();
}
?>