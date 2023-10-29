<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari URL
$id = $_GET['id'];

// menghapus data dari database
$delete = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id'");

// memeriksa apakah penghapusan berhasil atau gagal
if ($delete) {
    echo "Data berhasil dihapus.";
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}

// mengalihkan halaman kembali ke index.php
header("location:tampil.php");
?>
