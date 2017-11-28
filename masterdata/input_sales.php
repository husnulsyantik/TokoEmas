<?php
include "../koneksi.php";

    if(isset($_POST['simpan'])){
        $data1=$_POST['kode'];
        $data2=$_POST['nama'];
        $data3=$_POST['alamat'];
        $data4=$_POST['kota'];
        $data5=$_POST['telp'];
        $data6=$_POST['default'];
        $data7=$_POST['status'];
        
    $insert='insert into tabel_sales values ("'.$data1.'","'.$data2.'","'.$data3.'","'.$data4.'","'.$data5.'","'.$data6.'","'.$data7.'")';
    $query=mysqli_query($conn, $insert);
        if($query){
            echo '<script language="javascript">alert("Data berhasil ditambahkan"); document.location="sales2.php";</script>';
        } else {
            echo 'gagal';
        }
        
    }
?>