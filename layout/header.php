 <?php 
    session_start();    
    if ($_SESSION['login'] != TRUE){
          echo "<script>window.location = './login.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/instemplate.css">
    <title>Aplikasi Tabungan - indonetsource</title>
</head>
<body>
<div class="container">
    <nav class="nav-ins">
        <div class="full-nav">        
                <div class="left-nav-content">
                    <ul>
                        <li><a href="data_siswa.php">Siswa</a> </li>
                        <li><a href="data_tabungan.php">Tabungan</a></li>
                        <li><a href="lihat_tabungan.php">Lihat Tabungan</a></li>   
                    </ul>  
                </div>        
                <div class="right-nav-content">  
                    <ul>
                        <li><p>Welcome..</p></li>
                        <li><p><?php echo $_SESSION['nama']; ?></p></li>   
                        <li><a href="./proses/logout.php" >Log Out</a></li>   
                    </ul> 
                </div>        
        </div>  
    </nav>
    <div class="content">