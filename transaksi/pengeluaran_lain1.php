<?php
include"header.php"
?>

 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Pengeluaran Lain</h2>
            </div>
          </header>
<!-- form sales-->
          <section class="dashboard-counts">
              
            <div class="container-fluid">
               
              <div class="row bg-white has-shadow">
                <!-- Item -->
                  
                <div class="col-xl-6 col-sm-6">
                    
                         <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Bulan</label>
                          <div class="col-sm-9">
                            <select placeholder="Pilih Bulan" class="form-control">
                              <option>Januari</option>
                              <option>Februari</option>
                              
                            </select>
                          </div>
                        </div>
                       
                        </form>
                     </div>
                  
                  <div class="col-xl-6 col-sm-6">
                        <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tahun</label>
                          <div class="col-sm-9">
                            <select placeholder="Pilih Tahun" class="form-control">
                              <option>2016</option>
                              <option>2017</option>
                              
                            </select>
                          </div>
                        </div>
                       
                        </form>
                  
              
                  </div>
                  
                    <div class="card-body">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>jumlah</th>
                            <th>cek</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>1</td>
                            <td>03,05,2017</td>
                            <td>pembelian kalung</td>
                            <td>gambar.jpg</td>
                            
                            
                          </tr>
                         
                        </tbody>
                          
                      </table>
                        
                        
                         <div class="col-sm-6 offset-sm-7">
                         <div class="form-group row">
                       
                          <label class="col-sm-5">Total Pengeluaran</label>
                          <div class="col-md-5">
                                <input type="text" placeholder="Total" class="form-control">
                              </div>
                        </div>
                             </div>
                         <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-6 offset-sm-3">
                            <button type="button" data-toggle="modal" data-target="#my" class="btn btn-primary">Tambah </button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-xs">Edit</button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-secondary">Hapus</button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary">Kembali</button>
                              
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
                      <label class="col-sm-3 form-control-label">Tanggal </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="date" name="kode" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Keterangan </label>
                      <div class="col-sm-6">
                        <textarea type="text" name="keterangan" class="form-control form-control-success"></textarea>
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Biaya </label>
                      <div class="col-sm-6">
                        <input type="text" name="biaya" class="form-control form-control-success">
                      </div>
                                  </div>
                          
                        
                           
                  </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                                <a href="pengeluaran_lain1.php"><button type="button" class="btn btn-primary">Simpan</button></a>
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
