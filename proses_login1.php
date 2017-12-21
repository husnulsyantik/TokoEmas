<?php
    session_start();
    include "koneksi.php";

$akun= $_POST['status'];

if($akun=="admin"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $cek = 'SELECT * FROM user where nama_user="'.$username.'" AND idUser="'.$password.'"';
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
} else {
    $nis = $_POST['idtoko'];
    $password = $_POST['password'];
    
    $cek = 'SELECT * FROM siswa where nama_user="'.$nis.'" AND idUser="'.$password.'"';
    $sql = mysqli_query($conn, $cek);
    
    if(mysqli_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $c = mysqli_fetch_array($sql);
        $_SESSION['nis'] = $c['nis_siswa'];
        $_SESSION['status'] = $c['status'];
        echo "<script>alert('Anda Berhasil Login'); 
        window.location='login1.php';
        </script>";  
    } else {
        echo "<script>alert('Login Gagal'); 
        window.location='login1.php';
        </script>";
    }
}

/*$email = $_POST['email'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM member WHERE email='$email' AND password='$password'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
        $_SESSION['email'] = $c['email'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="admin"){
            header("location:../admin/dashboard.php");
        }else if($c['level']=="user"){
            header("location:user.php");
        }
    }else{
         // die("password salah <a href=\"javascript:history.back()\">kembali</a>");
		 echo "<script>
	  alert('Login Gagal');
	  window.location='../index.php';
	  </script>
	  ";}
		
    
}else if($op=="out"){
    unset($_SESSION['email']);
    unset($_SESSION['level']);
    header("location:index.php");
}*/
?>