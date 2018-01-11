<?php
	include '../koneksi.php';
?>

<?php
 include '../header.php';
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Update Data Barang</h2>
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
                    <?php
                        $id=$_GET["update"];
                        $query = mysqli_query($conn,"SELECT * FROM jenis_barang where idjenis_barang=$id");
                        echo mysqli_fetch_lengths($query);
                        while($data = mysqli_fetch_array($query)) {
                        echo $data['idjenis_barang'];
                        }
                        ?>
                    </div>
                      <div class="card-body">
                      <form class="form-horizontal" method="post"> <!-- pembuatan form -->
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Id Jenis Barang </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">

                        <input type="text" name="idjenis_barang" class="form-control" value="<?php echo $_GET["update"]; ?>"disabled>
                      </div>
                    </div>
                      <div class="form-group row">

                      <label class="col-sm-3 form-control-label">Nama Jenis Barang </label>
                          <div class="col-sm-6">

                              <input type="text" name="idjenis_barang" class="form-control" value="<?php echo $_GET["update"]; ?>">

                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Singkatan </label>
                          <div class="col-sm-6">
                              <input type="text" name="singkatan" class="form-control" required="">
                          </div>
                        <div class="line"></div>
                    <div class="col-sm-4 offset-sm-3">
                     <input type="submit" value="Simpan" class="btn btn-primary" name="input"><!-- pembuatan button submit form-->&nbsp;&nbsp;
                      <!-- pembuatan button jika ingin membatalkan form -->&nbsp;
                      <!-- pembuatan button jika ingin menutup form -->
                    </div>

                  </form>

<?php
?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>



<?php
    include '../footer.php';
?>
