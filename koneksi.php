<?php
$servername = "localhost";  // Ganti dengan nama server database Anda
$username = "root";     // Ganti dengan nama pengguna database Anda
$password = "";     // Ganti dengan kata sandi database Anda
$dbname = "perpustakaan";  // Ganti dengan nama database Anda

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($koneksi) {

} else {
    echo "Gagal Koneksi";
}