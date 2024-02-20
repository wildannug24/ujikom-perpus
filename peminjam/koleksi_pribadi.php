<?php
// Memulai sesi
session_start();

$servername = "localhost";  // Nama server database
$username = "root";         // Nama pengguna database
$password = "";             // Kata sandi database
$dbname = "perpustakaan";   // Nama database
$table_name = "koleksi_pribadi"; // Nama tabel koleksi_pribadi

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Fungsi untuk menambahkan buku ke koleksi
if (isset($_POST['tambah_buku'])) {

    $sql = "INSERT INTO $table_name (created_at) VALUES (NOW())";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Buku berhasil ditambahkan');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

// Fungsi untuk menghapus buku dari koleksi
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $sql = "DELETE FROM $table_name WHERE koleksi_id=$id";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Buku berhasil dihapus');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

// Query untuk mengambil data dari tabel koleksi_pribadi
$sql = "SELECT * FROM $table_name";
$result = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300 flex flex-col min-h-screen">

    <!-- Navbar -->
    <div class="bg-blue-500 text-white py-6 text-center transition duration-300">
        <h1 class="text-xl font-bold">Koleksi Pribadi</h1>
    </div>

    <!-- Tabel untuk menampilkan koleksi buku -->
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
        <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2">Koleksi ID</th>
                <th class="border border-gray-300 px-4 py-2">User ID</th>
                <th class="border border-gray-300 px-4 py-2">Buku ID</th>
                <th class="border border-gray-300 px-4 py-2">Created At</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through each row in the result set
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td class="border border-gray-300 px-4 py-2">' . $row['koleksi_id'] . '</td>';
                    echo '<td class="border border-gray-300 px-4 py-2">' . $row['user_id'] . '</td>';
                    echo '<td class="border border-gray-300 px-4 py-2">' . $row['buku_id'] . '</td>';
                    echo '<td class="border border-gray-300 px-4 py-2">' . $row['created_at'] . '</td>';
                    echo '<td class="border border-gray-300 px-4 py-2">';
                    echo '<a href="edit_buku.php?id=' . $row['koleksi_id'] . '" class="text-blue-500">Edit</a>';
                    echo ' | ';
                    echo '<a href="?hapus=' . $row['koleksi_id'] . '" class="text-red-500">Hapus</a>';
                    echo '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr>';
                echo '<td class="border border-gray-300 px-4 py-2" colspan="5">Tidak ada data koleksi.</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>


    <!-- Form untuk menambahkan buku baru -->
    <div class="mt-8">
        <h2 class="text-xl font-semibold mb-2">Tambah Buku Baru</h2>
        <form action="" method="POST">
            <div class="grid grid-cols-3 gap-4">
                <!-- Input untuk koleksi_id (disediakan oleh sistem) -->
                <div>
                    <input type="text" name="koleksi_id" placeholder="Koleksi ID"
                        class="mb-2 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <!-- Input untuk buku_id (disediakan oleh sistem) -->
                <div>
                    <input type="text" name="buku_id" placeholder="Buku ID"
                        class="mb-2 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <!-- Input untuk judul (dapat diubah oleh pengguna) -->
                <!-- Anda dapat menyertakan validasi di sini jika diperlukan -->
                <div>
                    <input type="text" name="judul" placeholder="Judul"
                        class="mb-2 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <!-- Tombol untuk menambahkan buku -->
                <div>
                    <button type="submit" name="tambah_buku"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Tambah
                        Buku</button>
                </div>
            </div>
        </form>
    </div>

    </div>

</body>

</html>

<?php
// Menutup koneksi database
mysqli_close($koneksi);
?>