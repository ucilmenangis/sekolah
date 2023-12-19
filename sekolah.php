<?php
    session_start();
    include "connect.php";

//     if (!isset($_SESSION['login'])) {
//     header("Location: login.php");
//     exit(); 
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">    
    <link rel="stylesheet" href="css/sekolah.css">
    <link rel="icon" href="img/Untitled.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="js/sekolah.js"></script>
    <script defer src="js/global.js"></script>
    <title>SMKN 1 Bondowoso</title>
</head>
<body id="home">
    <!-- navbar -->
    <nav>
        <div class="nav-logo">
            <img src="img/Untitled.png">
            <h3>SMKN 1 Bondowoso</h3>
        </div>
        <div class="nav-links">
            <div class="nav-a">
                <a href="#">Home</a>
                <a href="#">Help</a>
                <?php 
                if(isset($_SESSION['login'])){
                    echo "<a href='data.php' id='data'>Data</a>";
                    echo "<a type='button' onclick='clickNotification()' class='fa-solid fa-user fa-lg' id='buttonNotification'></a>";
                    // echo "<a href='logout.php' class='fa-regular fa-address-card'></a>";
                }

                if(!isset($_SESSION['login'])){
                    echo "<a href='login.php' id='data'>Login</a>";
                }
                ?>
                <!-- <a href="logout.php" class="fa-solid fa-user fa-lg"></a> -->
            </div>
            <div class="nav-menu" id="nav-button">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <?php 
        if(isset($_SESSION['login'])){
            echo "
            <!-- notification -->
            <div class='notification' id='notification'>
            <div class='notification-body'>
                    <h1>Hi,". $_SESSION['login'] ."</h1>
                    <br>
                    <p>Level : ". $_SESSION['level'] ."</p>
                    <div class='notification-body-links'>
                        <a href='profile.php'>Profile</a>
                        <a href='logout.php'>Logout</a>
                    </div>
                </div>
            </div>";            
        }
        ?>
    </nav>
    <!-- navbar-menu -->
    <div class="nav-res" id="nav-res">
        <div class="nav-res-links global-color">
            <a class="fa-solid fa-user fa-lg"></a>
            <a href="#">Home</a>
            <a href="#">Help</a>
            <?php 
                if(isset($_SESSION['login'])){
                    echo "<a href='logout.php'>Logout</a>";
                    echo "<a href='data.php'>Data</a>";
                }
                else{
                    echo "<a href='login.php'>Login</a>";
                }
            ?>
            <div class="nav-res-icons">
                <a href="#" class="fa-brands fa-twitter"></a>
                <a class="fa-brands fa-facebook"></a>
                <a class="fa-solid fa-envelope"></a> 
            </div>
        </div>
    </div>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="sidebar-center">
            <a href="#" class="fa-brands fa-twitter"></a>
            <a href="#" class="fa-brands fa-instagram"></a>
            <a href="#" class="fa-solid fa-envelope"></a>
        </div>
    </div>
    <!-- tampilan -->
    <div class="tampilan">
        <div class="tampilan-gambar">
        </div>
        <div class="tampilan-text">
            <h1>SMKN 1 BONDOWOSO - BERJAYA</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore excepturi commodi, laborum quod numquam error esse maiores possimus officia iure explicabo! Blanditiis</p>
            <d class="tampilan-button">
                <a id="mulai" href="#welcome">MULAI</a>
                <a>PELAJARI</a>
            </d>
        </div>
    </div>
    <!-- main content -->
    <main id="main">
        <!-- welcome -->
        <div class="welcome" id="welcome">
            <div class="welcome-text">
                <div class="welcome-header mb-4">
                    <h1>Welcome</h1>
                </div>
                <p class="welcome-title text-center fw-bold h5 mb-5">Selamat Datang di SMKN 1 Bondowoso, Sekolah <em>Berteknologi</em> & <em>Berteknoogi</em></p>
                <div>
                    <h3 class="border-start border-5 ps-3 border-danger">Visi</h3>
                    <ul>
                        <li>Terwujudnya SMKN 1 Bondowoso sebagai sekolah berbudaya, berteknologi, dan sesuai dengan Pancasila</li>
                    </ul>
                    <h3 class="border-start border-5 ps-3 border-danger">Misi</h3>
                    <ul>
                        <li>Menanamkan wawasan iman dan taqwa kepada Tuhan Yang Maha Esa</li>
                        <li>Menumbuhkan budaya kerja, budaya lingkungan, dan budaya literasi</li>
                        <li>Menerapkan perkembangan teknologi</li>
                        <li>Meningkatkan kualitas sumber daya manusia sesuai Pancasila</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- about -->
        <div class="tentang">
            <div class="tentang-header">
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <h1>Tentang SMKN 1 Bondowoso</h1>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        tujuan satuan pendidikan
                    </figcaption>
                </figure>
            </div>
            <div class="tentnag-text">
                <ol>
                    <li>Mengembangkan budaya sekolah yang religius melalui kegiatan keagamaan</li>
                    <li>Menyiapkan tenaga kerja yang memiliki kecakapan sesuai kebutuhan DIDUKA</li>
                    <li>Menerapkan 5 S dalam kehidupan sehari-hari</li>
                    <li>Membiasakan buang sampah pada tempatnya</li>
                    <li>Menjaga kebersihan lingkungan sekolah</li>
                    <li>Membiasakan budaya antre</li>
                    <li>Mengembangkan budaya literasi dalam setiap kegiatan sekolah</li>
                    <li>Memanfaatkan teknologi dalam pelayanan Pendidikan</li>
                    <li>Menghasilkan lulusan yang mengusai teknologi sesuai dengan konsentrasi keahliannya</li>
                    <li>Meningkatkan kualitas SDM yang berkepribadian Pancasila</li>
                </ol>
            </div>
        </div>
        <!-- credits -->
    </main>
    <footer class="global-color">
        <div class="footer-header-text">
            <h1>SMKN 1 Bondowoso</h1>
        </div>
        <div class="footer-paragraf">
            <i>Copyright ©2023 SMKN 1 Bondowoso</i>
        </div>
        <div class="footer-links">
            <div class="footer-links-contact">
                <a href="">Contact</a>
            </div>
            <!-- <div class="border">

            </div> -->
            <div class="footer-links-policy">
                <a href="">Policy</a>
            </div>
            <div class="footer-links-security">
                <a href="">Security</a>
            </div>
        </div>
    </footer>
</body>
</html>
<?php
    // Checking login who admins and who is userd
    // $level = $_GET;
    // if($level = 3){
    //     echo "
    //         <script>
    //             document.getElementById('data').remove()
    //         </script>
    //     ";
    // }
?>