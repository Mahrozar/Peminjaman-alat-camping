<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil, alihkan ke halaman beranda
        header("location: beranda.php");
    } else {
        // Login gagal, tampilkan pesan dengan JavaScript
        echo '<script type="text/javascript">alert("Login gagal. Periksa kembali username dan password Anda.");</script>';
    }
}
?>
