<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$kode_obat = $_POST ['kode_obat'];
$nama_obat = $_POST ['nama_obat'];
$jenis = $_POST ['jenis'];
$fungsi = $_POST ['fungsi'];
$stock = $_POST ['stock'];

//menginput data ke database
mysqli_query($koneksi,"insert into obat values('$kode_obat','$nama_obat','$jenis','$fungsi','$stock')");

// //mengalihkan halaman kembali ke index.php
header("location:obat.php");
?>