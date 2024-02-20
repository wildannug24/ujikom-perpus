<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penerbit - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="dashboard_admin.php" class="text-white font-bold">Dashboard</a>
            <a href="../login.php" class="text-white">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto my-8 px-4">
        <h1 class="text-3xl font-bold mb-4">Edit Penerbit</h1>
        <div class="bg-white shadow-md rounded px-8 py-6">
            <?php
            // Hubungkan ke database
            $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

            // Periksa koneksi
            if (mysqli_connect_errno()) {
                echo "Koneksi database gagal: " . mysqli_connect_error();
                exit();
            }

            // Query untuk mendapatkan data penerbit yang akan di-edit
            $id_penerbit = $_GET['id']; // Ambil ID penerbit dari URL
            $query = "SELECT * FROM penerbit WHERE id = $id_penerbit";
            $result = mysqli_query($koneksi, $query);
            $penerbit = mysqli_fetch_assoc($result);

            // Jika data penerbit ditemukan
            if ($penerbit) {
            ?>
            <form action="proses_edit_penerbit.php" method="POST">
                <input type="hidden" name="id" value="<?= $penerbit['id']; ?>">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama Penerbit:</label>
                    <input type="text" id="nama" name="nama" value="<?= $penerbit['nama']; ?>"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" value="<?= $penerbit['alamat']; ?>"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
                </div>
            </form>
            <?php
            } else {
                echo "Data penerbit tidak ditemukan.";
            }

            // Tutup koneksi database
            mysqli_close($koneksi);
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-4 text-center">
        &copy; 2024 Perpustakaan Digital
    </footer>

</body>

</html>