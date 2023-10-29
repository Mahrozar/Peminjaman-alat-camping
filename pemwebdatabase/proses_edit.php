<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $tanggal_penyewaan = $_POST['tanggal_penyewaan'];
    $Nama_Barang = $_POST['Nama_Barang'];
    $Jumlah_Barang = $_POST['Jumlah_Barang'];
    $Status = $_POST['Status'];
    $Hari = $_POST['Hari'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

    // Update data ke database
    $query = "UPDATE user SET nama='$nama', tanggal_penyewaan='$tanggal_penyewaan', Nama_Barang='$Nama_Barang', Jumlah_Barang='$Jumlah_Barang', Status='$Status', Hari='$Hari', tanggal_pengembalian='$tanggal_pengembalian' WHERE id_user='$id_user'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("location: tampil.php"); // Alihkan kembali ke tampil.php setelah berhasil memperbarui data
    } else {
        echo "Gagal memperbarui data.";
    }
}
?>
