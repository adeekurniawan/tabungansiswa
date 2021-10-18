<?php 
include './layout/header.php';
include 'koneksi.php';
?>

<form class="form-ins" method="post" action="./proses/insert_siswa.php">        
        <table>
            <tr>
                <td>NISN</td>
                <td><input type="text" name="nisn" required></td>
            </tr>                
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>                
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
            </td>
            </tr>                
            <tr>
                <td>Alamat</td>
                <td><input type="textarea" name="alamat"></td>
            </tr>    
            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan</button>
                </td>
            </tr>              
        </table>                    
</form> 
        <table class="tbl-ins">
            <tr>
                <td>NISN</td>
                <td>Nama</td>
                <td>Jennis Kelamin</td>
                <td>Alamat</td>
                <td>Aksi</td>
                
            </tr>            
             <?php
                include "koneksi.php";
                $no = 1;
                $query = mysqli_query($kon, 'SELECT * FROM siswa');
                while ($data = mysqli_fetch_array($query)) {
                ?>    
            <tr>
                <td><?php  echo $data['nisn']?></td>                
                <td><?php  echo $data['nama']?></td>                
                <td><?php  echo $data['jenis_kelamin']?></td>                
                <td><?php  echo $data['alamat']?></td>                                
                <td><a href="./proses/delete_siswa.php?nisn=<?php  echo $data['nisn']?>">Hapus</a></td>                                
            </tr>  
            
                <?php } ?>
        </table>                    
<?php 
include './layout/footer.php';
?>
