<!DOCTYPE html>
<html>
<head>

    <title>Order</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

</head>
<body>

<div class="hp">

    <div class="header">

        <a href="detail.php" style="color:white;">
            <i class="fa fa-arrow-left"></i>
        </a>

        <i class="fa fa-cart-shopping cart"></i>

        <h2>ORDER DETAILS</h2>

    </div>

    <div class="detail">

        <div class="box">

            <img src="assets/miejawa.png">

            <div class="box-isi">

                <h3>Mie Djawa</h3>

                <p>Rp. 50.000</p>

            </div>

        </div>

        <div class="qty">

            <span onclick="minus()">-</span>

            <span id="angka">1</span>

            <span onclick="plus()">+</span>

        </div>

        <div class="total">
            Total Harga : Rp. 50.000
        </div>

        <a href="success.php" class="checkout">
            CHECKOUT
        </a>

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