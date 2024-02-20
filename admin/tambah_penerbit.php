<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300">
    <div class="container mx-auto p-8">
        <!-- Tombol untuk kembali ke halaman dashboard_admin.php -->
        <button onclick="window.location.href='pendataan_penerbit.php'"
            class="bg-gray-800 text-white rounded-full h-8 w-8 absolute top-0 left-0 m-4 flex justify-center items-center hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">
            <span
                class="back-text absolute bg-gray-900 text-white text-xs px-2 py-1 rounded-md bottom-full left-1/2 transform -translate-x-1/2 -translate-y-2 opacity-0 transition duration-300 ease-in-out">Kembali</span>
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-3.02L6.77 9.22a.75.75 0 0 1-1.06-1.06l4.47-4.5a.75.75 0 0 1 1.06 0l4.47 4.5a.75.75 0 1 1-1.06 1.06L11.75 5.23v3.02a.75.75 0 1 1-1.5 0v-4.5A.75.75 0 0 1 10 3z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <h2 class="text-2xl font-bold mb-4">Tambah Penerbit Baru</h2>
        <form action="pendataan_penerbit.php" method="post">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Penerbit:</label>
                <input type="text" id="nama" name="nama" required
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="alamat" class="block text-gray-700 font-semibold mb-2">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="telepon" class="block text-gray-700 font-semibold mb-2">Telepon:</label>
                <input type="num" id="telepon" name="telepon" required
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">Tambah
                Penerbit</button>
        </form>
    </div>
</body>

</html>