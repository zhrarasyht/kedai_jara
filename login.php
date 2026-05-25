<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {

    // ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validasi input kosong
    if ($username == "" || $password == "") {

        echo "<script>alert('Username dan Password wajib diisi!');</script>";
    } else {

        // query cek user
        $query = mysqli_query(
            $koneksi,
            "SELECT * FROM users 
            WHERE username='$username' 
            AND password='$password'"
        );

        $data = mysqli_fetch_assoc($query);

        // jika data ditemukan
        if ($data) {

            $_SESSION['username'] = $data['username'];

            header("Location: menu.php");
            exit();
        } else {

            // jika salah login
            echo "<script>
                alert('Username atau Password salah!');
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>

    <div class="hp">
        <div class="login-atas">
            <img src="assets/kedai rindu.webp" class="logo">
            <h1 class="judul">KEDAI RINDU</h1>
            <p class="text">Meracik rasa, menghidupkan kenangan</p>
        </div>

        <div class="form">
            <h2 class="login">LOGIN</h2>

            <form method="POST">

                <label>Username</label>
                <div class="input">
                    <i class="fa fa-user"></i>
                    <input type="text" name="username" placeholder="username">
                </div>

                <label>Password</label>
                <div class="input">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" placeholder="password">
                </div>

                <button name="login">LOGIN</button>
            </form>

            <div style="text-align:center; font-size:12px; margin-top:15px;">
                Belum punya akun?

                <a href="register.php"
                    style="color:#66754b; font-weight:bold; text-decoration:none; margin-left:5px;">
                    Register
                </a>
            </div>
        </div>
    </div>

</body>

</html>