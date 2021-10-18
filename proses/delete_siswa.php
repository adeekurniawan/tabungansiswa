<?php
include '../koneksi.php';
$nisn          = $_GET['nisn'];
mysqli_query($kon, "DELETE FROM siswa WHERE nisn = $nisn");
header("location:../data_siswa.php");
?>