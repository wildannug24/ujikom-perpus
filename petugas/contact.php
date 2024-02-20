<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300">

    <!-- Navbar -->
    <div class="bg-blue-500 text-white py-6 text-center transition duration-300">
        <a href="dashboard_petugas.php" class="text-xl font-bold transition duration-300 hover:text-yellow-300">Home</a>
        <a href="about.php" class="text-xl font-bold ml-4 transition duration-300 hover:text-yellow-300">About</a>
        <a href="contact.php" class="text-xl font-bold ml-4 transition duration-300 hover:text-yellow-300">Contact</a>
        <a href="../login.php" class="text-xl font-bold ml-4 transition duration-300 hover:text-yellow-300">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto flex-grow p-8">\
        <!-- Tombol untuk kembali ke halaman dashboard_admin.php -->
        <button onclick="window.location.href='dashboard_petugas.php'"
            class="bg-gray-800 text-white rounded-full h-8 w-8 absolute top-0 left-0 m-4 flex justify-center items-center hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">
            <span
                class="back-text absolute bg-gray-900 text-white text-xs px-2 py-1 rounded-md bottom-full left-1/2 transform -translate-x-1/2 -translate-y-2 opacity-0 transition duration-300 ease-in-out">Kembali</span>
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-3.02L6.77 9.22a.75.75 0 0 1-1.06-1.06l4.47-4.5a.75.75 0 0 1 1.06 0l4.47 4.5a.75.75 0 1 1-1.06 1.06L11.75 5.23v3.02a.75.75 0 1 1-1.5 0v-4.5A.75.75 0 0 1 10 3z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <h1 class="text-3xl font-bold text-center mb-8">Hubungi Kami</h1>
        <div class="bg-white rounded-lg shadow-lg p-8">
            <p class="text-gray-700 mb-4">Jika Anda memiliki pertanyaan atau memerlukan bantuan, jangan ragu untuk
                menghubungi kami melalui formulir di bawah ini:</p>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-bold mb-2">Nama:</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                        placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                        placeholder="Masukkan alamat email Anda" required>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700 font-bold mb-2">Pesan:</label>
                    <textarea id="pesan" name="pesan"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                        rows="5" placeholder="Tulis pesan Anda di sini" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-6 py-3 rounded-full transition duration-300">Kirim
                        Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-blue-500 text-white py-4 text-center">
        &copy; 2024 Perpustakaan Digital
    </div>

</body>

</html>