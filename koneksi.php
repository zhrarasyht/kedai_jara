<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "kedai_jara"
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}