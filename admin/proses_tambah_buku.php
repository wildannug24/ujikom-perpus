<?php
// Buat koneksi ke database (ganti dengan informasi koneksi yang sesuai)
$servername = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir tambah_buku.php
$buku_id = $_POST['buku_id'];
$perpus_id = $_POST['perpus_id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

// Query SQL untuk menyimpan data ke dalam tabel buku
$sql = "INSERT INTO buku (buku_id, perpus_id, judul, penulis, tahun_terbit, kategori) VALUES ('$buku_id', '$perpus_id', '$judul', '$penulis', '$tahun_terbit', '$kategori')";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    // Redirect to login page after successful registration
    header("Location: tambah_buku.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();