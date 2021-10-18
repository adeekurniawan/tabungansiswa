<?php 
include './layout/header.php';
include 'koneksi.php';
$nisn = $_POST['nisn'];
?>   
    <a href="lihat_tabungan.php">kembali</a>
    <table class="tbl-ins">
        <tr>
            <td>NISN</td>
            <td>Nama</td>
            <td>Jumlah</td>
            <td>Tanggal</td>                                                                          
        </tr>            
            <?php            
            $no = 1;
            $jumlah_awal = 0;
            $query = mysqli_query($kon, "SELECT * FROM tabungan left join siswa on siswa.nisn=tabungan.nisn WHERE siswa.nisn=$nisn");
            while ($data = mysqli_fetch_array($query)) {
            ?>    
        <tr>
            <td><?php  echo $data['nisn']?></td>                
            <td><?php  echo $data['nama']?></td>                
            <td><?php  echo $data['jumlah']?></td>                
            <td><?php  echo $data['tgl']?></td>               
        </tr>                  
            <?php
            $jumlah_awal =  $jumlah_awal + $data['jumlah'];        
                } ?>
             <tr>
            <td></td>
            <td><b>Total</b></td>
            <td><?php  echo $jumlah_awal ?></td>
            <td></td>
        </tr>       
    </table>                    
<?php 
include './layout/footer.php';
?>
