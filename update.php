<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_obat = $_POST['kode_obat'];
$nama_obat = $_POST['nama_obat'];
$jenis = $_POST['jenis'];
$fungsi = $_POST['fungsi'];
$stock = $_POST['stock'];
 
// update data ke database
mysqli_query($koneksi,"update obat set kode_obat='$kode_obat', nama_obat='$nama_obat', jenis='$jenis', fungsi='$fungsi', stock='$stock' where kode_obat='$kode_obat'");
 
// mengalihkan halaman kembali ke obat.php
header("location:obat.php");
 
?>