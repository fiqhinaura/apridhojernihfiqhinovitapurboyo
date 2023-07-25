<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_alat = $_POST['kode_alat'];
$nama_alat = $_POST['nama_alat'];
$fungsialat = $_POST['fungsialat'];
$stockalat = $_POST['stockalat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into alatmedis values('$kode_alat','$nama_alat','$fungsialat','$stockalat')");
 
// mengalihkan halaman kembali ke index.php
header("location:alatmedis.php");
 
?>

