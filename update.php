<?php
    include "connect.php";
    include "check_login.php";
    if($_GET['kode']){
        if($_SESSION['level'] >= 1){
            echo "<script>
                console.log('silahkan')
            </script>";
        }else{
            echo "<script>
                alert('maaf hanya admin yang bisa mengakses')
                window.location.href = 'data.php'
            </script>";
            exit();
        }
    }else{
        echo "<script>
            alert('tidak ada data yang dimaksud. silahkan coba lagi')
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
    <link rel="icon" href="img/Untitled.png">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script defer src="js/global.js"></script>
    <title>SMK 1 - UPDATE</title>
</head>
<body>
    <!-- navbar -->
    <nav>
        <div class="nav-logo">
            <img src="img/Untitled.png">
            <h3>SMK1 Bondowoso</h3>
        </div>
        <div class="nav-links">
            <div class="nav-a">
                <a href="sekolah.php">Home</a>
                <a href="data.php">Data</a>
                <a class="fa-solid fa-user fa-lg"></a>
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
    <!-- FORM -->
    <?php
        // $table = "SELECT * from data_siswa";
        // $result = $conn -> query($table);
        $sql1 = mysqli_query($conn, "SELECT * from data_siswa where id_siswa = '$_GET[kode]'");
        $data = mysqli_fetch_array($sql1);
    ?>
    <main>
        <div class="background-img"></div>
        <form method="post" style="display: flex; flex-direction: column;">
            <h1>EDIT</h1>
            <div class="form-input">
                <label for="id">NISN :</label>
                <input type="text" name="nisn" value="<?php echo $data['nisn_siswa']; ?>" placeholder="123456" require>

                <label for="id">NAMA :</label>
                <input type="text" value="<?php echo $data['nama_siswa']; ?>" name="nama" placeholder="username123" require>

                <label for="id">JURUSAN :</label>
                <input type="text" value="<?php echo $data['id_jurusan_siswa']; ?>" name="jurusan" placeholder="1 - 9" require>
                
                <div class="form-button">
                    <button onclick="confirm('anda yakin ingin menambah data tersebut?')" type="submit" name="confirm" value="confirm" >Confirm</button>
                </div>                
            </div>
        </form>
    </main>
    <?php 
        if($_POST['confirm'] ?? null){
            $nama_siswa = $_POST['nama'];
            $nisn_siswa = $_POST['nisn'];
            $jurusan = $_POST['jurusan'];

            if($nama_siswa == "" || $nisn_siswa == "" || $jurusan == ""){
                echo "<script>alert('try again')</script>";
            }else{
                $sql = mysqli_query($conn , "UPDATE data_siswa set 
                nisn_siswa = '$_POST[nisn]',
                nama_siswa = '$_POST[nama]',
                id_jurusan_siswa = '$_POST[jurusan]'
                where id_siswa = '$_GET[kode]'
                ");
                echo "<script>
                    alert('berhasil')
                    window.location.href = 'data.php'
                </script>";
            }
        }
    ?>
</body>
</html>