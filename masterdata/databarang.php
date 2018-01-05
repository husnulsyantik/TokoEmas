<?php
	include '../koneksi.php';
	
$query = "SELECT max(substr(idBarang,-3)) as maxKode FROM barang";
$hasil = mysqli_query($conn,$query);
$data  = mysqli_fetch_array($hasil);
$kodemember = $data['maxKode'];

$noUrut = (int) substr($kodemember, -3);

$noUrut++;

//$char = "BRG";
$newID =sprintf("%03s", $kodemember+1);
	
if(isset($_POST['input']))
{
	
	$nama_barang=$_POST['nama_barang'];
	$idbaki=$_POST['idbaki'];
	$idkadar=$_POST['idkadar'];
	$idjenis_barang=$_POST['idjenis_barang'];
	$berat=$_POST['berat'];
	$idBarang=$newID;
	if($idkadar=='1') { $kode='BM'; }
	if($idkadar=='2') { $kode='CTK'; }
	if($idkadar=='3') { $kode='AYU'; }
	$data= mysqli_fetch_array(mysqli_query($conn,"select idtoko from user where idUser='$_SESSION[user]'"));
	$id=$data['idtoko'].$kode.$idbaki.$idBarang;
	$uploaddir = "/TokoEmas/upload/"; //folder utk upload gambar
	$uploadfile = $uploaddir.basename($_FILES['foto']['name']); // ./upload/1.jpg
	$foto = basename($_FILES['foto']['name']); //menyimpan nama + extention
	
$q = mysqli_query($conn,"Insert into barang values('$id','$nama_barang','$idbaki','$idkadar','$idjenis_barang','$berat','$foto','L1')") or die(mysql_error());
echo "<script>
alert('Data Sudah Diinputkan');
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
                      <form class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- pembuatan form -->
                    
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama Barang </label>
                      <div class="col-sm-6">
                        <input type="text" name="nama_barang" class="form-control" required="">
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
                        <input type="text" name="berat" class="form-control " required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Foto </label>
                       <div class="col-sm-6">
						  
                            <input type="file" name="foto" class="form-control" required="">
                          </div>
                    </div>
					  
                        <div class="line"></div>
                    <div class="col-sm-4 offset-sm-3">
                     <input type="submit" value="Simpan" class="btn btn-primary" name="input"><!-- pembuatan button submit form-->&nbsp;&nbsp;
                      <!-- pembuatan button jika ingin membatalkan form -->&nbsp;
                      <!-- pembuatan button jika ingin menutup form -->
                    </div>
					
                  </form>

<?php
?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>



<?php
    include '../footer.php';
?>