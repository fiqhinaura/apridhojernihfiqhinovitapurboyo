<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kode_obat = $_GET['kode_obat'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from obat where kode_obat='$kode_obat'");
 
// mengalihkan halaman kembali ke index.php
header("location:obat.php");
 
?>