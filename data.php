<?php 
    include "connect.php";
    include "check_login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/data.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="icon" href="img/Untitled.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="js/data.js"></script>
    <script defer src="js/global.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 Bondowoso - Data</title>
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
                <form method="GET">
                    <a onclick="showSearch()" type="button" class="fa-solid fa-search fa-lg" id="search-button-1"></a>                      
                    <input type="text" placeholder="Search..." name="cari" id="search-input-1">
                </form>   
                <a href="sekolah.php">Home</a>
                <a href="logout.php" class="fa-solid fa-user fa-lg"></a>
            </div>
            <div class="nav-search" id="search-link">
                <form method="GET">
                    <input type="text" placeholder="Search..." name="cari" id="search-input-2">
                    <a onclick="showSearch()" class="fa-solid fa-search fa-lg" id="search-button-2"></a>                      
                </form>  
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
            <ul>
                <li><a href="sekolah.php"><i class="fa-solid fa-house"></i><p>Home</p></a></li>
                <?php if($_SESSION['level'] >= 1){ echo "<li><a href='tambahData.php'><i class='fa-solid fa-users-line'></i><p>Create Data</p></a></li>"; }?>
                <li><a href="data_jurusan.php"><i class="fa-solid fa-file-lines"></i><p>Data Jurusan</p></a></li>
                <li><a href="data_kelas.php"><i class="fa-solid fa-shield"></i><p>Data Kelas</p></a></li>
                <li><a href="data_guru.php"><i class="fa-solid fa-code-branch"></i><p>Data Guru</p></a></li>
                <li><a href="data_kegiatan.php"><i class="fa-solid fa-bars-staggered"></i><p>Data Kegiatan</p></a></li>
            </ul>
        </div>
    </div>
    <!-- main konten -->
    <main>
        <!-- sidebar -->
        <div class="main-sidebar-ghost"></div>
        <div class="main-sidebar-fly">
            <div class="main-sidebar">
                <div class="main-sidebar-locate ">
                    <div class="main-sidebar-links1">
                        <ul>
                            <?php if($_SESSION['level'] >= 1){ echo "<li><a href='tambahData.php'><i class='fa-solid fa-users-line'></i><p>Create Data</p></a></li>"; } ?>
                            <li><a href="data_jurusan.php"><i class="fa-solid fa-file-lines"></i><p>Data Jurusan</p></a></li>
                            <li><a href="data_kelas.php"><i class="fa-solid fa-shield"></i><p>Data Kelas</p></a></li>
                            <li><a href="data_guru.php"><i class="fa-solid fa-code-branch"></i><p>Data Guru</p></a></li>
                            <li><a href="data_kegiatan.php"><i class="fa-solid fa-bars-staggered"></i><p>Data Kegiatan</p></a></li>
                        </ul>
                    </div>
                    <div class="main-sidebar-links">
                        <i>©2023 SMKN 1 Bondowoso</i>
                    </div>                    
                </div>
            </div>            
        </div>
        <!-- main content -->
        <div class="main-content">
            <div class="main-content-header">
                <div class="main-content-text">
                    <h1>Database Status : <?php echo $status?></h1>
                    <p>Hello <?php echo $_SESSION["login"]; ?>, Levelmu adalah <?php echo $_SESSION["level"]; ?>. Silahkan lakukan sesuatu sesuai dengan levelmu. Selamat mencoba</p>
                </div> 
            </div>
            <div class="main-content-item">
                <?php
                    if(isset($_GET['cari'])){
                        $pencarian = $_GET['cari'];
                        $sql = "SELECT * FROM data_siswa WHERE nama_siswa LIKE '%".$pencarian."%'";
                    }else{
                        $sql = "SELECT * FROM data_siswa";
                    }
                    $tampil = mysqli_query($conn , $sql);

                    while ($row = mysqli_fetch_array($tampil)){
                        echo "
                            <div class='card-new'>
                                <div class='card-header'>
                                    <div class='card-status'>
                                        <p>1 hour ago</p>
                                    </div>
                                    <div class='card-profile'>
                                        <h5>" . $row['nama_siswa'] . "</h5>
                                        <p>". $row['nisn_siswa'] . "</p>
                                    </div>
                                </div>
                                <div class='card-text'>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis esse itaque reiciendis temporibus eligendi eius nam aut sed? Cumque, placeat! Accusantium natus magnam eveniet vel similique! Sunt ut praesentium reiciendis?</p>
                                </div>
                                <div class='card-action'>";
                                    if($_SESSION["level"] == 1) {
                                        echo "
                                        <div class='card-action-edit'>
                                            <a href='update.php?kode=$row[id_siswa]' class=''>EDIT</a>
                                        </div> ";
                                    }
                                echo "<div class='card-action-preview'>
                                        <p>ID : ". $row['id_siswa'] . "</p>
                                    </div> ";
                                    if($_SESSION["level"] == 1) {
                                        echo "
                                        <div class='card-action-delete'>
                                            <a href='delete.php?kode=$row[id_siswa]' class=''>DELETE</a>
                                        </div> ";              
                                    }
                        echo  " </div>
                            </div>
                        ";
                    }
                ?>                
            </div>
        </div>
    </main>
</body>
</html>