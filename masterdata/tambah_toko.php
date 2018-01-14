<?php
include "../header.php";
include "../koneksi.php";
if(isset($_GET['del']))
{
$query = "DELETE FROM toko WHERE idToko = '$_GET[del]'";
echo "$query";
mysqli_query($conn,$query);
echo "<script>
alert('Data Sudah Dihapus');
window.location='tambah_toko.php';
</script>";
}
?>

 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Sales</h2>
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
                            <th>Id Toko</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Aksi</th>

                        </thead>
                        <tbody>
                             <?php
                 $query = mysqli_query($conn,"SELECT * FROM toko");
                 while($data = mysqli_fetch_array($query)){
              ?>

                          <tr>

                              <td><?php echo $data['idToko']?></td>
                              <td><?php echo $data['Nama_Toko']?></td>
                              <td><?php echo $data['Alamat']?></td>
                              <td><?php echo $data['No_tlp']?></td>
                              <td><a href="EditDataToko.php?update=<?php echo $data['idToko']; ?>"><img src="/TokoEmas/img/edit.png" width="35" height="35"></a>&nbsp;
              						<a href="?del=<?php echo $data['idToko']; ?>"><img src="/TokoEmas/img/hapus.png" width="30" height="30"></a> </td>



                          </tr>
                          <?php } ?>
                        </tbody>

                      </table>
                         <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Tambah </button>&nbsp;&nbsp;
                            <button type="submit" data-toggle="modal" data-target="#myModalEdit" class="btn btn-xs">Edit</button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-secondary">Hapus</button>
                              <!-- Modal-->
                      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Toko</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                               <form class="form-horizontal" action="input_toko.php" method="post"> <!-- pembuatan form -->
                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Id Toko </label> <!-- pembuatan label form -->
                                  <div class="col-sm-6">
                                    <input type="text" name="idToko" class="form-control form-control-success"> <!-- pembuatan inputan form -->
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Nama </label>
                                  <div class="col-sm-6">
                                    <input type="text" name="Nama_Toko" class="form-control form-control-success">
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Alamat </label>
                                  <div class="col-sm-6">
                                    <textarea type="text" name="Alamat" class="form-control form-control-success"></textarea>
                                  </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">No Telepon </label>
                                  <div class="col-sm-6">
                                    <input type="text" name="No_Tlp" class="form-control form-control-success">
                                  </div>
                                </div>


                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary" name="simpantoko">Save changes</button>
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
