<?php
include "../koneksi.php";

    if(isset($_POST['simpan'])){
        $mas=$_POST['idjenis_barang'];
        $mas2=$_POST['idBaki'];
       
        
    $insert="insert into baki values ('$mas2','$mas')";
    $query=mysqli_query($conn, $insert);
        if($query){
            echo '<script language="javascript">alert("Data berhasil ditambahkan"); document.location="tambah_baki.php";</script>';
        } else {
            echo 'gagal';
        }
        
    }
?>