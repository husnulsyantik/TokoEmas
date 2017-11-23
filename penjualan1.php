<?php 
	include 'header.php';
    
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Penjualan</h2>
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
                      <h3 class="h4">Memasukkan Kode Barang</h3>
                    </div>
					 <div class="card-body">
					 <p>Memasukkan kode barang, berat timbangan, kadar dan harga.<p>
                      <form class="form-horizontal">
                                            
                        <div class="line"></div>
                       <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kode Barang</label>
                          <div class="col-sm-6 select">
                            <select name="account" class="form-control">
                              <option>001</option>
                              <option>002</option>
                              <option>003</option>
                              <option>004</option>
                              <option>005</option>
                              
                              </select>
                          </div>
                            </div>
                           <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat Timbangan </label>
                      <div class="col-sm-6">
                        <input type="text" name="berat" class="form-control form-control-success">
                      </div>
                    </div>
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kadar</label>
                          <div class="col-sm-6 select">
                            <select name="account" class="form-control">
                              <option>BM</option>
                              <option>CTK</option>
                              <option>AYU</option>
                              </select>
                          </div>
                            </div>
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Harga</label>
                          <div class="col-sm-3 select">
                            <input id="option" type="checkbox" value="">
                              <label for="option">Harga sesuai harga toko</label>
                          </div>
                               <div class="col-sm-3">
                        <input type="text" name="berat" class="form-control form-control-success">
                      </div>
                            </div>
                   
                          
                      
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
						   <a href="#"><input type="button" value="&nbsp;&nbsp;Batal&nbsp;&nbsp;" type="submit" class="btn btn-secondary"></a>&nbsp;&nbsp;&nbsp;
                          <a href="penjualan2.php"><input type="button" value="&nbsp;&nbsp;Lanjut&nbsp;>>&nbsp;&nbsp;" type="submit" class="btn btn-primary"></a>
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
	include 'footer.php';
    
?>