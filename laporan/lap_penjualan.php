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

        <script>
            $().ready(function(){
                $('#FormInput').submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        'type': 'POST',
                        'url': 'lapor.php',
                        'dataType': 'json',
                        'data': $(this).serialize(),
                        'success': function(data){
                            $('#idbar').html(data.idbar);
                            $('#nama').html(data.nama);
                            $('#berat').html(data.berat);
                            $('#kadar').html(data.kadar);
                            $('#harga').html(data.harga);
                            $('#user').html(data.user);
                        }
                    });
                });
            });
        </script>

          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Penjualan</h2>
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
                        
                        <div class="form-group row">
                          <label class="col-sm-1 form-control-label">shorting by</label>
                          <div class="col-sm-3 select">
                             <select name="account" class="form-control">
                              <option>penjualan</option>
                              <option>pembelian</option>
                              </select>
                          </div>
                            </div>
                    <form id="FormInput">
                      <div class="form-group row">
                      <label class="col-sm-1 form-control-label">Awal </label>  <!-- pembuatan label form -->
                      <div class="col-sm-3">
                       <input type="datetime-local" name="tgl1" class="form-control form-control-success" id="tgl1"> <!-- pembuatan inputan form -->    
                      </div>
                          <label class="col-sm-1 form-control-label">Akhir </label>  <!-- pembuatan label form -->
                      <div class="col-sm-3">
                       <input type="datetime-local" name="tgl2" class="form-control form-control-success" id="tgl2"> <!-- pembuatan inputan form -->
                      </div>
                          
                          <div class="col-sm-1 offset-sm-1">
						 <button type="submit" class="btn btn-primary">Tampilkan </button>
                          </div>
                    </div>
                        </form>
                      <table class="table table-striped table-hover" id="tabel_data">
                        <thead>
						<th>No.</th>
<!--                            <th>ID Penjualan</th>-->
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Berat</th>
                            <th>Kadar</th>
                            <th>Harga Sat</th>
<!--                            <th>Harga Total</th>-->
<!--                            <th>Tanggal Transaksi</th>-->
                            <th>User</th>
                          
                        </thead>
                        <tbody>
                             <?php
                            
               $query = mysqli_query($conn,"SELECT * from barang JOIN penjualan on penjualan.idbarang = barang.idbarang JOIN kadar on kadar.idkadar=barang.idkadar");
				 $no=0;
                 while($data = mysqli_fetch_array($query)){
              ?>
                           
                          <tr>
                              <td><?php echo ++$no; ?></td>
<!--                              <td><?php //echo $data['idPenjualan']?></td>-->
                              <td><?php echo $data['idbarang']?></td>
                              <td><?php echo $data['nama_barang']?></td>
                              <td><?php echo $data['berat']?> Gram</td>
                              <td><?php echo $data['kode']?></td>
                              <td><?php echo $data['harga_gram']?></td>
<!--                              <td><?php //echo $data['harga_total']?></td>-->
<!--                              <td><?php //echo $data['tanggal_penjualan']?></td>-->
                              <td><?php echo $data['id_user']?></td>
<!--							  <td><a href="editbarang.php?update=<?php echo $data['idBarang']; ?>"><img src="/TokoEmas/img/edit.png" width="35" height="35"></a>&nbsp;-->
<!--						<a href="?del=<?php echo $data['idBarang']; ?>"><img src="/TokoEmas/img/hapus.png" width="30" height="30"></a> </td>-->
                                                       
                          </tr>
                          <?php } ?>
                        </tbody> 
                            
                            
                            
                            
                            
                            
                            
                 
                          
                      </table>
                        <br>
                    <div class="col-sm-4 offset-sm-11">
						 <a href=""><button type="button" class="btn btn-primary">PRINT </button></a></div>
                          </div>
                    

                 
                  </div>
                </div>
              </div>
            </div>
          </section>

 

<?php
    include '../footer.php';
?>