<?php
include "koneksi.php";

if (isset($_POST['register'])) {

    // ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek username di database
    $cek = mysqli_query(
        $koneksi,
        "SELECT * FROM users WHERE username='$username'"
    );

    // kalau username sudah ada
    if (mysqli_num_rows($cek) > 0) {

        echo "<script>alert('Username sudah dipakai!');</script>";
    } else {

        // kalau belum ada, simpan ke database
        mysqli_query(
            $koneksi,
            "INSERT INTO users (username, password)
            VALUES ('$username', '$password')"
        );

        echo "<script>
            alert('Register berhasil!');
            window.location='login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="hp">
        <div class="form">
            <h2 class="login">REGISTER</h2>
            <form method="POST">
                <div class="input">
                    <input name="username" placeholder="username">
                </div>

                <div class="input">
                    <input type="password" name="password" placeholder="password">
                </div>

                <button name="register">REGISTER</button>
            </form>

            <a href="login.php"
                style="display:block;text-align:center;margin-top:10px;">
                sudah punya akun? login
            </a>
        </div>
    </div>

</body>

</html>