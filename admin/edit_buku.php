<?php
// Pastikan untuk memuat konfigurasi database dan fungsi-fungsi lain yang diperlukan di sini

// Pastikan untuk memeriksa apakah parameter id telah diterima dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query SQL untuk mengambil informasi buku berdasarkan id
    // Misalnya:
    // $sql = "SELECT * FROM buku WHERE id = $id";
    // $result = $conn->query($sql);

    // Cek apakah buku ditemukan
    // if ($result->num_rows > 0) {
    //     $buku = $result->fetch_assoc();
    //     // Jika buku ditemukan, lanjutkan dengan proses pengeditan
    // } else {
    //     echo "Buku tidak ditemukan";
    //     exit();
    // }

    // Contoh data buku statis (hapus ini jika sudah terkoneksi ke database)
    $buku = array(
        'id' => 1,
        'judul' => 'Judul Buku',
        'penulis' => 'Penulis Buku',
        'tahun_terbit' => '2022',
        'penerbit' => 'Penerbit'
    );
} else {
    echo "Parameter ID tidak diterima";
    exit();
}

// Proses penyimpanan data setelah pengguna mengirimkan form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan pengguna melalui form
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $penerbit = $_POST['penerbit'];

    // Query SQL untuk memperbarui informasi buku di database
    // Misalnya:
    // $sql = "UPDATE buku SET judul = '$judul', penulis = '$penulis', tahun_terbit = '$tahun_terbit', genre = '$genre' WHERE id = $id";

    // Cek apakah query berhasil dijalankan
    // if ($conn->query($sql) === TRUE) {
    //     echo "Informasi buku berhasil diperbarui";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // Pastikan untuk menutup koneksi ke database jika sudah tidak diperlukan
    // $conn->close();

    // Redirect pengguna ke halaman daftar buku setelah pengeditan selesai
    header("Location: pendataan_buku.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300">
    <div class="container mx-auto p-8">
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
        <h2 class="text-2xl font-bold mb-4">Edit Informasi Buku</h2>
        <form action="#" method="post">
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-semibold mb-2">Judul:</label>
                <input type="text" id="judul" name="judul" value="<?php echo $buku['judul']; ?>" required
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="penulis" class="block text-gray-700 font-semibold mb-2">Penulis:</label>
                <input type="text" id="penulis" name="penulis" value="<?php echo $buku['penulis']; ?>" required
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="tahun_terbit" class="block text-gray-700 font-semibold mb-2">Tahun Terbit:</label>
                <input type="text" id="tahun_terbit" name="tahun_terbit" value="<?php echo $buku['tahun_terbit']; ?>"
                    required
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-gray-700 font-semibold mb-2">Penerbit:</label>
                <input type="text" id="genre" name="genre" value="<?php echo $buku['penerbit']; ?>" required
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">Simpan
                Perubahan</button>
        </form>
    </div>
</body>

</html>