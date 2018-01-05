<?php 
include "../koneksi.php";

$tgl1 = $_POST['tgl1'];
$tgl2 = $_POST['tgl2'];

$datetime = mysql_real_escape_string($tgl1);
$datetime = strtotime($datetime);
$datetime = date('Y-m-d H:i:s',$datetime);

$datetime2 = mysql_real_escape_string($tgl2);
$datetime2 = strtotime($datetime2);
$datetime2 = date('Y-m-d H:i:s',$datetime2);

$sql = mysqli_fetch_array(mysqli_query($conn,"SELECT * from barang JOIN penjualan on penjualan.idbarang = barang.idbarang JOIN kadar on kadar.idkadar=barang.idkadar where (penjualan.tanggal_penjualan BETWEEN '$datetime1' AND '$datetime2'");

$data = array(
            'idbar'    =>  $sql['idBarang'],
            'nama'    =>  $sql['nama_barang'],
            'berat'    =>  $sql['berat'],
            'kadar'    =>  $sql['kode'],
            'harga'    =>  $sql['harga_gram'],
            'user'    =>  $sql['iduser'],);

echo json_encode($data); ?>