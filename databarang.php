<?php
    include 'header.php';
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Tambah Data Barang</h2>
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
                    

                    <div class="card-body">
                      <form class="form-horizontal"> <!-- pembuatan form -->
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Id Barang </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="text" name="kode" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama Barang </label>
                      <div class="col-sm-6">
                        <input type="text" name="nama" class="form-control form-control-success">
                      </div>
                    </div>
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jenis Barang</label>
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
                          <label class="col-sm-3 form-control-label">Baki</label>
                          <div class="col-sm-6 select">
                            <select name="account" class="form-control">
                              <option>1A</option>
							   <option>2A</option>
							    <option>1B</option>
                                <option>1BC</option>
                                <option>dst..</option>
								</select>
                          </div>
                            </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat</label>
                      <div class="col-sm-6">
                        <input type="text" name="default" class="form-control form-control-success">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Foto </label>
                       <div class="col-sm-6">
						  
                            <input type="file" name="browse" class="form-control">
                          </div>
                    </div>
					  
                        <div class="line"></div>
                    <div class="col-sm-4 offset-sm-3">
                     <a href="sales2.php"> <input type="button" value="Simpan" class="btn btn-primary"> </a><!-- pembuatan button submit form-->&nbsp;&nbsp;
                      <a href="#"><input type="button" type="submit" class="btn btn-secondary"value="&nbsp;Batal&nbsp;"></a><!-- pembuatan button jika ingin membatalkan form -->&nbsp;
                      <!-- pembuatan button jika ingin menutup form -->
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