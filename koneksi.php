<?php
error_reporting(0);
session_start();
$namaserver ="localhost";
$username = "root";
$password = "";
$db_name = "db_bumimas";

$conn = mysqli_connect($namaserver, $username, $password, $db_name);

if ($conn->connect_error) {
	die('maaf koneksi gagal :'.$connect->connect_error);
}
?>
