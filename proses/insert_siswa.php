<?php
include '../koneksi.php';
$nisn          = $_POST['nisn'];
$nama          = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat        = $_POST['alamat'];

mysqli_query($kon, "INSERT INTO siswa VALUES('$nisn','$nama','$jenis_kelamin','$alamat')");
header("location:../data_siswa.php");
?>