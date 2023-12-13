<?php
    session_start();
    include "connect.php";

    if(isset($_COOKIE['login'])){
        $_SESSION["login"] = $_COOKIE["remember"];
        header("location:sekolah.php");
        exit();
    }

    if(isset($_SESSION['login'])){
        header("location:sekolah.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 Bondowoso - Login</title>
    <link rel="icon" href="img/Untitled.png">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<!-- navbar -->
    <nav>
        <div class="nav-logo">
            <img src="img/Untitled.png">
            <h3>SMKN 1 Bondowoso</h3>
        </div>
    </nav>
<!-- login -->
    <main>
        <video autoplay muted loop >
                <source src="videos/bokeh.mp4" type="video/mp4">
        </video>
        <form method="post">
            <h1>Register</h1>
            
            <label for="nama">username : </label>            
            <div class="username">
                <input type="text" name="nama" placeholder="user123" required><i class="fa-solid fa-users"></i>                
            </div>

            <label for="password">password : </label>
            <div class="password">
                <input type="password" name="password" placeholder="password123" required><i class="fa-solid fa-lock"></i>
            </div>
            
            <div class="submit-button">
                <input type="submit" name="confirm" value="REGISTER">
            </div>
            <div class="form-links">
                <a href="#" class="fa-brands fa-twitter"></a>
                <a href="#" class="fa-brands fa-facebook"></a>
                <a href="#" class="fa-solid fa-envelope"></a>
            </div>
            <div class="register">
                <a href="login.php">Sudah Punya Akun?</a>
            </div>
            <?php
                if(isset($_POST["confirm"])){
                    $nama = $_POST['nama'];
                    $password = $_POST['password'];
                    $sql = mysqli_query($conn , " INSERT INTO data_user (nama_user , password_user) VALUES ('$nama' , '$password') ");
                    echo "<script>
                    alert('register berhasil. silahkan login')
                    window.location.href = 'login.php'
                    </script>";
                    exit();
                }
            ?>
        </form>        
    </main>

</body>
</html>