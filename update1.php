<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_alat = $_POST['kode_alat'];
$nama_alat = $_POST['nama_alat'];
$fungsialat = $_POST['fungsialat'];
$stockalat = $_POST['stockalat'];
 
// update data ke database
mysqli_query($koneksi, "update alatmedis set kode_alat='$kode_alat', nama_alat='$nama_alat', fungsialat='$fungsialat', stockalat='$stockalat' where kode_alat='$kode_alat'");
 
// mengalihkan halaman kembali ke alatmedis.php
header("location:alatmedis.php");
 
?>