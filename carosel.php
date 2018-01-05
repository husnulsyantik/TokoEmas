<?php

include "koneksi.php";
?>

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
      
           <!--boostrap carousel-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
      
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
        
              
        <!--carousel-->      
               <div class="container-fluid">
              <div class="row">
                
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                         </div>
                  <div class="card-body">  
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      	<!-- Carousel Indikator -->
        <ol class="carousel-indicators">
        	<li data-target="carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="carousel-example-generic" data-slide-to="1"></li>
        </ol>
        
        <!-- Wrapper for Slide -->
        <div class="carousel-inner">
        	<div class="item active">
            <center><img src="img/gold5.jpg" width="1070px" height="400"alt="Slide 1" ></center>
                <div class="carousel-caption">
                	<h3>BUMI MAS GOLD</h3>
                    <p style="color:white">SILENCE IS GOLD</p>
                </div>
            </div>
            <div class="item">
            <center>	<img src="img/gold3.jpg" width="1070px" height="400" alt="Slide 3"></center>
                <div class="carousel-caption">
                	<h3>BUMI MAS GOLD</h3>
                    <p style="color:white">SILENCE IS GOLD</p>
                </div>
            </div>
            
            <div class="item">
            <center>	<img src="img/gold1.jpg" width="1070px" height="400" alt="Slide 4"></center>
                <div class="carousel-caption">
                	<h3>BUMI MAS GOLD</h3>
                    <p style="color:white">SILENCE IS GOLD</p>
                </div>
            </div>
            
            <div class="item">
            <center><img src="img/gold2.jpg" width="1070px" height="400" alt="Slide 5"></center>
                <div class="carousel-caption">
                	<h3>BUMI MAS GOLD</h3>
                    <p style="color:white">SILENCE IS GOLD</p>
                </div>
            </div>
            <div class="item">
            <center>	<img src="img/gold4.jpg" width="1070px" height="400" alt="Slide 6"></center>
                <div class="carousel-caption">
                	<h3>BUMI MAS GOLD</h3>
                    <p style="color:white">SILENCE IS GOLD</p>
                </div>
            </div>
            
            
        </div>
        
        <!-- Control -->
        <a href="#carousel-example-generic" class="carousel-control left" data-slide="prev" role="button">
        	<span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel-example-generic" class="carousel-control right" data-slide="next" role="button">
        	<span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
                      </div>
    </div>
                  </div>     </div></div> 
        <!-- akhiran carousel-->
        
        <div class="container-fluid">
            
                <div class="row">
                    <div class="col-lg-12">
                       <div class="card">
                            <div class="card-close">
                         </div>
      <div class="card-body">
         
<br>            <?php
$data=mysqli_query($conn, "select foto,nama_barang from barang limit 3"); 
while($query=mysqli_fetch_array($data)) {
?>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="recent-work-wrap"><br>
                        <img class="img-responsive" src="/TokoEmas/upload/<?php echo $query['foto'] ;?>" alt="/TokoEmas/upload/<?php echo $query['foto'] ;?>" style="width:400px; height:250px;" >
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><center><span style="color:black"><?php echo $query['nama_barang'] ;?></span></center></h3>
                                <a class="preview" href="/TokoEmas/upload/<?php echo $query['foto'] ;?>" rel="prettyPhoto">
                                <i class="fa fa-eye"></i> View</a>
                            
                             </div> 
                       
                        </div>
                        
                    </div>
                    
                </div><?php } ?>   
                    </div> </div>
            </div>
            </div>
        </div>
        
        
        
        
        
        
 <!-- Forms Section-->
          <section class="forms">  
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-close">
                         </div>
                    <div class="card"><br>
                <h1> <strong><center> Grafik penjualan<p>Setiap Bulan/harga gram</p></center><br></strong></h1>
                <canvas id="myChart" width="1070px" height="300"></canvas>
                    </div>
                </div>
                </div>
            </div>
              
           
              
              
        
             <!-- GRAFIK-->
              <div class="container">
              
                <script>
                var ctx = document.getElementById("myChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php
                                            $query = mysqli_query($conn,"SELECT * FROM penjualan group by month(tanggal_penjualan) ");
                                            
                                                while($data = mysqli_fetch_array($query)){
                                                    
                                                    echo substr ($data['tanggal_penjualan'],5,2).",";
                                                }
                                      ?>],
   
                        datasets: [{
                                label: 'Daerah Perubahan Harga',
                                data: [ 
                                    <?php
                                           $query = mysqli_query($conn,"SELECT sum(harga_gram) as jum FROM penjualan group by month(tanggal_penjualan) ");
                                    while($data = mysqli_fetch_array($query)){
                                                    echo $data['jum'].",";
                                                }
                                      ?> ],
   
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
                  </div>
              
              
             
              
              
            
              
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </body>
