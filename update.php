<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($db,"update mahasiswa set nama='$nama', nim='$nim', semester='$semester', jurusan='$jurusan', alamat='$alamat' where nim='$nim    '");

// mengalihkan halaman kembali ke index.php
header("location:tampil.php");

?>