<?php
include "../koneksi.php";

$kode = $_GET['kode'];
$query = mysqli_query($conn, "select idkadar, berat, harga_jual from barang INNER JOIN harga USING (idkadar) where idBarang = '$kode'");
$mahasiswa = mysqli_fetch_array($query);
$id_kadar = $mahasiswa['idkadar'];
$nama_kadar = mysqli_query($conn, "select kode from kadar where idkadar = '$id_kadar'");
$baru = mysqli_fetch_array($nama_kadar);

$data = array(
            'berat'    =>  $mahasiswa['berat'],
            'harga'    =>  $mahasiswa['harga_jual'],
            'kadar'    =>  $baru['kode'],);


echo json_encode($data)
?>










<?php
//id_kadar = $mahasiswa['id_kadar'];
//$nama_kadar = mysqli_query($conn, "select kode from kadar where idkadar = '$id_kadar'");
//$baru = mysqli_fetch_array($nama_kadar);
/*$data = array(
            'berat1'   =>  $mahasiswa['berat'],
            'kadar1'   =>  $mahasiswa['idbaki'],
            'harga1'   =>  $mahasiswa['harga_jual'],);*/