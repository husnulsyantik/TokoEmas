<?php
	include '../koneksi.php';
	

	if(isset($_GET['del']))
{
	mysqli_query($conn,"DELETE FROM barang WHERE idBarang = '$_GET[del]'");
	echo "<script>
alert('Data Sudah Dihapus');
window.location='barang.php';
</script>";	
	}
?>

<?php
 include '../header.php';
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Barang</h2>
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
						 <a href="/TokoEmas/masterdata/databarang.php"><button type="button" class="btn btn-primary">Tambah Data </button></a></div><br>
                      <table class="table table-striped table-hover" id="tabel_data">
                        <thead>
						<th>No.</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Kadar</th>
                            <th>Baki</th>
                            <th>Berat</th>
                            <th>Foto</th>
							<th>Toko</th>
							<th>Aksi</th>
                          
                        </thead>
                        <tbody>
                             <?php
                 $query = mysqli_query($conn,"SELECT * FROM barang JOIN baki on barang.idbaki=baki.idBaki JOIN kadar on barang.idkadar=kadar.idkadar JOIN jenis_barang ON barang.idjenis_barang=jenis_barang.idjenis_barang JOIN toko ON barang.idtoko=toko.idToko");
				 $no=0;
                 while($data = mysqli_fetch_array($query)){
              ?>
                           
                          <tr>
                              <td><?php echo ++$no; ?></td>
                              <td><?php echo $data['idBarang']?></td>
                              <td><?php echo $data['nama_barang']?></td>
                              <td><?php echo $data['nama_jenis_barang']?> (<?php echo $data['singkatan']?>)</td>
                              <td><?php echo $data['kode']?></td>
                              <td><?php echo $data['idBaki']?></td>
                              <td><?php echo $data['berat']?> Gram</td>
                              <td><img src="/TokoEmas/upload/<?php echo $data['foto']; ?>" width="50" height="50" ></td>
							  <td><?php echo $data['Nama_Toko']?></td>
							  <td><a href="editbarang.php?update=<?php echo $data['idBarang']; ?>"><img src="/TokoEmas/img/edit.png" width="35" height="35"></a>&nbsp;
						<a href="?del=<?php echo $data['idBarang']; ?>"><img src="/TokoEmas/img/hapus.png" width="30" height="30"></a> </td>
                                                       
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