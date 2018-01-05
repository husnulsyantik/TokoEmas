<?php
include "../header.php";
include "../koneksi.php";
?>

 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Tambah Baki</h2>
            </div>
          </header>
<!-- form sales-->
          <section class="dashboard-counts">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                
                  
                 
                  <div class="col-lg-12">
                  <form class="form-horizontal">
				 <div class="form-group">
				   <div class="col-sm-5 offset-sm-6">
                          
							</div>
						
                      </div>
                      </form></div>
                  
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
                            
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">BAtal</button>
                              <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            </div>
                            </form>
                          </div>
                        </div>
                    </div>
</section>
                  
                
          <!-- form sales    -->

                 
<?php
include "../footer.php"
?>
