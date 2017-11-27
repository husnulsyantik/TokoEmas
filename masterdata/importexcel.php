<?php 
	include '../header.php';
    
?>
<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Import Data Dari Excel</h2>
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
                      <h3 class="h4">PILIH SUMBER DATA (PILIH FILE)</h3>
                    </div>
                      <div class="card-body">
                      <form class="form-horizontal">
                        <div class="form-group row">
						
                          <label class="col-sm-3 form-control-label">Sumber Data (File Excel)</label>
						  
                          <div class="col-sm-6">
						  
                            <input type="file" name="browse" class="form-control">
                          </div>
                        </div>
                          
                         
                          
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pilih Work Sheet</label>
                          <div class="col-sm-6 select">
                            <select name="account" class="form-control">
                              <option> 1</option>
                              <option> 2</option>
                              <option> 3</option>
                              <option> 4</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6">
                            <div>
                              <input id="option" type="checkbox" value="">
                              <label for="option">Import kolom pertama pada excel</label>
                            </div>
                            </div>
                        </div>
                          
                          
                          
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-3 offset-sm-3">
						  
						   <a href="pilihan_inport_data.php"><input type="button" value="<<&nbsp;Kembali" type="submit" class="btn btn-secondary"></input></a>&nbsp;&nbsp;
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
