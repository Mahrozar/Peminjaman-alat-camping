<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama= $_POST['nama'];
$tanggal_penyewaan = $_POST['tanggal_penyewaan'];
$Nama_Barang = $_POST['Nama_Barang'];
$Jumlah_Barang = $_POST['Jumlah_Barang'];
$Status = $_POST['Status'];
$Hari = $_POST['Hari'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO user (nama, tanggal_penyewaan, Nama_Barang, Jumlah_Barang, Status, Hari, tanggal_pengembalian) 
                     VALUES ('$nama', '$tanggal_penyewaan', '$Nama_Barang', '$Jumlah_Barang', '$Status', '$Hari', '$tanggal_pengembalian')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");
 
?>