<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Penggajian Karyawan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Icon Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0e0e0; /* abu-abu muda */
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            width: 360px;
            text-align: center;
        }

        .login-box img {
            margin-bottom: 15px;
        }

        .login-box h2 {
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .login-box p {
            font-size: 14px;
            margin-bottom: 25px;
            color: #666;
        }

        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .password-wrapper {
            position: relative;
            width: 100%;
            margin-bottom: 15px;
        }

        .password-wrapper input {
            width: 100%;
            padding: 12px;
            padding-right: 40px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 12px;
            transform: translateY(-50%);
            color: #888;
            font-size: 18px;
            cursor: pointer;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #6c63ff;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Poppins', sans-serif;
        }

        button:hover {
            background-color: #574b90;
        }

        .login-box a {
            color: #6c63ff;
            text-decoration: none;
        }

        .login-box a:hover {
            text-decoration: underline;
        }

        .text-center {
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form method="POST" class="login-box">
        <img src="logo.png" width="80" alt="Logo">
        <h2>Penggajian Karyawan</h2>
        <p>Kelola Gaji Karyawan Lebih Mudah!</p>

        <input type="email" name="email" placeholder="Email" required>

        <div class="password-wrapper">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <i class="fa-solid fa-eye toggle-password" id="toggleIcon" onclick="togglePassword()"></i>
        </div>

        <button type="submit" name="login">Login</button>
        <div class="text-center">
            Belum punya akun? <a href="daftar.php">Daftar di sini</a>
        </div>
    </form>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const toggleIcon = document.getElementById("toggleIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
