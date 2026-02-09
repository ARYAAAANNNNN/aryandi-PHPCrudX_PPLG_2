<?php 

// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO kelas (nama_kelas) VALUES ('$nama_kelas')");
// mengalihkan halaman kembali ke index.php
header("location:kelas.php");

?>