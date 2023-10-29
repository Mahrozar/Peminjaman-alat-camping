<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* Header Style */
        header {
            background-color: #1e3a5e; /* Warna biru tua */
            padding: 20px;
            color: white;
            text-align: center;
        }

        /* Container Style */
        .container {
            min-height: 85vh; /* Memberikan tinggi minimal ke container agar footer tetap di bagian bawah */
        }

        /* Footer Style */
        footer {
            background-color: #4d72b8; /* Warna biru muda */
            padding: 10px;
            color: white;
            text-align: center;
            position: fixed; /* Membuat footer tetap di posisi */
            bottom: 0; /* Footer di bagian bawah */
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Masukkan Akun Anda</h1>
    </header>
    
    <div class="container">
        <form method="POST" action="ceklogin.php">
            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control form-control-sm" id="username" placeholder="Masukkan username anda" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password anda" name="password" required>
            </div>
            <button type="submit" class="btn btn-outline-success">Login</button>
            <button type="button" class="btn btn-warning">Batal</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        &copy; MahrozarCompany
    </footer>
</body>
</html>
