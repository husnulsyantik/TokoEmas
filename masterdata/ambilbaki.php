<?php
    include '../koneksi.php';

$data = $_POST['jb'];
$baki = 'SELECT * FROM baki where idjenis_barang="'.$data.'"';
$query = mysqli_query($conn, $baki);

 while($row=mysqli_fetch_array($query)){
    
    ?>
        <option value="<?php echo $row['idBaki'] ?>"><?php echo $row['idBaki'] ?></option><br>
    
    <?php
        
}
?>