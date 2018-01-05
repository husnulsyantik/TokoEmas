<?php
include "../header.php";
include "../koneksi.php";

function idpengeluaran() {
	include '../koneksi.php';
  $query = mysqli_query($conn,"select idpengeluaran from pengeluaran order by idpengeluaran desc limit 0,1") or die(mysqli_error());
	list ($no_temp) = mysqli_fetch_row($query);

	if ($no_temp == '') {
		$no_urut = 'PG001';

		} else {
		$jum = substr($no_temp,1,4);
		$jum++;
		if($jum <= 9) {
			$no_urut = 'P00' . $jum;
		}
    if ($jum <= 99) {
			$no_urut = 'P0' . $jum;
		}
    if ($jum <= 999) {
			$no_urut = 'P' . $jum;
		}
    else {
			die("Nomor urut melebih batas");
		}
	}
		return $no_urut;
}

$idpengeluaran = idpengeluaran();

?>
 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Pengeluaran Lain-lain</h2>
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
                      <table class="table table-striped table-hover" id="tabel_data">
                        <thead>
                            <th>Tanggal</th>
                            <th>Detail Pengeluaran</th>
                            <th>Harga</th>
                            <th>Toko</th>
                            
                          
                        </thead>
                        <tbody>
                             <?php
                 $query = mysqli_query($conn,"SELECT * FROM pengeluaran inner join toko on pengeluaran.id_toko=toko.idToko");
                 while($data = mysqli_fetch_array($query)){
              ?>
                             <tr>
                              <td><?php echo $data['tanggal_pengeluaran']?></td>
                              <td><?php echo $data['detail_pengeluaran']?></td>
                              <td><?php echo $data['harga']?></td>
                              <td><?php echo $data['Nama_Toko']?></td>
                              
                                                       
                          </tr>
                          <?php } ?>
                        </tbody> 
                          
                      </table>
                         <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Tambah </button>&nbsp;&nbsp;
                            
                              <!-- Modal-->
                      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Data Pengeluaran</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                               <form class="form-horizontal" action="input_pengeluaran.php" method="post"> <!-- pembuatan form -->
                                <div class="form-group row">
                                    <input type="hidden" name="kode" class="form-control form-control-success" value="<?php echo $idpengeluaran ; ?>"> <!-- pembuatan inputan form -->
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Tanggal</label>
                                  <div class="col-sm-6">
                                    <input type="datetime-local" name="tanggal" class="form-control form-control-success" required>
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Detail Pengeluaran</label>
                                  <div class="col-sm-6">
                                    <textarea type="text" name="detail" class="form-control form-control-success" required></textarea>
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Harga</label>
                                  <div class="col-sm-6">
                                    <input type="number" name="harga" class="form-control form-control-success" required>
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Toko</label>
                                  <div class="col-sm-6">
                                    <select type="text" name="toko" class="form-control"><option>--- pilih toko---</option><br />
								   <?php
								   $data=mysqli_query($conn,"SELECT * from toko order by idToko asc") or die(mysqli_error()) ;
								   while($data1=mysqli_fetch_array($data)){
										?>
										<option value="<?php echo $data1['idToko']; ?>"><?php echo $data1['Nama_Toko']; ?></option>
									   <?php } ?>
										</select>
                                  </div>
                                </div>
                                  
                            
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
                              <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                          </div>
                        </div>
                    </div>
</section>
                  
                
          <!-- form sales    -->

                 
<?php
include "../footer.php"
?>
