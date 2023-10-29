<!DOCTYPE html>
<html>

<head>
    <title>Selamat Datang di Situs Camping Adventure</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* Header Style */
        header {
            background-color: #1e3a5e; /* Warna biru tua */
            padding: 20px;
            color: white;
            text-align: center;
        }

        /* Content Style */
        .content {
            padding: 20px;
            text-align: center;
        }

        /* Button Style */
        .btn-container {
            margin-top: 20px;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        /* Footer Style */
        footer {
            background-color: #4d72b8; /* Warna biru muda */
            padding: 10px;
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Adjust image size */
        img {
            max-width: 100%;
            height: auto;
        }

        /* Move elements to the top right corner */
        .top-right {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <h1>Selamat Datang di Situs Camping Adventure</h1>
    </header>

    <!-- Content -->
    <div class="container content">
        <div class="top-right">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
        <p>Selamat datang di halaman beranda kami. Di Camping Adventure, kami menawarkan pengalaman camping yang tak terlupakan.</p>
        <div class="btn-container">
            <a href="tampil.php" class="btn btn-primary">Menuju Ke Halaman Peminjaman Alat-Alat Camping</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; MahrozarCompany
    </footer>
</body>

</html>
