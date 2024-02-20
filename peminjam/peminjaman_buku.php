<?php
// Tangani permintaan penyimpanan buku yang dipinjam
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pinjam'])) {
    // Periksa apakah buku_id telah dikirimkan
    if (isset($_POST['buku_id'])) {
        // Tangkap data buku yang dipilih
        $buku_id = $_POST['buku_id'];

        // Ambil informasi buku dari database
        $sql_select_buku = "SELECT * FROM daftar_buku WHERE buku_id = '$buku_id'";
        $result_select_buku = $conn->query($sql_select_buku);

        if ($result_select_buku->num_rows > 0) {
            // Ambil data buku dari hasil query
            $row = $result_select_buku->fetch_assoc();
            $judul = $row['judul'];
            $penulis = $row['penulis'];
            $penerbit = $row['penerbit'];
            $tahun_terbit = $row['tahun_terbit'];
            $kategori_id = $row['kategori_id'];

            // Masukkan data buku yang dipinjam ke dalam tabel buku
            $sql_insert_buku = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, kategori_id)
VALUES ('$judul', '$penulis', '$penerbit', '$tahun_terbit', '$kategori_id')";

            if ($conn->query($sql_insert_buku) === TRUE) {
                // Setelah penyimpanan berhasil, tampilkan hasil peminjaman buku dalam tabel di bawah
                $tanggal_peminjaman = date("Y-m-d");
                echo "
<tr class='border-b border-gray-200 hover:bg-gray-100'>
    <td class='py-3 px-6 text-left whitespace-nowrap'>$penulis</td>
    <td class='py-3 px-6 text-left whitespace-nowrap'>$penerbit</td>
    <td class='py-3 px-6 text-left whitespace-nowrap'>$tahun_terbit</td>
    <td class='py-3 px-6 text-left whitespace-nowrap'>$tanggal_peminjaman</td>
    <td class='py-3 px-6 text-left whitespace-nowrap'>
        <a href='#' class='text-indigo-600 hover:text-indigo-900'>Kembalikan</a>
    </td>
</tr>
";
            } else {
                echo "Error: " . $sql_insert_buku . "<br>" . $conn->error;
            }
        } else {
            echo "Buku tidak ditemukan dalam database.";
        }
    } else {
        echo "Tidak ada buku yang dipilih.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-300">

    <!-- Navbar -->
    <div class="bg-blue-500 text-white py-6 text-center">
        <!-- Tombol untuk kembali ke halaman dashboard_admin.php -->
        <button onclick="window.location.href='dashboard.php'"
            class="bg-gray-900 text-white rounded-full h-8 w-8 absolute top-0 left-0 m-4 flex justify-center items-center hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">
            <span
                class="back-text absolute bg-gray-900 text-white text-xs px-2 py-1 rounded-md bottom-full left-1/2 transform -translate-x-1/2 -translate-y-2 opacity-0 transition duration-300 ease-in-out">Kembali</span>
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-3.02L6.77 9.22a.75.75 0 0 1-1.06-1.06l4.47-4.5a.75.75 0 0 1 1.06 0l4.47 4.5a.75.75 0 1 1-1.06 1.06L11.75 5.23v3.02a.75.75 0 1 1-1.5 0v-4.5A.75.75 0 0 1 10 3z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <h1 class="text-3xl font-bold">Peminjaman Buku</h1>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">

        <!-- Book List -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Book Item -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">Judul Buku 1</h2>
                <p class="text-gray-700 mb-2">Penulis: Penulis Buku 1</p>
                <p class="text-gray-700 mb-2">Penerbit: Penerbit Buku 1</p>
                <p class="text-gray-700 mb-2">Tahun Terbit: 2022</p>
                <button class=" bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition
                    duration-300">Pinjam
                    Buku</button>
            </div>

            <!-- Book Item -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">Judul Buku 2</h2>
                <p class="text-gray-700 mb-2">Penulis: Penulis Buku 2</p>
                <p class="text-gray-700 mb-2">Penerbit: Penerbit Buku 2</p>
                <p class="text-gray-700 mb-2">Tahun Terbit: 2021</p>
                <button
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Pinjam
                    Buku</button>
            </div>

            <!-- Book Item -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">Judul Buku 3</h2>
                <p class="text-gray-700 mb-2">Penulis: Penulis Buku 3</p>
                <p class="text-gray-700 mb-2">Penerbit: Penerbit Buku 3</p>
                <p class="text-gray-700 mb-2">Tahun Terbit: 2020</p>
                <button
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Pinjam
                    Buku</button>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto mt-8">
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Penulis</th>
                        <th class="py-3 px-6 text-left">Penerbit</th>
                        <th class="py-3 px-6 text-left">Tahun Terbit</th>
                        <th class="py-3 px-6 text-left">Tanggal Peminjaman</th>
                        <th class="py-3 px-6 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <!-- Contoh baris data -->
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">John Doe</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">Publisher X</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">2022</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">2024-02-20</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Kembalikan</a>
                        </td>
                    </tr>
                    <!-- Contoh baris data lainnya -->
                    <!-- <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">Jane Doe</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">Publisher Y</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">2021</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">2024-02-19</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Kembalikan</a>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>

    </div>

    <!-- Footer -->
    <div class="bg-blue-500 text-white py-4 text-center fixed bottom-0 w-full">
        &copy; 2024 Perpustakaan Digital
    </div>

</body>

</html>