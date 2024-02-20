<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300">

    <div class="flex justify-center items-center h-screen">
        <form class="bg-white p-8 rounded shadow-md w-full sm:w-96">
            <!-- Tombol untuk kembali ke halaman dashboard_admin.php -->
            <button onclick="window.location.href='dashboard_petugas.php'"
                class="bg-gray-900 text-white rounded-full h-8 w-8 absolute top-0 left-0 m-4 flex justify-center items-center hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">
                <span
                    class="back-text absolute bg-gray-900 text-white text-xs px-2 py-1 rounded-md bottom-full left-1/2 transform -translate-x-1/2 -translate-y-2 opacity-0 transition duration-300 ease-in-out">Kembali</span>
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-3.02L6.77 9.22a.75.75 0 0 1-1.06-1.06l4.47-4.5a.75.75 0 0 1 1.06 0l4.47 4.5a.75.75 0 1 1-1.06 1.06L11.75 5.23v3.02a.75.75 0 1 1-1.5 0v-4.5A.75.75 0 0 1 10 3z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <h2 class="text-2xl font-semibold mb-4 text-center">Tambah Buku Baru</h2>
            <form action="proses_tambah_buku.php" method="POST">
                <div class="mb-4">
                    <label for="judul" class="block mb-1">Buku ID:</label>
                    <input type="text" id="judul" name="judul" required
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="judul" class="block mb-1">Perpus ID:</label>
                    <input type="text" id="judul" name="judul" required
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="judul" class="block mb-1">Judul:</label>
                    <input type="text" id="judul" name="judul" required
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="penulis" class="block mb-1">Penulis:</label>
                    <input type="text" id="penulis" name="penulis" required
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="tahun_terbit" class="block mb-1">Tahun Terbit:</label>
                    <input type="number" id="tahun_terbit" name="tahun_terbit" min="0" required
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="kategori" class="block mb-1">Kategori:</label>
                    <input type="text" id="kategori" name="kategori" required
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded focus:outline-none focus:bg-blue-600">
                        Tambah Buku
                    </button>
                </div>
            </form>
    </div>

</body>

</html>