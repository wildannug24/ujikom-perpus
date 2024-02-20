<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300 flex flex-col min-h-screen">

    <!-- Navbar -->
    <div class="bg-blue-500 text-white py-6 text-center transition duration-300">
        <a href="dashboard_petugas.php" class="text-xl font-bold transition duration-300 hover:text-yellow-500">Home</a>
        <a href="about.php" class="text-xl font-bold ml-4 transition duration-300 hover:text-yellow-500">About</a>
        <a href="contact.php" class="text-xl font-bold ml-4 transition duration-300 hover:text-yellow-500">Contact</a>
        <a href="../login.php" class="text-xl font-bold ml-4 transition duration-300 hover:text-yellow-500">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto flex-grow p-8">
        <h1 class="text-3xl font-bold text-center mb-8">Selamat Datang di Perpustakaan Digital</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <a href="pendataan_buku.php"
                class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center hover:bg-blue-100 transition duration-300">
                <h2 class="text-xl font-semibold mb-2">Pendataan Buku</h2>
                <p class="text-gray-700">Kelola informasi buku dalam perpustakaan.</p>
            </a>
            <a href="pendataan_penerbit.php"
                class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center hover:bg-blue-100 transition duration-300">
                <h2 class="text-xl font-semibold mb-2">Pendataan Penerbit</h2>
                <p class="text-gray-700">Kelola informasi penerbit buku.</p>
            </a>
            <a href="generate_laporan.php"
                class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center hover:bg-blue-100 transition duration-300">
                <h2 class="text-xl font-semibold mb-2">Generate Laporan</h2>
                <p class="text-gray-700">Hasilkan laporan tentang aktivitas perpustakaan.</p>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-blue-500 text-white py-4 text-center transition duration-300">
        &copy; 2024 Perpustakaan Digital
    </div>

</body>

</html>