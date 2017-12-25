<?php
    session_start();
    include "koneksi.php";

$akun= $_POST['status'];
    $username = $_POST['username'];
    $idtoko = $_POST['idtoko'];
    $password = $_POST['password'];
    
    
    
    $cek = 'SELECT * FROM user where nama_user="'.$username.'" AND password="'.$password.'"';
    $sql = mysqli_query($conn, $cek);
    if(mysqli_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $c = mysqli_fetch_array($sql);
        $_SESSION['username'] = $c['nama_user'];
        echo "<script>alert('Anda Berhasil Login'); 
        window.location='index.php';
        </script>";
    } else {
        echo "<script>alert('Login Gagal'); 
        window.location='login.php';
        </script>";
    }

?>