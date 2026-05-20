<!DOCTYPE html>
<html>
<head>

    <title>Detail</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

</head>
<body>

<div class="hp">

    <div class="header">

        <a href="menu.php" style="color:white;">
            <i class="fa fa-arrow-left"></i>
        </a>

        <i class="fa fa-cart-shopping cart"></i>

        <h2>DETAILS</h2>

    </div>

    <img src="assets/miejawa.png" class="gambar">

    <div class="detail">

        <h2>Mie Djawa</h2>

        <div class="harga">
            Rp. 50.000
        </div>

        <div class="qty">

            <span onclick="minus()">-</span>

            <span id="angka">1</span>

            <span onclick="plus()">+</span>

        </div>

        <p class="desc">
            Perpaduan mie tradisional dengan
            rempah khas jawa yang gurih dan
            penuh kenangan.
        </p>

        <a href="order.php" class="checkout">
            CHECKOUT
        </a>

    </div>

</div>

</body>
</html>