<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* Header Style */
        header {
            background-color: #1e3a5e;
            padding: 20px;
            color: white;
            text-align: center;
        }

        /* Footer Style */
        footer {
            background-color: #4d72b8;
            padding: 10px;
            color: white;
            text-align: center;
        }

        /* Form Style */
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #1e3a5e;
        }

        .btn-success {
            background-color: #1e3a5e;
        }

        .btn-primary, .btn-success {
            color: white;
        }

        .btn-back {
            background-color: #1e3a5e;
        }

        .btn-back, .btn-back:hover {
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Tambah Data Pengguna</h1>
    </header>

    <!-- Content -->
    <div class="container">
	<?php
        if (isset($_GET['id_user'])) {
            $id_user = $_GET['id_user'];
            // Gunakan $id_user untuk mengidentifikasi data yang akan diubah
        } else {
            // Handle jika parameter 'id' tidak ada
			echo "Parameter 'id_user' tidak ditemukan.";
        }
        ?>
        <form method="post" action="inputuser.php">
            <h3>Masukkan Data</h3>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_penyewaan">Tanggal Penyewaan</label>
                <input type="text" name="tanggal_penyewaan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Nama_Barang">Nama Barang</label>
                <input type="text" name="Nama_Barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Jumlah_Barang">Jumlah Barang</label>
                <input type="text" name="Jumlah_Barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Status">Status</label>
                <input type="text" name="Status" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Hari">Hari</label>
                <input type="text" name="Hari" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_pengembalian">Tanggal pengembalian</label>
                <input type="text" name="tanggal_pengembalian" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">SIMPAN</button>
        </form>
        <a href="tampil.php" class="btn btn-back btn-block">KEMBALI</a>
    </div>
     <p></p>
    <!-- Footer -->
    <footer>
        &copy; Web Peminjaman Alat-Alat Camping
    </footer>
</body>
</html>
