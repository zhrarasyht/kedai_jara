<?php
session_start();
include 'koneksi.php';

$user = $_SESSION['username'];

$query = mysqli_query($koneksi, "SELECT * FROM product");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="hp">

        <div class="header">

            <i class="fa fa-bars"></i>

            <i class="fa fa-bell notif"></i>

            <h2>
                Hi, <?php echo $user; ?>
            </h2>
        </div>

        <div class="menu">
            <?php while ($data = mysqli_fetch_assoc($query)) { ?>

                <a href="detail.php?id=<?php echo $data['id']; ?>" class="card">

                    <img src="assets/<?php echo $data['gambar']; ?>">

                    <div class="isi">

                        <h3><?php echo $data['nama_product']; ?></h3>

                        <p><?php echo $data['deskripsi']; ?></p>

                        <div class="harga">
                            Rp. <?php echo number_format($data['harga']); ?>
                        </div>
                    </div>
                    <i class="fa fa-chevron-right panah"></i>
                </a>

            <?php } ?>
        </div>

        <div class="nav">
            <a href="menu.php">
                <i class="fa fa-house"></i>
            </a>

            <a href="#">
                <i class="fa fa-cart-shopping"></i>
            </a>

            <a href="logout.php">
                <i class="fa fa-right-from-bracket"></i>
            </a>
        </div>
    </div>

</body>

</html>