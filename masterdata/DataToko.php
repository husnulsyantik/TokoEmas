<?php
	include '../koneksi.php';


	if(isset($_GET['del']))
{
	$query = "DELETE FROM toko WHERE idToko = '$_GET[del]'";
	echo "$query";
	mysqli_query($conn,$query);
	echo "<script>
alert('Data Sudah Dihapus');
window.location='datajenisbarang.php';
</script>";
	}
?>

<?php
 include '../header.php';
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Seluruh Toko</h2>
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
						<div class="col-sm-4 offset-sm-10">
						 <a href="/TokoEmas/masterdata/EditDataToko.php?update=0"><button type="button" class="btn btn-primary">Tambah Toko</button></a></div><br>
                      <table class="table table-striped table-hover" id="tabel_data">
                        <thead>
						<th>No.</th>
                            <th>Id Toko</th>
                            <th>Nama Toko</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
							<th>Aksi</th>

                        </thead>
                        <tbody>
                             <?php
                 $query = mysqli_query($conn,"SELECT * FROM toko");
				 $no=0;
                 while($data = mysqli_fetch_array($query)){
              ?>

                          <tr>
                              <td><?php echo ++$no; ?></td>
                              <td><?php echo $data['idToko']?></td>
                              <td><?php echo $data['Nama_Toko']?></td>
                              <td><?php echo $data['Alamat']?></td>
                              <td><?php echo $data['No_telp']?></td>

							  <td><a href="EditDataToko.php?update=<?php echo $data['idToko']; ?>"><img src="/TokoEmas/img/edit.png" width="35" height="35"></a>&nbsp;
						<a href="?del=<?php echo $data['idToko']; ?>"><img src="/TokoEmas/img/hapus.png" width="30" height="30"></a> </td>

                          </tr>
                          <?php } ?>
                        </tbody>

                      </table>
                        <br>

                          </div>



                  </div>
                </div>
              </div>
            </div>
          </section>



<?php
    include '../footer.php';
?>
