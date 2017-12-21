<?php
include "../koneksi.php";

    if(isset($_POST['simpantoko'])){
        $data1=$_POST['idToko'];
        $data2=$_POST['Nama_Toko'];
        $data3=$_POST['Alamat'];
        $data4=$_POST['No_telp'];
      
        
    $insert='insert into toko values ("'.$data1.'","'.$data2.'","'.$data3.'","'.$data4.'")';
    $query=mysqli_query($conn, $insert);
        if($query){
            echo '<script language="javascript">alert("Data berhasil ditambahkan"); document.location="tambah_toko.php";</script>';
        } else {
            echo 'gagal';
        }
        
    }
?>