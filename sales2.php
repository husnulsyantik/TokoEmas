<?php
include"header.php"
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
                <div class="col-xl-6 col-sm-6">
                    
                        <form>
                             <div class="form-group">
                                <label class="form-control-label">Kode</label>
                                    <input type="text" placeholder="Entri Kode" class="form-control">
                            </div>
                             <div class="form-group">
                                <label class="form-control-label">Nama</label>
                                    <input type="text" placeholder="Entri Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Alamat</label>
                                    <input type="text" placeholder="Entri Alamat" class="form-control">
                            </div>
                            <div class="form-group">       
                                 <label class="form-control-label">Urut Berdasarkan</label>
                                      <input type="text" placeholder="urut" class="form-control">
                            </div>
                           
                        </form>
                     </div>
                  
                  <div class="col-xl-6 col-sm-6">
                        <div class="col-md-30">
                        <form>
                             <div class="form-group">
                                <label class="form-control-label">Kota</label>
                                    <input type="text" placeholder="Entri Kota" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Telpon</label>
                                <input type="number" placeholder="Entri telpon" class="form-control">
                            </div>
                            <div class="form-group">       
                                <label class="form-control-label">Aktif</label>
                           <select placeholder="Aktif" class="form-control">
                              <option>Aktif</option>
                              <option>Tidak Aktif</option>
                              
                            </select>
                            
                            </div>
                        
                      </form>
                        </div>
                  
              
                  </div>
                  
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
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="submit" class="btn btn-xs">Edit</button>
                            <button type="submit" class="btn btn-secondary">Hapus</button>
                            
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
