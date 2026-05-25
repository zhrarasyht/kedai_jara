<?php

include 'koneksi.php';

if (!isset($_GET['id'])) {
    die("ID product tidak ditemukan");
}

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM product WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data product tidak ada");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Order</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="hp">
        <div class="header">

            <a href="detail.php?id=<?php echo $data['id']; ?>"
                style="color:white;">
                <i class="fa fa-arrow-left"></i>
            </a>

            <i class="fa fa-bell notif"></i>

            <h2>ORDER DETAILS</h2>
        </div>

        <div class="order">
            <div class="box">
                <img src="assets/<?php echo $data['gambar']; ?>">

                <div class="box-isi">

                    <h3>
                        <?php echo $data['nama_product']; ?>
                    </h3>

                    <p>
                        Rp. <?php echo number_format($data['harga']); ?>
                    </p>
                </div>

                <div class="qty-order">
                    <span onclick="minus()">-</span>
                    <span id="angka" class="nilai">1</span>
                    <span onclick="plus()">+</span>
                </div>
            </div>

            <div class="total">

                <span>Total Harga</span>

                <span class="total-harga">
                    Rp. <span id="total">
                        <?php echo number_format($data['harga']); ?>
                    </span>
                </span>
            </div>

            <a href="success.php" class="checkout-order">
                CHECKOUT
            </a>

        </div>

        <div class="nav">
            <a href="menu.php">
                <i class="fa fa-house"></i>
            </a>

            <a href="order.php?id=<?php echo $data['id']; ?>">
                <i class="fa fa-cart-shopping"></i>
            </a>

            <a href="logout.php">
                <i class="fa fa-right-from-bracket"></i>
            </a>
        </div>

    </div>

    <script>
        let qty = 1;
        let harga = <?php echo $data['harga']; ?>;

        function plus() {
            qty++;
            document.getElementById("angka").innerHTML = qty;
            totalHarga();
        }

        function minus() {
            if (qty > 1) {
                qty--;
            }
            document.getElementById("angka").innerHTML = qty;
            totalHarga();
        }

        function totalHarga() {
            let total = qty * harga;
            document.getElementById("total").innerHTML =
                total.toLocaleString('id-ID');
        }
    </script>

</body>

</html>