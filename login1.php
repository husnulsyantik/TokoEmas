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
  <!--  <img src="img/tokoemas3.jpg" alt="gambar" class="bg">-->
<div class="content">
    <div class="container"><br><br><br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background:#796AEE ; color:White">
                        <h3 class="panel-title"><center><b>LOGIN USER</b></center></h3>
                    </div>
                     <div class="panel-body">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form role="form" action="proses_login1.php" method="post">
                                        <fieldset>
                                            <div class="form-group">
                                                <select class="form-control" name="status" id="status">
                                                    <option enebled>-- Pilih status USER --</option>
                                                    <option value="super admin" id="sa">Super Admin</option>
                                                    <option value="admin" id="a">Admin</option>
                                                    <option value="operator" id="o">Operator</option>
                                                    <option value="tambahan" id="t">Tambahan</option>
                                                    <option value="kasir" id="k">kasir</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="masukkan Username" name="username" type="text" id="fadmin" autofocus>
                                            </div>
                                            <!-- <div class="form-group">
                                                <input class="form-control" placeholder="ganti password" name="changepass" type="text" id="fadmin" autofocus>
                                            </div>-->
                                            <div class="form-group">
                                                <input class="form-control" placeholder="id toko" name="idtoko" type="text" id="fnoadmin" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="masukkan id password" name="password" type="password" id="password">
                                            </div>
                                            <!-- Change this to a button or input when using this as a form -->
                                            <input type="submit" class="btn btn-lg btn-danger btn-block" style="background:#796AEE" value="Login">
                                        </fieldset>
                                    </form>
                                  <!--  <script>
                                       $(document).ready(function(){
                                               $('#sa').click(function(){
                                                $('#fadmin').show();
                                                $('#fnoadmin').show();

                                            });
                                               $('#a').click(function(){
                                                $('#fadmin').show();
                                                $('#fnoadmin').show();

                                            });
                                               $('#o').click(function(){
                                                $('#fnoadmin').show();
                                                $('#fadmin').show();

                                            });
                                               $('#t').click(function(){
                                                $('#fnoadmin').show();
                                                $('#fadmin').show();
                                            });
                                              $('#k').click(function(){
                                                $('#fnoadmin').hide();
                                                $('#fadmin').hide();

                                        });
                                      }); 
                                    </script>-->
                                </div>
                            </div>
                        </div><br><br>
                   <!-- <div class="col-md-3" style="padding-left:30px">
                        <img src="img/tokoemas3.jpg" width="200px" height="200px" style="float:center">-->
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    

    <div class="copyrights text-center">
        <p>Continue Dev <a href="https://bootstrapious.com/admin-templates" class="external">Continue Dev</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>