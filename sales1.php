<?php
    include 'header.php';
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Tambah Data Sales</h2>
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
					  
                        <div class="line"></div>
                    <div class="col-sm-4 offset-sm-3">
                     <a href="sales2.php"> <input type="button" value="Simpan" class="btn btn-primary"> </a><!-- pembuatan button submit form-->&nbsp;&nbsp;
                      <a href="#"><input type="button" type="submit" class="btn btn-secondary"value="&nbsp;Batal&nbsp;"></a><!-- pembuatan button jika ingin membatalkan form -->&nbsp;&nbsp;
                      <a href="sales2.php"><input type="button" class="btn btn-danger" value="&nbsp;Tutup&nbsp;"></a><!-- pembuatan button jika ingin menutup form -->
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