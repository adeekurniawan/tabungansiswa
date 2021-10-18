<?php 
include './layout/header.php';
include 'koneksi.php';
?>
    <form class="form-ins" action="./proses/insert_tabungan.php" method="post">        
            <table>
                <tr>
                    <td>NISN</td>
                    <td>
                        <select name="nisn" required>
                             <option value=""></option>                            
                        <?php                                
                            $query = mysqli_query($kon, 'SELECT * FROM siswa');
                            while ($data = mysqli_fetch_array($query)) {
                            ?>                                                                                       
                            <option value="<?php echo $data['nisn']?>"><?php echo $data['nisn']." - ".$data['nama']?></option>                            
                        <?php } ?>
                        </select>
                    </td>
                </tr>                
                <tr>
                    <td>Jumlah</td>
                    <td><input type="text" name="jumlah"></td>
                </tr>                   
                <tr>
                    <td>Tanggal</td>
                    <td>
                    <input type="date" name="tgl">
                    </td>
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
            <td>Jumlah</td>
            <td>Tanggal</td>                                
            <td>Aksi</td>                                
        </tr>            
            <?php            
            $no = 1;
            $query = mysqli_query($kon, 'SELECT * FROM tabungan left join siswa on siswa.nisn=tabungan.nisn');
            while ($data = mysqli_fetch_array($query)) {
            ?>    
        <tr>
            <td><?php  echo $data['nisn']?></td>                
            <td><?php  echo $data['nama']?></td>                
            <td><?php  echo $data['jumlah']?></td>                
            <td><?php  echo $data['tgl']?></td>   
            <td><a href="./proses/delete_tabungan.php?id_tabungan=<?php  echo $data['id_tabungan']?>">Hapus</a></td>                               
        </tr>  
        
            <?php } ?>
    </table>                    
<?php 
include './layout/footer.php';
?>
