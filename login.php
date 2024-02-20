<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, inital-scal=1.0">
    <title>Login - Perpustakaan</title>
    <style>
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        background-image: url('perpus.jpg');
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(8px);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    form {
        max-width: 300px;
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
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #fff;
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

    .registrasi {
        text-align: center;
        margin-top: 10px;
        color: #fff;
    }

    .registrasi a {
        color: blue;
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="library-icon">&#128218;</div>
        <h2>Login to Perpustakaan</h2>
        <form action="proses_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="txt" id="usermame" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <button type="sbmit">Login</button>
        </form>
        <div class="registrasi">
            Belum punya akun? <a href="registrasi.php">Registrasi disini</a></p>
        </div>
    </div>
</body>

</html>


</body>

</html>