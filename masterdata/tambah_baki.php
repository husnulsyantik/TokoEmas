<?php
	include '../koneksi.php';

    include '../header.php';
	
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Tambah Data Barang</h2>
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
                      <form class="form-horizontal" action="input_baki.php" method="post"> <!-- pembuatan form -->
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Jenis Barang</label>
                          <div class="col-sm-6 select">
						   <select name="idjenis_barang" id="idjenis_barang" class="form-control">
						<option value="">--Pilih Jenis Barang--</option>
                            	<?php
						
						$baki1=mysqli_query($conn,"SELECT * FROM jenis_barang");
						while ($baki2=mysqli_fetch_array($baki1))
						{
							if($baki2['idjenis_barang']==$_POST['idjenis_barang'])
							{
								echo "<option value=$baki2[idjenis_barang] selected>$baki2[idjenis_barang] </option>";
								}
								else
								echo "<option value=$baki2[idjenis_barang]>$baki2[idjenis_barang] </option>";
								}
						?>
						  </select>
						  </div>
                            </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">ID Baki</label>
                      <div class="col-sm-6">
                        <input type="text" name="idBaki" class="form-control form-control-success">
                      </div>
                    </div>
                   
					  
                        <div class="line"></div>
                    <div class="col-sm-4 offset-sm-3">
                        <a href="tambah_baki.php"><button type="button" class="btn btn-secondary">Batal</button></a>
                              <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </div>
                  </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

<?php
    include '../footer.php';
?>