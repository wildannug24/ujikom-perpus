<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Inisialisasi variabel
$username = $email = $password = $nama_lengkap = $no_hp = $alamat = $access_level = '';

// Tangkap data dari formulir registrasi jika metode POST digunakan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : '';
    $nama_lengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
    $no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $access_level = "user"; // Set default access level

    // Query SQL untuk menyimpan data ke database
    // Query SQL untuk menyimpan data ke database dengan nilai user_id yang diatur secara eksplisit
    $sql = "INSERT INTO user (user_id, username, email, password, nama_lengkap, no_hp, alamat, access_level)
            VALUES (NULL, '$username', '$email', '$password', '$nama_lengkap', '$no_hp', '$alamat', '$access_level')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful registration
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Perpustakaan</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-image: url(perpus.jpg);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background: transparent;
        border-radius: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(8px);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #fff;
    }

    input {
        width: 100%;
        padding: 5px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #3399ff;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #3366ff;
    }

    .library-icon {
        font-size: 48px;
        color: #4CAF50;
        margin-bottom: 20px;
    }

    h2 {
        color: #3399ff;
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .container {
        animation: fadeInDown 2s ease-in-out;
    }
    </style>
</head>

<body>

    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="library-icon">&#128218;</div>
            <h2>Registration - Perpustakaan</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required>

            <label for="no_hp">Nomor HP:</label>
            <input type="text" id="no_hp" name="no_hp" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <button type="submit">Register</button>
        </form>
    </div>

</body>

</html>