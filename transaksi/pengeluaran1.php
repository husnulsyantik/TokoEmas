<?php 
	include '../header.php';
    
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Pengeluaran</h2>
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
                      <h3 class="h4">Pilihlah Jenis Pengeluaran</h3>
                    </div>
					 <div class="card-body">
					 <p>Pilih opsi pengeluaran dibawah ini, kemudian klik tombol Ok.<p>
                      <form class="form-horizontal">
                                            
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Silahkan Pilih</label>
                          <div class="col-sm-6 select">
                            <select name="account" class="form-control">
                              <option>Lebur</option>
                              <option>Pengeluaran Lain</option>
                              
                              </select>
                          </div>
                            </div>
                          
                      
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
						   <a href="#"><input type="button" value="&nbsp;&nbsp;Batal&nbsp;&nbsp;" type="submit" class="btn btn-secondary"></a>&nbsp;&nbsp;&nbsp;
                            <a href="#"><input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;Ok&nbsp;&nbsp;&nbsp;&nbsp;" type="submit" class="btn btn-primary"></a>
                          </div>
						    
							</div>
                         </form>
                    </div>
                  </div>
                </div> 
                </div>
              </div>			
          </section><br>
          <?php 
	include '../footer.php';
    
?>