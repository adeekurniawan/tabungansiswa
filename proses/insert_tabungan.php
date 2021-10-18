<?php
include '../koneksi.php';
$nisn          = $_POST['nisn'];
$jumlah        = $_POST['jumlah'];
$tgl           = $_POST['tgl'];

mysqli_query($kon, "INSERT INTO tabungan VALUES(NULL,'$nisn','$jumlah','$tgl')");
header("location:../data_tabungan.php");
?>