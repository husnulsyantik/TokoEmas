<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Toko Bumimas</title>
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
		<script src="vendor/jquery/jquery.js"></script>
      <script src="vendor/chart.js/Chart.bundle.js"></script>
<!--      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>-->
<!--        <script src="Chart.bundle.js"></script>-->
        <style type="text/css">
            .container-fluid {
                width: 100%;
                margin: 15px auto;
            }
        </style>
  </head>
  <body>
    <div class="page form-page">
      <!-- Main Navbar-->
     
      
            <?php
include "header.php"
?>
   
  
 <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">HOME</h2>
            </div>
          </header>
 <!-- Forms Section-->
          <section class="forms">  
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-close">
                         </div>
                    <div class="card"><br>
                <h1> <strong><center> Grafik Perkembangan Harga Emas per Bulan</center><br></strong></h1>
                <canvas id="myChart" width="1070px" height="300"></canvas>
                    </div>
                </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("myChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "Oktober", "November", "Desember"],
    //                    labels: [<?php //while ($b = mysqli_fetch_array($bulan)) { echo '"' . $b['bulan'] . '",';}?>],
                        datasets: [{
                                label: '# of Votes',
                                data: [10, 12, 13, 9, 14, 18, 20, 11, 15, 25, 12, 16],
    //                            data: [<?php //while ($p = mysqli_fetch_array($penghasilan)) { echo '"' . $p['hasil_penjualan'] . '",';}?>],
                                backgroundColor: [
    //                                'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
    //                                'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
            </script>
              
            <div class="container-fluid">
              <div class="row">
                
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                         </div>
                    
					 <div class="card-body">
                   <h1> <strong><center> Visi</center><br></strong></h1>
                    <p> Menjadi toko emas yang terbaik dan terpercaya yang selalu mengutamakan kualitas produk dan pelayanan yang ramah, jujur dan cepat.</p><br>
                    <h1> <strong><center> Misi</center><br></strong></h1>  
                    <p>1. Menyediakan produk yang terbaik dan model-model terbaru</p>
                    <p>2. Menjamin kepuasan pelanggan dengan pelayanan yang diberikan</p>
                    <p>3. Perbaikan yang berkelanjutan</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</section>

    <?php
?>
 <!-- Page Footer-->
       <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Continue Dev &copy; 2017</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
       
    <!-- Javascript files-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>