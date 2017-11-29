<?php 
	include '../header.php';
    
?> <!-- Page Header-->
<header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Reparasi</h2>
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
                      <h3 class="h4">Data Reparasi</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode</th>
                            <th>Barang</th>
                            <th>Berat</th>
                            <th>Ongkos</th>
                            <th>Tanggal Ambil</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <th>1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                           
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <th>gdg</th>
                            <td>Mark</td>
                            <td>Otto</td>
                          
                          </tr>
                         
                        </tbody>
                      </table>
                         <div class="col-sm-6 offset-sm-3">
                           <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Tambah </button>&nbsp;&nbsp;
                            <a href="#"><button type="submit" class="btn btn-xs">Edit</button></a>&nbsp;&nbsp;
                            <a href="#"><button type="submit" class="btn btn-secondary">Cari</button></a>&nbsp;&nbsp;
                            <a href="#"><button type="submit" class="btn btn-danger">Keluar</button></a>
                             
                             <!-- Modal-->
                      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Data Sales</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <form class="form-horizontal"> <!-- pembuatan form -->
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Tanggal </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="date" name="tgl" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Kode </label>
                      <div class="col-sm-6">
                        <input type="text" name="kode" class="form-control form-control-success">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Barang </label>
                      <div class="col-sm-6">
                        <textarea type="text" name="barang" class="form-control form-control-success"></textarea>
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat </label>
                      <div class="col-sm-6">
                        <input type="text" name="berat" class="form-control form-control-success">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Ongkos </label>
                      <div class="col-sm-6">
                        <input type="number" name="ongkos" class="form-control form-control-success">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Tanggal Ambil </label>
                      <div class="col-sm-6">
                        <input type="date" name="tgl_ambil" class="form-control form-control-success">
                      </div>
                    </div>
                    
					  
                     
                  </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                                <a href="#.php"><button type="button" class="btn btn-primary">Simpan</button></a>
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
</section><br><br><br><br>
<?php
    include '../footer.php';
?>