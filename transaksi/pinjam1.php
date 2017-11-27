<?php 
	include '../header.php';
    
?> <!-- Page Header-->
<header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Pinjam</h2>
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
                      <h3 class="h4">Memasukkan Data Pinjam</h3>
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
                            <th>Pinjam</th>
                            <th>Tanggal Ambil</th>
                            <th>Ongkos</th>
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
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <th>gdg</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                         
                        </tbody>
                      </table>
                         <div class="col-sm-6 offset-sm-3">
                            <a href="#"><button type="submit" class="btn btn-primary">Tambah</button></a>&nbsp;&nbsp;
                            <a href="#"><button type="submit" class="btn btn-x">Edit</button></a>&nbsp;&nbsp;
                            <a href="#"><button type="submit" class="btn btn-secondary">Cari</button></a>&nbsp;&nbsp;
                            <a href="#"><button type="submit" class="btn btn-danger">Keluar</button></a>
                     
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