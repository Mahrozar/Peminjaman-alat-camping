<!DOCTYPE html>
<html>
<head>
    <title>Web Peminjaman Alat-Alat Camping</title>
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

        /* Footer Style */
        footer {
            background-color: #4d72b8; /* Warna biru muda */
            padding: 10px;
            color: white;
            text-align: center;
        }

        /* Table Style */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #1e3a5e; /* Warna biru tua untuk latar belakang header */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Warna latar belakang untuk baris genap */
        }

        /* Button Style */
        .btn-container {
            text-align: left;
            margin-bottom: 20px;
        }

        .btn-container a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Web Peminjaman Alat-Alat Camping</h1>
    </header>
    <div class="container">
        <div class="btn-container">
            <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
            <a href="beranda.php" class="btn btn-primary">Kembali ke Beranda</a>
        </div>
        <br />
        <br />

        <!-- Tabel Data -->
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Penyewaan</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Status</th>
                <th>Hari</th>
                <th>Tanggal Pengembalian</th>
                <th>Aksi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from user");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['tanggal_penyewaan']; ?></td>
                    <td><?php echo $d['Nama_Barang']; ?></td>
                    <td><?php echo $d['Jumlah_Barang']; ?></td>
                    <td><?php echo $d['Status']; ?></td>
                    <td><?php echo $d['Hari']; ?></td>
                    <td><?php echo $d['tanggal_pengembalian']; ?></td>
                    <td>
                        <a role="button" class="btn btn-info" href="edit.php?id=<?php echo $d['id_user']; ?>">UBAH</a>
                        <a role="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id_user']; ?>">HAPUS</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <footer>
            &copy; Web Peminjaman Alat-Alat Camping
        </footer>
    </div>
</body>
</html>
