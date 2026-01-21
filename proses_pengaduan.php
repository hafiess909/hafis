<?php

 
$nama = $_POST['nama'];

$lokasi = $_POST['lokasi'];

$keterangan = $_POST['keterangan'];
 
$koneksi = mysqli_connect("localhost", "root", "", "2026_ujikom_12rpl1_hafis");

mysqli_query( $koneksi, "INSERT INTO `inputaspirasi`(`Nama Pengaju`, `Nama Fasilitas`, `keterangan`,) 
VALUES ('$nama','$lokasi','$keterangan,");