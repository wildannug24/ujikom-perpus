<?php
// Pastikan untuk memuat konfigurasi database dan fungsi-fungsi lain yang diperlukan di sini

// Pastikan untuk memeriksa apakah parameter id telah diterima dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query SQL untuk menghapus buku dari database berdasarkan id
    // Misalnya:
    // $sql = "DELETE FROM buku WHERE id = $id";

    // Cek apakah query berhasil dijalankan
    // if ($conn->query($sql) === TRUE) {
    //     echo "Buku berhasil dihapus";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // Pastikan untuk menutup koneksi ke database jika sudah tidak diperlukan
    // $conn->close();

    // Redirect pengguna ke halaman daftar buku setelah buku dihapus
    header("Location: pendataan_buku.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Penerbit - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-300 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="dashboard_admin.php" class="text-white font-bold">Dashboard</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto my-8 px-4 flex-grow">
        <h1 class="text-3xl font-bold mb-4">Hapus Buku</h1>
        <div class="bg-white shadow-md rounded px-8 py-6">
            <p class="text-lg text-gray-700 mb-4">Apakah Anda yakin ingin menghapus buku ini?</p>
            <div class="flex justify-end">
                <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2">Hapus</button>
                <a href="dashboard_petugas.php"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Batal</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-4 text-center">
        &copy; 2024 Perpustakaan Digital
    </footer>

</body>

</html>