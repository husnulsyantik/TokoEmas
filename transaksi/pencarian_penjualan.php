<?php
include"header.php"
?>

 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Pencarian Penjualan</h2>
            </div>
          </header>
<!-- form sales-->
          <section class="forms">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-6 col-sm-6"><br/>
                    
                        <form>
                             
                            <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Kriteria </label>
                      <div class="col-sm-6">
                        <input type="text" name="kriteria" class="form-control form-control-success">
                      </div>
                    </div>
                             <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Kata Kunci </label>
                      <div class="col-sm-6">
                        <input type="text" name="kata_kunci" class="form-control form-control-success">
                      </div>
                    </div>
                        <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Urut Berdasarkan </label>
                      <div class="col-sm-6">
                        <input type="text" name="urut_berdasarkan" class="form-control form-control-success">
                      </div>
                    </div>
                            
                            
                            
                             
                           
                        </form>
                     </div>
                 
                    <div class="card-body">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                              <th>No</th>
                            <th>No Transaksi</th>
                            <th>Kode Barang</th>
                            <th>Tanggal</th>
                            <th>##</th>
                            <th>Berat</th>
                            <th>Netral</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>T1</td>
                            <td>A1</td>
                            <td>08,08,1999</td>
                            <td>jember</td>
                            <td>hyigi</td>
                              <td>hyuhy</td>
                            
                            
                          </tr>
                         
                        </tbody>
                          
                      </table>
                         <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-5">
                            <button type="submit" class="btn btn-primary">OK</button>
                            <button type="submit" class="btn btn-xs">Batal</button>
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
