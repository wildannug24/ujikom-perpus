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
        <a href="dashboard_admin.php" class="text-xl font-bold transition duration-300 hover:text-yellow-500">Home</a>
        <a href="about.php" class="text-xl font-bold ml-4 transition duration-300 hover:text-yellow-500">About</a>
        <a href="contact.php" class="text-xl font-bold ml-4 transition duration-300 hover:text-yellow-500">Contact</a>
        <button id="logoutBtn"
            class="text-xl font-bold ml-4 transition duration-300 hover:text-yellow-500">Logout</button>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto flex-grow p-8">
        <h1 class="text-3xl font-bold text-center mb-8">Selamat Datang di Perpustakaan Digital</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
            <a href="peminjaman_buku.php"
                class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center hover:bg-blue-100 transition duration-300">
                <h2 class="text-xl font-semibold mb-2">Peminjaman Buku</h2>
                <p class="text-gray-700">Kelola peminjaman buku oleh anggota.</p>
            </a>
            <a href="ulasan_buku.php"
                class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center hover:bg-blue-100 transition duration-300">
                <h2 class="text-xl font-semibold mb-2">Ulasan Buku</h2>
                <p class="text-gray-700">Lihat ulasan yang diberikan untuk buku.</p>
            </a>
            <a href="generate_laporan.php"
                class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center hover:bg-blue-100 transition duration-300">
                <h2 class="text-xl font-semibold mb-2">Generate Laporan</h2>
                <p class="text-gray-700">Hasilkan laporan tentang aktivitas perpustakaan.</p>
            </a>
        </div>
    </div>

    <!-- Logout Confirmation Modal -->
    <div id="logoutModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <p class="text-xl font-semibold mb-4">Anda yakin ingin keluar?</p>
            <div class="flex justify-center">
                <button id="cancelBtn"
                    class="bg-gray-500 text-white px-4 py-2 mr-4 rounded-lg hover:bg-gray-600 transition duration-300">Batal</button>
                <a href="../login.php"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Logout</a>
            </div>
        </div>
    </div>

    <script>
    const logoutBtn = document.getElementById('logoutBtn');
    const logoutModal = document.getElementById('logoutModal');
    const cancelBtn = document.getElementById('cancelBtn');

    logoutBtn.addEventListener('click', () => {
        logoutModal.classList.remove('hidden');
    });

    cancelBtn.addEventListener('click', () => {
        logoutModal.classList.add('hidden');
    });
    </script>

    <!-- Footer -->
    <div class="bg-blue-500 text-white py-4 text-center">
        &copy; 2024 Perpustakaan Digital
    </div>

</body>

</html>