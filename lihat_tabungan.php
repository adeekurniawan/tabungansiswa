<?php 
include './layout/header.php';
include 'koneksi.php';
?>
    <form class="form-ins" action="detail_tabungan.php" method="post">     
        <table>
            <tr>
                <td>NISN</td>
                <td><input type="text" name="nisn" required></td>
                <td><input type="submit" value="Lihat"></td>
            </tr>                                          
        </table>                    
    </form>                     
<?php 
include './layout/footer.php';
?>
