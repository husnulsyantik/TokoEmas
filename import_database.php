<?php
    include 'header.php';
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Import Data</h2>
            </div>
          </header>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                  <!-- Form import database  -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <p>PILIH SUMBER DATA (PILIH FILE)</p><br><br><br>
                      <form>
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label class="form-control-label">Tentukan Lokasi Database</label>
                              <input type="file" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="form-group" style="float:right">
                              <input type="button" value="Kembali" class="btn btn-secondary">
                              <input type="submit" value="Import" class="btn btn-primary">
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
    include 'footer.php';
?>
          