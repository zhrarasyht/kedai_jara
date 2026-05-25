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
    <title>Detail</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="hp">
        <div class="header">

            <a href="menu.php" style="color:white;">
                <i class="fa fa-arrow-left"></i>
            </a>

            <i class="fa fa-bell notif"></i>

            <h2>DETAILS</h2>
        </div>

        <img
            src="assets/<?php echo $data['gambar']; ?>"
            class="gambar">

        <div class="detail">
            <h2>
                <?php echo $data['nama_product']; ?>
            </h2>

            <div class="harga">
                Rp. <?php echo number_format($data['harga']); ?>
            </div>

            <p class="desc">
                <?php echo $data['deskripsi']; ?>
            </p>

            <a
                href="order.php?id=<?php echo $data['id']; ?>"
                class="checkout">
                ADD TO CART
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
</body>
</html>