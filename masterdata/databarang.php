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
                      <form class="form-horizontal"> <!-- pembuatan form -->
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Id Barang </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
                        <input type="text" name="idBarang" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama Barang </label>
                      <div class="col-sm-6">
                        <input type="text" name="nama_barang" class="form-control form-control-success">
                      </div>
                    </div>
                         
                     <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kadar</label>
                          <div class="col-sm-6 select">
                         <select name="id_jenisbarang" id="idkadar" class="form-control">
						<option value="">--Pilih Kadar Barang--</option>
				<?php
						$kadar1=mysqli_query($conn,"SELECT * FROM kadar order by nama_jenis_barang");
						while ($kadar2=mysqli_fetch_array($kadar1)) { ?>
                             
                        <option value="<?php echo $kadar2['id_jenisbarang'];?>"> <?php echo $kadar2['kode'];?> <?php echo $kadar2["kadar_persen"] ?>%</option>
<!--					<option value="<?php //echo $kadar2["id_jenisbarang"]?>"><?php //echo $kadar2["kode"] ($kadar2["kadar_persen"])?>%</option>-->
				<?php } ?>
						  </select>
                          </div>
                            </div>
                       <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jenis Barang</label>
                          <div class="col-sm-6 select">
                            <select name="id_jenisbarang" id="idjenisbarang" class="form-control">
						<option value="">--Pilih Jenis Barang--</option>
							<?php
						
						$kadar1=mysqli_query($conn,"SELECT * FROM jenis_barang order by nama_jenis_barang");
						while ($jenis2=mysqli_fetch_array($kadar1))
						{ ?>
							
                                <option value="<?php echo $jenis2['idjenis_barang'];?>"> <?php echo $jenis2['singkatan'];?>&nbsp;<?php echo $jenis2['nama_jenis_barang']?> </option>
<!--								echo "<option value=$jenis2[id_jenisbarang]>$jenis2[singkatan]($jenis2[nama_jenis_barang])</option>";-->
							<?php	}
						?>
						  </select>
                          </div>
                            </div>
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Baki</label>
                          <div class="col-sm-6 select">
						   <select name="idBaki" id="idBaki" class="form-control">
						
						  </select>
						  </div>
                            </div>
                          
                          
                    <script type="text/javascript">
                        
                            $("#idjenisbarang").change(function(){
                                var jenisBarang = $("#idjenisbarang").val();
                                $.ajax({
                                    type:"POST",
                                    dataType:"html",
                                    url:"ambilbaki.php",
                                    data:"jb="+jenisBarang,
                            
                                    success:function(msg){
                                    $("#idBaki").html(msg);
                                }
                                });
                            });
                       

                    </script>
                          
                          
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat</label>
                      <div class="col-sm-6">
                        <input type="text" name="default" class="form-control form-control-success">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Foto </label>
                       <div class="col-sm-6">
						  
                            <input type="file" name="browse" class="form-control">
                          </div>
                    </div>
					  
                        <div class="line"></div>
                    <div class="col-sm-4 offset-sm-3">
                     <a href="../sales2.php"> <input type="button" value="Simpan" class="btn btn-primary"> </a><!-- pembuatan button submit form-->&nbsp;&nbsp;
                      <a href="#"><input type="button" type="submit" class="btn btn-secondary"value="&nbsp;Batal&nbsp;"></a><!-- pembuatan button jika ingin membatalkan form -->&nbsp;
                      <!-- pembuatan button jika ingin menutup form -->
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