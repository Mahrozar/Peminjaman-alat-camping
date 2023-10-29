<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* Header Style */
        header {
            background-color: #1e3a5e;
            padding: 20px;
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
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Edit Data Pengguna</h1>
    </header>

    <!-- Content -->
    <div class="container">
        <?php
        // Koneksi database
        include 'koneksi.php';

        if (isset($_GET['id'])) {
            $id_user = $_GET['id'];
            // Query untuk mengambil data berdasarkan ID
            $query = "SELECT * FROM user WHERE id_user = $id_user";
            $result = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($result) == 1) {
                $data = mysqli_fetch_assoc($result);
        ?>
                <form method="post" action="proses_edit.php">
                    <h3>Edit Data</h3>
                    <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_penyewaan">Tanggal Penyewaan</label>
                        <input type="text" name="tanggal_penyewaan" value="<?php echo $data['tanggal_penyewaan']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Nama_Barang">Nama Barang</label>
                        <input type="text" name="Nama_Barang" value="<?php echo $data['Nama_Barang']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Jumlah_Barang">Jumlah Barang</label>
                        <input type="text" name="Jumlah_Barang" value="<?php echo $data['Jumlah_Barang']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label>
                        <input type="text" name="Status" value="<?php echo $data['Status']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Hari">Hari</label>
                        <input type="text" name="Hari" value="<?php echo $data['Hari']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                        <input type="text" name="tanggal_pengembalian" value="<?php echo $data['tanggal_pengembalian']; ?>" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">SIMPAN PERUBAHAN</button>
                </form>
        <?php
            } else {
                echo "Data tidak ditemukan.";
            }
        } else {
            echo "ID pengguna tidak valid.";
        }
        ?>
    </div>

    <!-- Footer -->
    <footer>
        &copy; Web Peminjaman Alat-Alat Camping
    </footer>
</body>
</html>
