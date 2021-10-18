<?php
include '../koneksi.php';
$id_tabungan          = $_GET['id_tabungan'];
mysqli_query($kon, "DELETE FROM tabungan WHERE id_tabungan = $id_tabungan");
header("location:../data_tabungan.php");
?>