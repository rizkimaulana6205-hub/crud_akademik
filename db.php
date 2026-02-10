<?php
// Menghindari fatal error jika koneksi gagal (agar pesan echo kita muncul)
mysqli_report(MYSQLI_REPORT_OFF);

$koneksi = mysqli_connect("localhost", "iky", "passwordku", "akademiik");

if (!$koneksi) {
    die("Koneksi gagal bro: " . mysqli_connect_error());
}


?>