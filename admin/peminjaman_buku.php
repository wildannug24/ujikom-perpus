<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $servername = "localhost"; // Ganti dengan nama server Anda
    $username = "root"; // Ganti dengan nama pengguna MySQL Anda
    $password = ""; // Ganti dengan kata sandi MySQL Anda
    $dbname = "perpustakaan"; // Ganti dengan nama database Anda

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Tetapkan nilai perpus_id dan user_id
    $perpus_id = "nilai_perpus_id_tetap";
    $user_id = "nilai_user_id_tetap";

    // Mengambil data dari form
    $judul_buku = $_POST['bookTitle'];
    $tanggal_peminjaman = $_POST['borrowDate'];
    $tanggal_pengembalian = $_POST['returnDate'];
    $status_pinjam = $_POST['status'];
    $catatan = $_POST['notes'];

    // Query untuk menyimpan data ke dalam tabel peminjaman
    $sql = "INSERT INTO peminjaman (peminjaman_id, perpus_id, tanggal_pinjam, tanggal_kembali, status_pinjam, catatan, user_id)
VALUES ('$judul_buku', '$perpus_id', '$tanggal_peminjaman', '$tanggal_pengembalian', '$status_pinjam', '$catatan', '$user_id')";



    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    .back-text {
        opacity: 0;
        transition: opacity 0.3s;
    }

    .back-button:hover .back-text {
        opacity: 1;
    }
    </style>
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300">
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
            <!-- Tombol untuk kembali ke halaman dashboard_admin.php -->
            <button onclick="window.location.href='dashboard_admin.php'"
                class="bg-gray-800 text-white rounded-full h-8 w-8 absolute top-0 left-0 m-4 flex justify-center items-center hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">
                <span
                    class="back-text absolute bg-gray-900 text-white text-xs px-2 py-1 rounded-md bottom-full left-1/2 transform -translate-x-1/2 -translate-y-2 opacity-0 transition duration-300 ease-in-out">Kembali</span>
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-3.02L6.77 9.22a.75.75 0 0 1-1.06-1.06l4.47-4.5a.75.75 0 0 1 1.06 0l4.47 4.5a.75.75 0 1 1-1.06 1.06L11.75 5.23v3.02a.75.75 0 1 1-1.5 0v-4.5A.75.75 0 0 1 10 3z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <h2 class="text-2xl font-bold mb-4 text-center">Peminjaman Buku</h2>
            <form action="#" method="post">
                <div class="mb-4">
                    <label for="bookTitle" class="block text-gray-700 font-semibold mb-2">ID Buku:</label>
                    <input type="text" id="bookTitle" name="bookTitle" required
                        class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="borrowDate" class="block text-gray-700 font-semibold mb-2">Tanggal Peminjaman:</label>
                    <input type="date" id="borrowDate" name="borrowDate" required
                        class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="returnDate" class="block text-gray-700 font-semibold mb-2">Tanggal Pengembalian:</label>
                    <input type="date" id="returnDate" name="returnDate" required
                        class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Status Pinjam:</label>
                    <div class="flex">
                        <label for="statusDipinjam" class="mr-2">
                            <input type="radio" id="statusDipinjam" name="status" value="Dipinjam" required
                                class="mr-1 focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                            Dipinjam
                        </label>
                        <label for="statusDibaca">
                            <input type="radio" id="statusDibaca" name="status" value="Dibaca" required
                                class="mr-1 focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                            Dibaca
                        </label>
                    </div>
                </div>


                <div class="mb-4">
                    <label for="notes" class="block text-gray-700 font-semibold mb-2">Catatan:</label>
                    <textarea id="notes" name="notes" rows="4"
                        class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">Pinjam
                    Buku</button>
            </form>
        </div>
    </div>
</body>

</html>