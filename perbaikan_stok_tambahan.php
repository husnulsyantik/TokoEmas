<?php include "header.php";
?>
<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Perbaikan stok tambahan</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Form Perbaikan stok Tambahan</li>
            </ul>
          </div> 
            <!-- form import data-->
             <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
          <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                   
                    <div class="card-header d-flex align-items-center">
                      <u class="h4">Perbaikan stok Tambahan</u>
                    </div>
                      <div class="col-lg-12">
                      <p>Fasilitas Perbaikan stok tambahan berfungsi untuk memperbaiki stok item</p> 
                      <p>apabila terjadi kesalahan perhitungan stok pada daftar tambahan.</p>
                      <p> stok akan dihitung dari awal transaksi sampai akhir transaksi yang </p>
                      <p>pernah di catat pada program. klik tombol proses untuk memulai perhitungan stok</p>
                    
                      
                           <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Proses perhitungan stock</label>
                          
                        </div>
                          <div class="col-sm-9">
                            <div class="form-group">
                              <div class="input-group">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                          </div>
                          
                    <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-9 offset-sm-9">
                            <button type="submit" class="btn btn-secondary">Batal</button>
                            <button type="submit" class="btn btn-primary">Proses</button>
                          </div>
                        </div> 
                      </div>
                  </div>
               
                
                     </div>
              </div>
            </div>
            </section>
            
          <!-- form import data  -->
    
<?php include "footer.php";
?>