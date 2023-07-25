<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kode_alat= $_GET['kode_alat'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from alatmedis where kode_alat='$kode_alat'");
 
// mengalihkan halaman kembali ke index.php
header("location:alatmedis.php");
 
?>