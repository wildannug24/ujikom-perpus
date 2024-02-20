<?php
// Fungsi untuk mendapatkan daftar buku dari database
function getBooks()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perpustakaan";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mendapatkan daftar buku
    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);

    $buku = [];

    // Memeriksa apakah ada data buku
    if ($result->num_rows > 0) {
        // Mendapatkan data setiap buku
        while ($row = $result->fetch_assoc()) {
            $buku[] = $row;
        }
    }

    // Menutup koneksi
    $conn->close();

    return $buku;
}

// Fungsi untuk menambahkan buku ke database
function addBook($judul_buku, $penulis, $penerbit, $tahun_terbit)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perpustakaan";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk menambahkan buku baru
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES ('$judul_buku', '$penulis', '$penerbit', '$tahun_terbit')";

    // Menjalankan query
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }

    // Menutup koneksi
    $conn->close();
}

// Proses tambah buku jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul_buku = $_POST['bookTitle'];
    $penulis = $_POST['author'];
    $penerbit = $_POST['author'];
    $tahun_terbit = $_POST['publicationYear'];

    // Memanggil fungsi untuk menambahkan buku
    if (addBook($judul_buku, $penulis, $penerbit, $tahun_terbit)) {
        echo "<p class='text-green-600 text-center'>Buku berhasil ditambahkan.</p>";
    } else {
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    flex-grow: 1;
}

h1 {
    text-align: center;
    color: #333;
}

.navbar {
    background-color: #3399ff;
    padding: 30px 0;
    text-align: center;
}

.navbar a {
    text-decoration: none;
    color: #f4f4f4;
    font-weight: bold;
    font-size: 20px;
    margin: 0 50px;
    cursor: pointer;

}

.navbar a:hover {
    text-decoration: underline;
    color: #333;
}

.footer {
    background-color: #3399ff;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<div class="navbar">
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
    <h2 class="text-3xl font-bold mb-3 text-center text-white">Pendataan Buku</h2>

</div>

</ul>
</div>
</div>
</div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300">
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
            <form action="#" method="post">
                <div class="mb-4">
                    <label for="bookTitle" class="block text-gray-700 font-semibold mb-2">Judul Buku:</label>
                    <input type="text" id="bookTitle" name="bookTitle" required
                        class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="author" class="block text-gray-700 font-semibold mb-2">Penulis:</label>
                    <input type="text" id="author" name="author"
                        class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="genre" class="block text-gray-700 font-semibold mb-2">Penerbit:</label>
                    <input type="text" id="genre" name="genre"
                        class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="publicationYear" class="block text-gray-700 font-semibold mb-2">Tahun Terbit:</label>
                    <input type="text" id="publicationYear" name="publicationYear"
                        class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">Tambahkan
                    Buku</button>
            </form>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h2 class="text-2xl font-bold mb-4 text-center">Daftar Buku</h2>
        <table class="min-w-full bg-white">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Judul Buku</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Penulis</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Penerbit</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tahun Terbit</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <!-- Loop untuk menampilkan data buku -->
                <?php
                // Inisialisasi variabel $buku dengan data buku yang sesuai
                $buku = array(
                    array('id' => 1, 'judul_buku' => 'Judul Buku 1', 'penulis' => 'Penulis 1', 'penerbit' => 'Penerbit 1', 'tahun_terbit' => '2021'),
                    array('id' => 2, 'judul_buku' => 'Judul Buku 2', 'penulis' => 'Penulis 2', 'penerbit' => 'Penerbit 2', 'tahun_terbit' => '2020'),
                    // Tambahkan data buku lainnya sesuai kebutuhan
                );
                ?>
                <?php foreach ($buku as $buku_item) : ?>
                <tr>
                    <td class="text-left py-3 px-4"><?php echo $buku_item['judul_buku']; ?></td>
                    <td class="text-left py-3 px-4"><?php echo $buku_item['penulis']; ?></td>
                    <td class="text-left py-3 px-4"><?php echo $buku_item['penerbit']; ?></td>
                    <td class="text-left py-3 px-4"><?php echo $buku_item['tahun_terbit']; ?></td>
                    <td class="text-left py-3 px-4">
                        <a href="edit_buku.php?id=<?php echo $buku_item['id']; ?>"
                            class="text-blue-500 hover:text-blue-700">Edit</a>
                        <form action="hapus_buku.php" method="POST" class="inline">
                            <input type="hidden" name="id" value="<?php echo $buku_item['id']; ?>">
                            <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="tambah_buku.php"
            class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">Tambah
            Buku</a>
    </div>
</body>

</html>





<!DOCTYPE html>
<html lang="en">
<style>
.footer {
    background-color: #3399ff;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
</style>
<div class="footer">
    &copy; 2024 Perpustakaan Digital
</div>
</ul>
</div>
</div>
</div>
</body>

</html>