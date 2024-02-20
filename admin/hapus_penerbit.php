<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <div class="bg-blue-500 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold">Dashboard Admin</h1>
            <a href="#" class="text-blue-100 hover:text-blue-200">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">

        <!-- Title -->
        <h2 class="text-2xl font-bold mb-4">Hapus Penerbit</h2>

        <!-- Form -->
        <form action="pendataan_penerbit.php" method="POST" class="bg-white rounded-lg shadow-md p-6">
            <div class="mb-4">
                <label for="penerbit" class="block text-gray-700 font-bold mb-2">Pilih Penerbit yang akan
                    dihapus:</label>
                <select name="penerbit" id="penerbit"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option value="penerbit1">Penerbit 1</option>
                    <option value="penerbit2">Penerbit 2</option>
                    <option value="penerbit3">Penerbit 3</option>
                    <!-- More options can be added dynamically or fetched from database -->
                </select>
            </div>
            <button type="submit"
                class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition duration-300">Hapus</button>
        </form>

    </div>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-4 text-center fixed bottom-0 w-full">
        &copy; 2024 Perpustakaan Digital
    </footer>

</body>

</html>