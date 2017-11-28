<?php
include"header.php"
?>

 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Penjualan</h2>
            </div>
          </header>
<!-- form sales-->
          <section class="forms">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-6 col-sm-6"><br>
                    
                        <form>
                             
                            <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Kode </label>
                      <div class="col-sm-6">
                        <input type="text" name="kode" class="form-control form-control-success">
                      </div>
                    </div>
                            
                            
                            
                            
                             
                           
                        </form>
                     </div>
                  <div class="col-xl-6 col-sm-6"><br>
                    
                        <form>
                             
                            <div class="form-group row">
                      <label class="col-sm-3 form-control-label">NoTransaksi </label>
                      <div class="col-sm-6">
                        <input type="text" name="no_transaksi" class="form-control form-control-success">
                      </div>
                    </div>
                             <div class="form-group row">
                      <label class="col-sm-3 form-control-label">User </label>
                      <div class="col-sm-6">
                        <input type="text" name="user" class="form-control form-control-success">
                      </div>
                    </div>
                            <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Tanggal & Jam </label>
                      <div class="col-sm-6">
                        <input type="text" name="tgl&jam" class="form-control form-control-success">
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
                        <input type="text" name="alamat" class="form-control form-control-success">
                      </div>
                    </div>
                            
                            
                            
                             
                           
                        </form>
                     </div>
                  
                  
       
                  
                  
                    <div class="card-body">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Biji</th>
                            <th>Barang</th>
                            <th>Kadar</th>
                            <th>Berat</th>
                            <th>Mta</th>
                            <th>Ongkos</th>
                            <th>Total</th>
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
                              <td>PA1</td>
                              
                            
                          </tr>
                         
                        </tbody>
                          
                      </table>
                         <div class="col-sm-5 offset-sm-10">
                                <div class="col-sm-5">
                        <input type="text" name="status" placeholder="Pandaan 1" class="form-control form-control-warning">
                                </div><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-secondary">Cetak</button>
                            
                            
                          </div>
                        
                         <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-5 offset-sm-3">
                           <button type="button" data-toggle="modal" data-target="#my" class="btn btn-primary">Tambah </button>
                            <button type="submit" class="btn btn-xs">Cari</button>
                            <button type="submit" class="btn btn-secondary">Batal</button>
                            <button type="submit" class="btn btn-secondary">Keluar</button>
                              
                              <!-- Modal-->
                      <div id="my" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Data</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <form class="form-horizontal"> <!-- pembuatan form -->
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Biji </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="text" name="biji" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Barang </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="text" name="barang" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Kadar </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="text" name="kadar" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="text" name="berat" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Mta </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="text" name="mta" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                     
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Ongkos </label>
                      <div class="col-sm-6">
                        <input type="text" name="ongkos" class="form-control form-control-success">
                      </div>
                                  </div>
                        <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Total </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="text" name="total" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                          
                        
                           
                  </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                <a href="pengeluaran_lain1.php"><button type="button" class="btn btn-primary">Save changes</button></a>
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
include"footer.php"
?>
