<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar - Penggajian Karyawan</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&display=swap" rel="stylesheet">
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

        .register-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15); /* bayangan ditambahkan */
            width: 380px;
            text-align: center;
        }

        .register-box img {
            margin-bottom: 15px;
        }

        .register-box h2 {
            margin-bottom: 10px;
            color: #2c3e50;
        }

        input[type="text"],
        input[type="email"],
        select {
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
            color: #aaa;
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

        .text-center {
            margin-top: 15px;
            font-size: 14px;
        }

        .text-center a {
            color: #6c63ff;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form class="register-box" method="POST">
        <img src="img/logo (1).png" width="80" alt="Logo">
        <h2>Daftar Akun</h2>
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
        
        <div class="password-wrapper">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <i class="fa-solid fa-eye toggle-password" id="toggleIcon" onclick="togglePassword()"></i>
        </div>

        <select name="role" required>
            <option value="">-- Pilih Role --</option>
            <option value="admin">Admin</option>
            <option value="karyawan">Karyawan</option>
        </select>

        <button type="submit" name="submit">Daftar</button>
        <div class="text-center">
            Sudah punya akun? <a href="/login">Login di sini</a>
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