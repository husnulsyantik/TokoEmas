<?php 
	include 'header.php';
    
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Tambahan</h2>
            </div>
          </header>          
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                     
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">BM</h3>
                    </div>
					 <div class="card-body">
					 <p>Pilih salah satu opsi dibawah lalu tekan Lanjut<p>
                      <form class="form-horizontal">
                                            
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Silahkan Pilih</label>
                          <div class="col-sm-6 select">
                            <select name="account" class="form-control">
                              <option>A</option>
                              <option>B</option>
                              <option>BC</option>
							  <option>BA</option>
                              <option>BL</option>
                              <option>C</option>
							  <option>D</option>
							  <option>E</option>
                              <option>F</option>
                              </select>
                          </div>
                            </div>
                          
                      
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
						  <a href="kadar.php"><input type="button" value="<<&nbsp;Kembali" type="submit" class="btn btn-secondary"></input></a>&nbsp;&nbsp;
                            <a href="baki.php"><input type="button" value="&nbsp;&nbsp;Lanjut&nbsp;>>&nbsp;&nbsp;" type="submit" class="btn btn-primary"></input></a>
						</div>
						    </div>
							</div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              
			
          </section>
         <?php 
	include 'footer.php';
    
?>