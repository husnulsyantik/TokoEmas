<?php
	include '../koneksi.php';

$id = $_GET['update'];
$ambil = mysqli_query($conn, "Select * from barang where idBarang = '$id'");
$array = mysqli_fetch_array($ambil);
	

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
                     
                    </div>
                      
                      
                    

                    <div class="card-body">
                <form class="form-horizontal" method="post" enctype="multipart/form-data" name="f1"> <!-- pembuatan form -->
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Id Barang </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
					 		  
                        <input type="text" name="idBarang" class="form-control" value="<?php echo $array['idBarang']; ?>" readonly> 
						
<!--						<input type="text" class="form-control" name="idBarang" value="<?php //echo $_POST['kd_barang'];?>" disabled>-->
<!--						<input type="text" class="form-control" name="kd_barang" value="<?php //echo $_POST['kd_barang'];?>" hidden>-->
						<!-- pembuatan inputan form -->
						
						<script type="text/javascript">
                        
                            $("#idkadar").change(function(){
                                var kadar = $("#idkadar").val();
                                $.ajax({
                                    type:"POST",
                                    dataType:"html",
                                    url:"databarang.php",
                                    data:"kd="+kadar,
                            
                                    success:function(msg){
                                    $("#idBarang").html(msg);
                                }
                                });
                            });
                       

                    </script>
					
                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama Barang </label>
                      <div class="col-sm-6">
                        <input type="text" name="nama_barang" class="form-control" required="" value="<?php echo $array['nama_barang']; ?>">
                      </div>
                    </div>
                         
                     <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kadar</label>
                          <div class="col-sm-6 select">
                         <select name="idkadar" id="idkadar" class="form-control">
						<option value="">--Pilih Kadar Barang--</option>
				<?php
						$kadar1=mysqli_query($conn,"SELECT * FROM kadar order by nama_kadar_barang");
						while ($kadar2=mysqli_fetch_array($kadar1)) { ?>
                             
                        <option value="<?php echo $kadar2['idkadar'];?>"> <?php echo $kadar2['kode'];?> <?php echo $kadar2["kadar_persen"] ?>%</option>
<!--					<option value="<?php //echo $kadar2["id_jenisbarang"]?>"><?php //echo $kadar2["kode"] ($kadar2["kadar_persen"])?>%</option>-->
				<?php } ?>
						  </select>
                          </div>
                            </div>
                       <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jenis Barang</label>
                          <div class="col-sm-6 select">
                            <select name="idjenis_barang" id="idjenis_barang" class="form-control">
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
						   <select name="idbaki" id="idbaki" class="form-control">
						
						  </select>
						  </div>
                            </div>
                          
                          
                    <script type="text/javascript">
                        
                            $("#idjenis_barang").change(function(){
                                var jenisBarang = $("#idjenis_barang").val();
                                $.ajax({
                                    type:"POST",
                                    dataType:"html",
                                    url:"ambilbaki.php",
                                    data:"jb="+jenisBarang,
                            
                                    success:function(msg){
                                    $("#idbaki").html(msg);
                                }
                                });
                            });
                       

                    </script>
                          
                          
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat (Gram)</label>
                      <div class="col-sm-6">
                        <input type="text" name="berat" class="form-control " required="" value="<?php echo $array['berat']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Foto </label>
                       <div class="col-sm-6">
                           <input type="checkbox" name="ubah_foto" value="true" id="ubah_foto" onclick="enable_text(this.checked)">
                            <label for="option">Checklist, jika anda ingin mengubah gambar</label>
                            <input type="file" name="foto" class="form-control" id="foto" disabled>
                          </div>
                    </div>
                          <div class="form-group row">
                      <label class="col-sm-3 form-control-label">ID Toko</label>
                      <div class="col-sm-6">
                        <input type="text" name="idtoko" class="form-control " required="" value="<?php echo $array['idtoko']; ?>">
                      </div>
                    </div>
					  
                        <div class="line"></div>
                    <div class="col-sm-4 offset-sm-3">
                     <input type="submit" value="Update" class="btn btn-primary" name="update"><!-- pembuatan button submit form-->&nbsp;&nbsp;
                      <!-- pembuatan button jika ingin membatalkan form -->&nbsp;
                      <!-- pembuatan button jika ingin menutup form -->
                    </div>
					
                  </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

                        <script>
                            function enable_text(status){
                                status=!status;
                                document.f1.foto.disabled = status;
                            }
                        </script>


<?php
include "../koneksi.php";

if(isset($_POST['update'])){
    
    $id = $_POST['idBarang'];
	$nama_barang=$_POST['nama_barang'];
	$idbaki=$_POST['idbaki'];
	$idkadar=$_POST['idkadar'];
	$idjenis_barang=$_POST['idjenis_barang'];
	$berat=$_POST['berat'];
	$idtoko =$_POST['idtoko'];
    
    if(isset($_POST['ubah_foto'])){
    $fotobar= explode(".", $_FILES['foto']['name']);  //mengambil nama tanpa extensi
    $foto_baru = round(microtime(true)) . '.' . end($fotobar); //merename nama secara acak
    move_uploaded_file($_FILES['foto']['tmp_name'], "../upload/$foto_baru");
        
        $query = mysqli_query($conn, "select * from barang where idBarang = '$id'");
        $data = mysqli_fetch_array($query);
        
        //cek apakah file foto sebelumnya ada di folder
        if(is_file("../upload/".$data['foto'])) // Jika foto ada
        unlink("../upload/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
        
        $q = mysqli_query($conn,"Update barang SET nama_barang='$nama_barang', idbaki='$idbaki', idkadar='$idkadar', idjenis_barang='$idjenis_barang', berat='$berat', foto='$foto_baru', idtoko='$idtoko' where idBarang = '$id'") or die(mysql_error());
        echo "<script>
        alert('Data Sudah Diinputkan broo');
        window.location='barang.php';
        </script>";	
        
    } else { // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        $q = mysqli_query($conn,"Update barang SET nama_barang='$nama_barang', idbaki='$idbaki', idkadar='$idkadar', idjenis_barang='$idjenis_barang', berat='$berat', idtoko='$idtoko' where idBarang = '$id'") or die(mysql_error());
        echo "<script>
        alert('Data Sudah Diinputkan');
        window.location='barang.php';
        </script>";	
    }
}
	
?>



<?php
    include '../footer.php';
?>