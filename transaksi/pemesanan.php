<?php
include "../header.php";
include "../koneksi.php";
$query = "SELECT max(id_pemesanan) as maxKode FROM pemesanan";
$hasil = mysqli_query($conn,$query);
$data  = mysqli_fetch_array($hasil);
$kodepemesanan = $data['maxKode'];

$noUrut = (int) substr($kodepemesanan, 3, 3);

$noUrut++;

$char = "PE";
$newID = $char . sprintf("%03s", $noUrut);

if(isset($_GET['del']))
{
	mysqli_query($conn,"DELETE FROM pemesanan WHERE id_pemesanan = '$_GET[del]'");
	echo "<script>
alert('Data Sudah Dihapus');
window.location='pemesanan.php';
</script>";	
	}


?>



 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Pemesanan</h2>
            </div>
          </header>
<!-- form pemesanan-->
                 <section class="dashboard-counts">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                            
                          <div class="col-sm-9 offset-sm-10">
                              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Tambah </button> </div>
                              
                              
                  <div class="col-lg-12">
                  <form class="form-horizontal">
				 <div class="form-group">
				   <div class="col-sm-5 offset-sm-6">    
							</div>
                      </div>
                      </form></div>
                  
                    <div class="card-body">
                      <table class="table table-striped table-hover">
                        <thead>
                            <th>Id Pemesanan</th>
                            <th>Berat</th>
                            <th>Harga Gram</th>
                            <th>Harga Total</th>
                            <th>DP Harga</th>
                            <th>ID Kadar</th>
                            <th>ID Jenis Barang</th>
                            <th>ID User</th>
                            <th>ID Toko</th>
                            <th>Pilihan</th>
                        </thead>
                        <tbody>
                             <?php
                 $query = mysqli_query($conn,"SELECT * FROM pemesanan");
                 while($data = mysqli_fetch_array($query)){
              ?>
                           
                          <tr>
                              
                              <td><?php echo $data['id_pemesanan']?></td>
                              <td><?php echo $data['berat']?></td>
                              <td><?php echo $data['harga_gram']?></td>
                              <td><?php echo $data['harga_total']?></td>
                              <td><?php echo $data['dp_harga']?></td>
                              <td><?php echo $data['idkadar']?></td>
                              <td><?php echo $data['idjenis_barang']?></td>
                              <td><?php echo $data['id_user']?></td>
                              <td><?php echo $data['idToko']?></td> 
                             <td><a  class="btn btn-warning" href="edit_pemesanan.php?update=<?php echo $data['id_pemesanan']; ?>"><i class="fa fa-pencil"></i></a>
                                 
                                 
                                 <a class="btn btn-danger" href="?del=<?php echo $data['id_pemesanan']; ?>"> <i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody> 
                          
                      </table>
                        
                        
                                        
                              
                  
                          <!-- Modal 1-->
                      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Pemesanan</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                               <form class="form-horizontal" action="input_pemesanan.php" method="post"> <!-- pembuatan form -->
                                <div class="form-group row">
                                    
                      <label class="col-sm-3 form-control-label">ID Pemesanan</label>
                      <div class="col-sm-6">
                        <input type="text" name="id_pemesanan" class="form-control form-control-success" value="<?php echo $newID; ?>" readonly >
                      </div>
                    </div>
                                          <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat</label>
                      <div class="col-sm-6">
                        <input type="text" name="berat" class="form-control form-control-success">
                      </div>
                    </div>
                                   <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Harga Gram</label>
                      <div class="col-sm-6">
                        <input type="text" name="harga_gram" class="form-control form-control-success">
                      </div>
                    </div>
                                          <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Harga Total</label>
                      <div class="col-sm-6">
                        <input type="text" name="harga_total" class="form-control form-control-success">
                      </div>
                    </div>
                                          <div class="form-group row">
                      <label class="col-sm-3 form-control-label">DP Harga</label>
                      <div class="col-sm-6">
                        <input type="text" name="dp_harga" class="form-control form-control-success">
                      </div>
                    </div>
                              
                               <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Kadar</label>
                          <div class="col-sm-6 select">
						   <select name="idkadar" id="idkadar" class="form-control">
						<option value="">--Pilih ID Kadar--</option>
                            	<?php
						
						$kadar1=mysqli_query($conn,"SELECT * FROM kadar");
						while ($kadar2=mysqli_fetch_array($kadar1))
						{
							if($kadar2['idkadar']==$_POST['idkadar'])
							{
								echo "<option value=$kadar2[idkadar] selected>$kadar2[idkadar] </option>";
								}
								else
								echo "<option value=$kadar2[idkadar]>$kadar2[idkadar] </option>";
								}
						?>
						  </select>
						  </div>
                            </div>
                                 <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Jenis Barang</label>
                          <div class="col-sm-6 select">
						   <select name="idjenis_barang" id="idjenis_barang" class="form-control">
						<option value="">--Pilih ID Jenis Barang--</option>
                            	<?php
						
						$jenis1=mysqli_query($conn,"SELECT * FROM jenis_barang");
						while ($jenis2=mysqli_fetch_array($jenis1))
						{
							if($jenis2['idjenis_barang']==$_POST['idjenis_barang'])
							{
								echo "<option value=$jenis2[idjenis_barang] selected>$jenis2[idjenis_barang] </option>";
								}
								else
								echo "<option value=$jenis2[idjenis_barang]>$jenis2[idjenis_barang] </option>";
								}
						?>
						  </select>
						  </div>
                            </div>
                                 <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID User</label>
                          <div class="col-sm-6 select">
						   <select name="idUser" id="idUser" class="form-control">
						<option value="">--Pilih ID User--</option>
                            	<?php
						
						$user1=mysqli_query($conn,"SELECT * FROM user");
						while ($user2=mysqli_fetch_array($user1))
						{
							if($user2['idUser']==$_POST['idUser'])
							{
								echo "<option value=$user2[idUser] selected>$user2[idUser] </option>";
								}
								else
								echo "<option value=$user2[idUser]>$user2[idUser] </option>";
								}
						?>
						  </select>
						  </div>
                            </div>
                                 <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Toko</label>
                          <div class="col-sm-6 select">
						   <select name="idToko" id="idToko" class="form-control">
						<option value="">--Pilih ID Toko--</option>
                            	<?php
						
						$toko1=mysqli_query($conn,"SELECT * FROM toko");
						while ($toko2=mysqli_fetch_array($toko1))
						{
							if($toko2['idToko']==$_POST['idToko'])
							{
								echo "<option value=$toko2[idToko] selected>$toko2[idToko] </option>";
								}
								else
								echo "<option value=$toko2[idToko]>$toko2[idToko] </option>";
								}
						?>
						  </select>
						  </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" data-toggle="modal" data-target="#myModal2" data-dismiss="modal" class="btn btn-secondary">Batal</button>
                              <button type="submit" class="btn btn-primary" name="simpanpemesanan">Simpan</button>
                            </div>
                            </form>
                          </div>
                        </div>
                    </div>
                  </div>
                     
                       
                         
                </div>
              </div>
                     </div>
                     
                     
</section>
                  
                
          <!-- form pemesanan    -->

                 
<?php
include "../footer.php"
?>
