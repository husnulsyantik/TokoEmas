<?php
include "../header.php";
include "../koneksi.php";
?>

 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Sales</h2>
            </div>
          </header>
<!-- form sales-->
          <section class="dashboard-counts">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                
                  
                 
                  <div class="col-lg-12">
                  <form class="form-horizontal">
				 <div class="form-group">
				   <div class="col-sm-5 offset-sm-6">
                          <div class="input-group">
                            <input type="text" class="form-control"><span class="input-group-btn">
                              <button type="button" class="btn btn-primary">Search</button></span>
                          </div>
							</div>
						
                      </div>
                      </form></div>
                  
                    <div class="card-body">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telpon</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                           
                          <tr>
                            <th scope="row">1</th>
                            <td>PA1</td>
                            <td>adi</td>
                            <td>kencong</td>
                            <td>jember</td>
                            <td>08674565665</td>
                            <td>Aktif</td>
                            
                          </tr>
                            
                         
                        </tbody>
                          
                          
                      </table>
                         <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Tambah </button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-xs">Edit</button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-secondary">Hapus</button>
                              <!-- Modal-->
                      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Data Sales</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                               <form class="form-horizontal" action="input_sales.php" method="post"> <!-- pembuatan form -->
                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Kode </label> <!-- pembuatan label form -->
                                  <div class="col-sm-6">
                                    <input type="text" name="kode" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Nama </label>
                                  <div class="col-sm-6">
                                    <input type="text" name="nama" class="form-control form-control-success">
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Alamat </label>
                                  <div class="col-sm-6">
                                    <textarea type="text" name="alamat" class="form-control form-control-success"></textarea>
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Kota </label>
                                  <div class="col-sm-6">
                                    <input type="text" name="kota" class="form-control form-control-success">
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Telephone </label>
                                  <div class="col-sm-6">
                                    <input type="number" name="telp" class="form-control form-control-success">
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Default </label>
                                  <div class="col-sm-6">
                                    <input type="text" name="default" class="form-control form-control-success">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Status </label>
                                  <div class="col-sm-6">
                                    <input type="text" name="status" class="form-control form-control-warning">
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary" name="simpan">Save changes</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                          </div>
                        </div>
                    </div>
                  
                  </div>
                </div>
          </section>
          <!-- form sales    -->

                 
<?php
include "../footer.php"
?>
