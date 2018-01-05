
<?php
include '../koneksi.php';
$data1=$_GET['id_pemesanan'];


//$sql="delete from pemesanan where id_pemesanan='$data1'";
$sql="DELETE FROM 'pemesanan' WHERE 'pemesanan'.'id_pemesanan' = '$data1'";
$query=mysqli_query($connect,$sql) or die(mysql_error($query));
if($query){
    echo '<script language="javascript">alert("Data berhasil ditambahkan"); document.location="pemesanan.php";</script>';
        } else {
            echo 'gagal';
        }

?>
