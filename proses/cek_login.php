<?php
include '../koneksi.php';
$username = $_POST['username'];
$password = MD5($_POST['password']);
 
$result = mysqli_query($kon, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$count = mysqli_num_rows($result);

if($count==1){
    $data = mysqli_fetch_array($result);

    session_start();            
    $_SESSION['nama']   =  $data['nama'];
    $_SESSION['login']  = TRUE;
    echo "<script>window.location = '../data_siswa.php';</script>";
}
else {
    echo "Username atau Password yang anda masukkan salah";
}
?>
