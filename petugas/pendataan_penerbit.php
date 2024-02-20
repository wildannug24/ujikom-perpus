<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-300 to-blue-300">
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
    <div class="container mx-auto p-8">
        <h2 class="text-4xl font-bold mb-4 text-center text-gray">Pendataan Penerbit</h2>
        <div class="mb-4">
            <a href="tambah_penerbit.php"
                class="inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">Tambah
                Penerbit</a>
        </div>
        <table class="min-w-full bg-white">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama Penerbit</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Telepon</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <!-- Loop untuk menampilkan data penerbit -->
                <?php
                // Koneksi ke database dan query untuk mengambil data penerbit
                // Misalnya:
                // $conn = new mysqli($servername, $username, $password, $dbname);
                // $sql = "SELECT * FROM penerbit";
                // $result = $conn->query($sql);

                // while ($row = $result->fetch_assoc()) :
                //     // Tampilkan data penerbit
                // endwhile;
                ?>
                <!-- Contoh data penerbit statis -->
                <?php
                $penerbit = array(
                    array('nama' => 'Penerbit A', 'alamat' => 'Alamat A', 'telepon' => '123456789', 'email' => 'penerbita@example.com'),
                    array('nama' => 'Penerbit B', 'alamat' => 'Alamat B', 'telepon' => '987654321', 'email' => 'penerbitb@example.com'),
                    // Tambahkan data penerbit lainnya sesuai kebutuhan
                );
                ?>
                <?php foreach ($penerbit as $penerbit_item) : ?>
                <tr>
                    <td class="text-left py-3 px-4"><?php echo $penerbit_item['nama']; ?></td>
                    <td class="text-left py-3 px-4"><?php echo $penerbit_item['alamat']; ?></td>
                    <td class="text-left py-3 px-4"><?php echo $penerbit_item['telepon']; ?></td>
                    <td class="text-left py-3 px-4"><?php echo $penerbit_item['email']; ?></td>
                    <td class="text-left py-3 px-4">
                        <a href="edit_penerbit.php?id=<?php echo $buku_item['id']; ?>"
                            class="text-blue-500 hover:text-blue-700">Edit</a>
                        <form action="hapus_penerbit.php" method="POST" class="inline">
                            <input type="hidden" name="id" value="<?php echo $buku_item['id']; ?>">
                            <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>