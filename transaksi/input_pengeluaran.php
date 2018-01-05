<?php
include "../koneksi.php";

    if(isset($_POST['simpan'])){
        $kode=$_POST['kode'];
        $tanggal=$_POST['tanggal'];
        $detail=$_POST['detail'];
        $harga=$_POST['harga'];
        $id_toko=$_POST['toko'];

    $insert='insert into pengeluaran values ("'.$kode.'","'.$detail.'","'.$harga.'","'.$tanggal.'","'.$id_toko.'")';
    $query=mysqli_query($conn, $insert);
        if($query){
            echo '<script language="javascript">alert("Data berhasil ditambahkan"); document.location="pengeluaran-1.php";</script>';
        } else {
            echo '<script language="javascript">alert("Gagal!"); document.location="pengeluaran-1.php";</script>';
        }
        
    }
?>