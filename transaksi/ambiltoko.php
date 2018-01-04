<?php
include "../koneksi.php";

$kode = $_GET['kodee'];
$query = mysqli_query($conn, "select idtoko from user where idUser = '$kode'");
$mahasiswa = mysqli_fetch_array($query);

$data1 = array(
            'kdtoko'    =>  $mahasiswa['idtoko'],);

echo json_encode($data1)
?>