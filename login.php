<?php
	//session_start();
	include 'koneksi.php';

	if(isset($_POST['input']))
{
	session_start();
	$akun= $_POST['status'];
    $username = $_POST['nama_user'];
    $idtoko = $_POST['idtoko'];
	$idRole = $_POST['idRole'];
    $password = $_POST['password'];
    
    
    
    $cek = 'SELECT * FROM user where nama_user="'.$username.'" AND password="'.$password.'"';
    $sql = mysqli_query($conn, $cek);
    if(mysqli_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $c = mysqli_fetch_array($sql);
        $_SESSION['user'] = $c['idUser'];
        echo "<script>alert('Anda Berhasil Login'); 
        window.location='index.php';
        </script>";
    } else {
        echo "<script>alert('Login Gagal'); 
        window.location='login.php';
        </script>";
    }
}
	?>
	
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
      <link rel="stylesheet" type="text/css" href="css/demo.css"> <!-- login-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
    <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
       <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                  <div class="msg-profile"> <img src="img/tokoemas1.jpg" alt="..." height="400" width="500"></div>
                <div class="content">
                  <div class="logo">
                <!--    <h1>TOKO </h1>-->
                  </div>
                  <p>.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-top">
                <div class="content">
                 
                        
<div class="navbar-wrapper"></div>


                  
                   
                    <div class="panel-heading" style="background:#796AEE ; color:White">
                        <h1 class="panel-title"><center><b>LOGIN USER</b></center></h1>
                    </div>
                    <div class="card-body">
                   
                      <form class="form-horizontal" method="post">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">USERNAME</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalSuccess" name="nama_user" type="text" class="form-control form-control-success">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">PASSWORD</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalWarning" name="password" type="password" class="form-control form-control-warning">
                          </div>
                        </div>
						
                        <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                            <input type="submit" name="input" value="&nbsp;&nbsp;LOGIN&nbsp;&nbsp;" class="btn btn-primary">
                          </div>
                        </div>
                      </form>
                    </div>
                 
                
</div>

         </div>      
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>