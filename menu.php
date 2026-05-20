<?php
session_start();
$user = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>

    <title>Menu</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

</head>
<body>

<div class="hp">

    <div class="header">

        <i class="fa fa-bars"></i>

        <a href="logout.php" class="logout">
            <i class="fa fa-right-from-bracket"></i>
        </a>

        <h2>
            Hi, <?php echo $user; ?>
        </h2>

    </div>

    <div class="menu">

        <!-- MIE DJAWA -->
        <a href="detail.php" class="card">

            <img src="assets/miejawa.png">

            <div class="isi">

                <h3>Mie Djawa</h3>

                <p>
                    Mie gurih khas jawa
                </p>

                <div class="harga">
                    Rp. 50.000
                </div>

            </div>

            <i class="fa fa-chevron-right panah"></i>

        </a>

        <!-- ICED CHOCOLATE -->
        <div class="card">

            <img src="assets/icedchoco.png">

            <div class="isi">

                <h3>Iced Chocolate</h3>

                <p>
                    Minuman coklat dingin
                </p>

                <div class="harga">
                    Rp. 25.000
                </div>

            </div>

            <i class="fa fa-chevron-right panah"></i>

        </div>

        <!-- SINGKONG -->
        <div class="card">

            <img src="assets/singkong.png">

            <div class="isi">

                <h3>Singkong Crispy</h3>

                <p>
                    Cemilan renyah gurih
                </p>

                <div class="harga">
                    Rp. 20.000
                </div>

            </div>

            <i class="fa fa-chevron-right panah"></i>

        </div>

    </div>

    <div class="nav">

        <i class="fa fa-house"></i>

        <i class="fa fa-heart"></i>

        <i class="fa fa-cart-shopping"></i>

        <i class="fa fa-bell"></i>

    </div>

</div>

</body>
</html>