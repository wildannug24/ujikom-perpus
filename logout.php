<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>
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
        background-color: #4CAF50;
        padding: 30px 0;
        text-align: center;
    }

    .navbar a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        font-size: 16px;
        margin: 0 15px;
    }

    .navbar a:hover {
        text-decoration: underline;
    }

    .menu {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }

    .menu a {
        text-decoration: none;
        color: #4CAF50;
        font-weight: bold;
        font-size: 16px;
    }

    .menu a:hover {
        color: #45a049;
    }

    .footer {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="login.php">Logout</a> <!-- Add the logout link -->
    </div>

    <div class="container">
        <h1>Selamat Datang di Perpustakaan Digital</h1>

        <div class="menu">
            <a href="#">Buku</a>
            <a href="#">Anggota</a>
            <a href="#">Peminjaman</a>
            <a href="#">Laporan</a>
            <a href="#">Keluar</a>
        </div>
    </div>

    <div class="footer">
        &copy; 2024 Perpustakaan Digital
    </div>

</body>

</html>

<?php
session_start();
session_destroy(); // Destroy the session
header("Location: dashboard.php"); // Redirect to the login page or any other page
exit();
?>