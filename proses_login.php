<?php
// Koneksi ke database (sesuaikan dengan koneksi Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa login
$sql = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Pengguna ditemukan, ambil daTa
    $row = $result->fetch_assoc();
    $storedPassword = $row['password'];
    
    // Verifikasi password dengan password_verify
    if (password_verify($password, $storedPassword)) {
        // Password benar, ambil access_level
        $accessLevel = $row['access_level'];

        // Arahkan pengguna ke halaman yang sesuai berdasarkan access_level
        if ($accessLevel === 'admin') {
            header("Location: ./admin/dashboard_admin.php");
            exit();
        } elseif ($accessLevel === 'petugas') {
            header("Location: ./petugas/dashboard_petugas.php");
            exit();
        } elseif ($accessLevel === 'user') {
            header("Location: ./peminjam/dashboard.php");
            exit();
        }
    }
    else {
        echo var_dump($accessLevel);
    }
}

// Jika login gagal atau password tidak valid
//header("Location: login.php?error=1");
exit();