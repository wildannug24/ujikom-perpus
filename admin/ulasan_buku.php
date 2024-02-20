<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sambungkan ke database
    $servername = "localhost"; // Ganti dengan nama server Anda
    $username = "root"; // Ganti dengan nama pengguna MySQL Anda
    $password = ""; // Ganti dengan kata sandi MySQL Anda
    $dbname = "perpustakaan"; // Ganti dengan nama database Anda

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Tangkap data dari formulir
    $reviewer_name = $_POST['reviewer-name'];
    $rating = $_POST['rating'];
    $review_content = $_POST['review-content'];

    // Query untuk menyimpan data ke dalam tabel ulasan
    $sql = "INSERT INTO ulasan  (nama_reviewer, rating, ulasan)
    VALUES ('$reviewer_name', '$rating', '$review_content')";

    if ($conn->query($sql) === TRUE) {
        echo "Ulasan berhasil dikirim.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Buku</title>
    <!-- Tambahkan link stylesheet untuk Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300 font-sans">

    <header class="bg-blue-500 text-white py-4 text-center">
        <h1 class="text-2xl font-bold">Ulasan Buku</h1>
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
    </header>

    <main class="container mx-auto my-8 p-8 bg-white rounded shadow-lg">

        <div class="flex items-center justify-between mb-8">
            <div class="w-2/3">
                <h2 class="text-2xl font-bold mb-2">Buku Hebat</h2>
                <p class="text-gray-600">Penulis: John Doe</p>
                <p class="text-gray-600">Genre: Fiksi</p>
                <p class="text-gray-600">Tahun Terbit: 2022</p>
            </div>
            <div class="w-1/3">
                <!-- Anda dapat menambahkan gambar sampul buku di sini -->
            </div>
        </div>

        <div class="bg-gray-100 p-6 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4">Tulis Ulasan</h2>
            <form>
                <div class="mb-4">
                    <label for="reviewer-name" class="block text-gray-700 font-bold mb-2">Nama Anda:</label>
                    <input type="text" id="reviewer-name" name="reviewer-name" class="w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="rating" class="block text-gray-700 font-bold mb-2">Rating:</label>
                    <select id="rating" name="rating" class="w-full p-2 border rounded">
                        <option value="5">5 Bintang</option>
                        <option value="4">4 Bintang</option>
                        <option value="3">3 Bintang</option>
                        <option value="2">2 Bintang</option>
                        <option value="1">1 Bintang</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="review-content" class="block text-gray-700 font-bold mb-2">Ulasan Anda:</label>
                    <textarea id="review-content" name="review-content" rows="4"
                        class="w-full p-2 border rounded"></textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition
duration-300 ease-in-out">Kirim Ulasan</button>
            </form>
        </div>
    </main>

</body>

</html>