<?php
    session_start();
    include "connect.php";

    if(isset($_COOKIE['remember'])){
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
    <link rel="stylesheet" href="css/sekolah.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
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
            <h1>Login</h1>
            
            <label for="nama">username : </label>            
            <div class="username">
                <input type="text" name="nama" placeholder="user123" required><i class="fa-solid fa-users"></i>                
            </div>

            <label for="password">password : </label>
            <div class="password">
                <input type="password" name="password" placeholder="password123" required><i class="fa-solid fa-lock"></i>
            </div>

            <div class="remember-me">
                <label for="nama">Remeber me : </label>
                <input type="checkbox" name="cookie">
            </div>
            <div class="submit-button">
                <input type="submit" name="confirm" value="LOGIN">
            </div>
            <div class="form-links">
                <a href="#" class="fa-brands fa-twitter"></a>
                <a href="#" class="fa-brands fa-facebook"></a>
                <a href="#" class="fa-solid fa-envelope"></a>
            </div>
            <div class="register">
                <a href="register.php">Tidak Punya Akun?</a>
            </div>
            <?php
                // mysql
                $sql = mysqli_query($conn,"SELECT nama_user,password_user,level_user FROM data_user");
                if(isset($_POST["confirm"])){
                    while($row = $sql -> fetch_assoc()){
                        $username = $_POST["nama"];
                        $password = $_POST["password"];
                        if($username === $row["nama_user"] && $password === $row["password_user"]){
                            $level = $row["level_user"];
                            $_SESSION["login"] = $username;
                            $_SESSION["level"] = $row['level_user'];
                            if(isset($_POST["cookie"])){
                                setcookie("remember","true", time()+ 25,"/");
                                echo "<script>
                                    alert('Cookie Activated')
                                    window.location.href = 'sekolah.php'
                                    </script>
                                ";
                                exit();
                            }
                            echo "<script>
                                alert('silahkan bersenang-senang :D')
                                window.location.href = 'sekolah.php'
                                </script>
                            ";
                            exit();
                        }else{
                            // echo "<script>alert('try again')</script>";
                            // exit();
                        }
                    
                    }
                }
            ?>
        </form>        
    </main>

</body>
</html>