<?php
    include '../header.php';
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Import Data</h2>
            </div>
          </header>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                  <!-- Form import database  -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                     
                    </div>
					<div class="card-header d-flex align-items-center">
                      <h3 class="h4">PILIH SUMBER DATA (PILIH FILE)</h3>
                    </div>
					 <div class="card-body">
					 <p>Pilih Sumber Data yang akan di Import lalu tekan Tombol Lanjut<p>
                      <form class="form-horizontal">
					  
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tentukan Lokasi Database</label>
                          <div class="col-sm-6 select">
						  
                        
                              <input type="file" placeholder="Email Address" class="form-control">
                            </div>
							
							 </div>
                           
                          
                      
                      <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
						  
						      <a href="#"><input type="button" value="<<&nbsp;Kembali" type="submit" class="btn btn-secondary"></input></a>&nbsp;&nbsp;
                            <a href="#"><input type="button" value="&nbsp;&nbsp;&nbsp;Import&nbsp;&nbsp;&nbsp;" type="submit" class="btn btn-primary"></input></a>
						</div>

                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

<?php
    include '../footer.php';
?>
          