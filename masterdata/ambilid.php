<?php
    include '../koneksi.php';

$data = $_POST['kd'];
$baki = 'SELECT * FROM kadar where idkadar="'.$data.'"';
$query = mysqli_query($conn, $baki);
 
 while($row=mysqli_fetch_array($query)){
    
    ?>
        <input type="text" name="idBarang" class="form-control" value="<?php echo $row.$newID; ?>"disabled> <br>
    
    <?php
        
}
?>