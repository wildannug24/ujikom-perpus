<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    /* Custom styles */
    .book-card:hover .overlay {
        opacity: 1;
    }
    </style>
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-8 text-center">Laporan Perpustakaan</h1>
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
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Dummy Data, bisa diganti dengan data dinamis dari backend -->
            <div class="book-card relative bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-4">Matematika Dasar</h2>
                    <p class="text-sm text-gray-600">Pengarang: John Doe</p>
                    <p class="text-sm text-gray-600">Jumlah Tersedia: 5</p>
                </div>
                <div class="overlay absolute inset-0 bg-blue-500 opacity-0 hover:opacity-75 transition duration-300">
                    <div class="flex justify-center items-center h-full">
                        <button
                            class="px-4 py-2 bg-white text-blue-500 font-semibold rounded-md hover:bg-blue-100 focus:outline-none focus:bg-blue-100"><a
                                href="peminjaman_buku.php">Pinjam</a></button>
                    </div>
                </div>
            </div>
            <div class="book-card relative bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-4">Fisika Modern</h2>
                    <p class="text-sm text-gray-600">Pengarang: Jane Smith</p>
                    <p class="text-sm text-gray-600">Jumlah Tersedia: 3</p>
                </div>
                <div class="overlay absolute inset-0 bg-blue-500 opacity-0 hover:opacity-75 transition duration-300">
                    <div class="flex justify-center items-center h-full">
                        <button
                            class="px-4 py-2 bg-white text-blue-500 font-semibold rounded-md hover:bg-blue-100 focus:outline-none focus:bg-blue-100"><a
                                href="peminjaman_buku.php">Pinjam</a></button>
                    </div>
                </div>
            </div>
            <div class="book-card relative bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-4">Kimia Organik</h2>
                    <p class="text-sm text-gray-600">Pengarang: Alice Johnson</p>
                    <p class="text-sm text-gray-600">Jumlah Tersedia: 2</p>
                </div>
                <div class="overlay absolute inset-0 bg-blue-500 opacity-0 hover:opacity-75 transition duration-300">
                    <div class="flex justify-center items-center h-full">
                        <button
                            class="px-4 py-2 bg-white text-blue-500 font-semibold rounded-md hover:bg-blue-100 focus:outline-none focus:bg-blue-100"><a
                                href="peminjaman_buku.php">Pinjam</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>