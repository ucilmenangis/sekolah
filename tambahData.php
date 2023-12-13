<?php 
include "check_login.php";
if(!$_SESSION['level'] == 1){
    echo "<script>
        alert('hanya admin yang dapat mengakses halaman tersebut')
        window.location.href = 'data.php'
    </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 - Create Data</title>
    <link rel="icon" href="img/Untitled.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/tambahData.css">
    <script defer src="js/global.js"></script>
</head>
<body>
<!-- navbar -->
    <nav>
        <div class="nav-logo">
            <img src="img/Untitled.png">
            <h3>SMKN 1 Bondowoso</h3>
        </div>
        <div class="nav-links">
            <div class="nav-a">
                <a href="data.php">Data</a>
                <a href="logout.php" class="fa-solid fa-user fa-lg"></a>
            </div>
            <div class="nav-menu" id="nav-button">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </nav>
    <!-- navbar-menu -->
    <div class="nav-res" id="nav-res">
        <div class="nav-res-links">
            <a href="logout.php" class="fa-solid fa-user fa-lg"></a>
            <a href="sekolah.php">Home</a>
            <a href="data.php">Data</a>
        </div>
    </div>
    <!-- main -->
    <main>
        <div class="main-gambar">
            <div class="main-gambar-photo"></div>
        </div>
        <div class="main-login-page">
            <h1 style="text-align: center;">CREATE</h1>
            <div>
                <form method="post">
                    <label for="username">Nama Siswa</label>
                    <input type="text" name="nama" placeholder="Ketik Nama Siswa" required>
                    <label for="username">NISN</label>
                    <input type="text" name="nisn" placeholder="Ketik Nomor NISN" required>        
                    <label for="username">Jurusan</label>
                    <input type="text" name="jurusan" placeholder="Pilih Salah Satu Code Jurusan 1 - 9" required>
                    <div class="form-button">
                        <input type="submit" value="Create" name="create">
                    </div>
                    <div class="form-footer-links">
                        <a href="#" class="fa-brands fa-twitter"></a>
                        <a href="#" class="fa-brands fa-facebook"></a>
                        <a href="#" class="fa-solid fa-envelope"></a> 
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
        include "connect.php";
        if($_POST['create'] ?? null){
            $nisn = $_POST['nisn'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $sql = mysqli_query($conn , "INSERT INTO data_siswa (nisn_siswa,nama_siswa,id_jurusan_siswa) VALUES ('$nisn','$nama','$jurusan')");
            echo "<script>
            alert('berhasil! , silahkan cek database')
            window.location.href = 'data.php'
            </script>";
        }
    ?>
</body>
</html>