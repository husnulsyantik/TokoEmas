<?php 
	include 'header.php';
    
?> <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Tambah Data Sales</h2>
            </div>
          </header>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
<!-- Form Elements -->
                 <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close"></div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Konfirmasi Data</h3>
                    </div>
					 <div class="card-body">
					 <form class="form-horizontal">     
                        <div class="line"></div>
                      <form class="form-horizontal"> <!-- pembuatan form -->
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Kode </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="text" name="kode" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                          
                     <div class="form-group row">
                        <div class="col-sm-3">
                        <textarea type="text" class="form-control form-control-success"\></textarea>
                      </div>
                         
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama Barang </label>
                      <div class="col-sm-6">
                        <input type="text" name="nama_barang" class="form-control form-control-success">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat</label>
                      <div class="col-sm-6">
                        <input type="number" name="berat" class="form-control form-control-success">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Stempel </label>
                      <div class="col-sm-6">
                        <input type="text" name="stempel" class="form-control form-control-success">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Panjang / Diameter </label>
                      <div class="col-sm-6">
                        <input type="text" name="pj/diameter" class="form-control form-control-warning">
                      </div>
                    </div>
					  
                        <div class="line"></div>
                    <div class="col-sm-4 offset-sm-3">
                      <a href="lebur1.php"><input type="button" value="<<&nbsp;Kembali&nbsp;" type="submit" class="btn btn-secondary"></a>&nbsp;&nbsp;
                      <a href="#"><input type="button" class="btn btn-primary" value="&nbsp;&nbsp;&nbsp;Lebur&nbsp;&nbsp;&nbsp;"></a><!-- pembuatan button jika ingin menutup form -->
                    </div>
                  </form>
                         </form>
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

<?php
    include 'footer.php';
?>