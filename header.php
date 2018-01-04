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
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../datatable/dataTables.bootstrap.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
		<script src="../vendor/jquery/jquery.js"></script>
  </head>
  <body>
    <div class="page form-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="/TokoEmas/index.php" class="navbar-brand">
                  <div class="brand-text brand-big"><span>TOKO </span><strong>EMAS</strong></div>
                  <div class="brand-text brand-small"><strong>TE</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
			      
                <!-- Logout    -->
                <li class="nav-item" ><a href="/TokoEmas/logout.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
          
            <div class="title">
              <h1 class="h4">Husnul Hotimah</h1>
              <p>Kasir</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
		   <li class=""> <a href="/TokoEmas/index.php"><i class="fa fa-home"></i>Dasboard</a></li>
             <li ><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-th-large"></i>Master Data </a>
			 
              <ul id="dashvariants" class="collapse list-unstyled">
				
              <li ><a href="#dashvariants3" aria-expanded="false" data-toggle="collapse">Daftar Tambahan </a>
              <ul id="dashvariants3" class="collapse list-unstyled" >
			  
                <li><a href="/TokoEmas/masterdata/backup.php">BackUp Data</a></li>
                <li><a href="/TokoEmas/masterdata/pilihan_inport_data.php">Import Data</a></li>
				<li><a href="/TokoEmas/masterdata/perbaikan_stok_tambahan.php">Perbaikan Stok tambahan</a></li>
                      </ul>
            </li>
				
                <li><a href="/TokoEmas/masterdata/sales2.php">Sales</a></li>
				<li><a href="/TokoEmas/masterdata/barang.php">Data Barang</a></li>
              </ul>
            </li>
			   <li ><a href="#dashvariants2" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-th-list"></i>Transaksi </a>
              <ul id="dashvariants2" class="collapse list-unstyled">
			  
                <li><a href="/TokoEmas/transaksi/pengeluaran1.php">Pengeluaran</a></li>
                <li><a href="/TokoEmas/transaksi/penjualan1.php">Penjualan</a></li>
				<li><a href="/TokoEmas/transaksi/pinjam1.php">Pinjam</a></li>
                <li><a href="/TokoEmas/transaksi/reparasi.php">Reparasi</a></li>
                <li><a href="/TokoEmas/transaksi/cuci.php">Cuci</a></li>
                <li><a href="/TokoEmas/transaksi/pemesanan.php">Pemesanan</a></li>
              </ul>
            </li>
            <li class=""> <a href=""><i class="fa fa-book"></i>Laporan</a></li>
            <li class=""> <a href=""><i class="fa fa-check"></i>Check Up</a></li>
            <li class=""> <a href=""><i class="fa fa-wrench"></i>Options</a></li> 
			<li class=""> <a href="/TokoEmas/login.php"><i class="fa fa-user"></i>Login Page</a></li> 
			
          </ul>
        </nav>
		   
        <div class="content-inner">
                
   
  </body>
</html>