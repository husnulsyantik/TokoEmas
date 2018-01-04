<?php
include "../koneksi.php";

    if(isset($_POST['simpanpemesanan'])){
        $data1=$_POST['id_pemesanan'];
        $data2=$_POST['berat'];
        $data3=$_POST['harga_gram'];
        $data4=$_POST['harga_total'];
        $data5=$_POST['dp_harga'];
        $data6=$_POST['idkadar'];
        $data7=$_POST['idjenis_barang'];
        $data8=$_POST['idUser'];
        $data9=$_POST['idToko'];
        
        
        
    $insert="INSERT INTO pemesanan VALUES ('$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9')"; 
        
    $query=mysqli_query($conn, $insert);
        if($query){
            echo '<script language="javascript">alert("Data berhasil ditambahkan"); document.location="pemesanan.php";</script>';
        } else {
            echo 'gagal';
        }
        
    }
?>