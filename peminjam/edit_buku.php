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

// Fungsi untuk mengupdate buku dalam koleksi
if (isset($_POST['update_buku'])) {
    $koleksi_id = $_POST['koleksi_id'];
    $judul = $_POST['judul'];

    $sql = "UPDATE $table_name SET judul='$judul' WHERE koleksi_id=$koleksi_id";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Buku berhasil diperbarui');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

// Mendapatkan ID buku yang akan diedit dari parameter URL
if (isset($_GET['id'])) {
    $koleksi_id = $_GET['id'];

    // Query untuk mendapatkan data buku berdasarkan ID
    $sql = "SELECT * FROM $table_name WHERE koleksi_id=$koleksi_id";
    $result = mysqli_query($koneksi, $sql);

    // Memeriksa apakah query berhasil dieksekusi dan menghasilkan satu baris data
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Buku tidak ditemukan');</script>";
        exit();
    }
} else {
    echo "<script>alert('ID buku tidak disediakan');</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300 flex flex-col min-h-screen">

    <!-- Navbar -->
    <div class="bg-blue-500 text-white py-6 text-center transition duration-300">
        <h1 class="text-xl font-bold">Edit Buku</h1>
    </div>

    <!-- Form untuk mengedit buku -->
    <div class="mt-8">
        <form action="" method="POST" class="w-1/2 mx-auto">
            <input type="hidden" name="koleksi_id" value="<?php echo $koleksi_id; ?>">
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-bold mb-2">Judul:</label>
                <input type="text" id="judul" name="judul" class="w-full p-2 border rounded"
                    value="<?php echo isset($judul) ? $judul : ''; ?>">
            </div>
            <button type="submit" name="update_buku"
                class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">Simpan
                Perubahan</button>
        </form>
    </div>

</body>

</html>

<?php
//   Menutup koneksi database
mysqli_close($koneksi);
?>