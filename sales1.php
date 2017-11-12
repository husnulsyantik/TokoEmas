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
                <!-- Form tambah data sales -->
                <div class="col-lg-10">
                  <div class="card">
                    
                    <div class="card-body">
                      <form class="form-horizontal"> <!-- pembuatan form -->
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kode </label> <!-- pembuatan label form -->
                      <div class="col-sm-4">
                        <input type="text" name="kode" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama </label>
                      <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control form-control-success">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Alamat </label>
                      <div class="col-sm-4">
                        <input type="text" name="alamat" class="form-control form-control-success">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kota </label>
                      <div class="col-sm-4">
                        <input type="text" name="kota" class="form-control form-control-success">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Telephone </label>
                      <div class="col-sm-4">
                        <input type="number" name="telp" class="form-control form-control-success">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Default </label>
                      <div class="col-sm-4">
                        <input type="text" name="default" class="form-control form-control-success">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Status </label>
                      <div class="col-sm-4">
                        <input type="text" name="status" class="form-control form-control-warning">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <input type="submit" value="Simpan" class="btn btn-primary"> <!-- pembuatan button submit form-->
                      <a href="#"><button type="submit" class="btn btn-secondary">Batal</button></a><!-- pembuatan button jika ingin membatalkan form -->
                      <a href="sales2.php"><input type="button" class="btn btn-danger" value="Tutup"></a><!-- pembuatan button jika ingin menutup form -->
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