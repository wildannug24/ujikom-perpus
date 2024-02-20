<?php
// Periksa apakah permintaan dikirim dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah ID buku telah disertakan dalam permintaan
    if (isset($_POST['buku_id'])) {
        // Sambungkan ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "perpustakaan";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Gunakan metode persiapan statement untuk mencegah SQL injection
        $sql = "DELETE FROM buku WHERE buku_id = ?";
        
        // Persiapkan pernyataan SQL
        $stmt = $conn->prepare($sql);
        
        // Ikat parameter ke pernyataan
        $stmt->bind_param("i", $_POST['buku_id']);
        
        // Jalankan pernyataan
        if ($stmt->execute()) {
            echo "Buku berhasil dihapus.";
        } else {
            echo "Gagal menghapus buku.";
        }

        // Tutup koneksi
        $stmt->close();
        $conn->close();
    } else {
        echo "ID buku tidak ditemukan.";
    }
} else {
    echo "Permintaan tidak valid.";
}