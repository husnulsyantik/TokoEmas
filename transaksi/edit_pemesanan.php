<?php
include "../header.php";
$id = $_GET['update'];
$ambil = mysqli_query($conn, "Select * from pemesanan where id_pemesanan = '$id'");
$array = mysqli_fetch_array($ambil);

?>

<?php
include "../koneksi.php";

if(isset($_POST['update'])){
    
        $newID=$_POST['id_pemesanan'];
        $data2=$_POST['berat'];
        $data3=$_POST['harga_gram'];
        $data4=$_POST['harga_total'];
        $data5=$_POST['dp_harga'];
        $data6=$_POST['idkadar'];
        $data7=$_POST['idjenis_barang'];
        $data8=$_POST['idUser'];
        $data9=$_POST['idToko'];
        
    
        $q = mysqli_query($conn,"Update pemesanan SET berat='$data2', harga_gram='$data3', harga_total='$data4', dp_harga='$data5', idkadar='$data6', idjenis_barang='$data7', id_user='$data8',idToko='$data9' where id_pemesanan = '$newID'") or die(mysql_error());
        echo "<script>
        alert('Data Sudah Diupdate');
        window.location='pemesanan.php';
        </script>";	}
        ?>

<section class="dashboard-counts">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                          
                              
                  <div class="col-lg-12">
<form class="form-horizontal"  method="post"> <!-- pembuatan form -->
                                <div class="form-group row">
                                    
                      <label class="col-sm-3 form-control-label">ID Pemesanan</label>
                      <div class="col-sm-6">
                        <input type="text" name="id_pemesanan" class="form-control" value="<?php echo $array['id_pemesanan']; ?>" readonly> 
                      </div>
                    </div>
                                          <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat</label>
                      <div class="col-sm-6">
                        <input type="text" name="berat" class="form-control" value="<?php echo $array['berat']; ?>">
                      </div>
                    </div>
                                   <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Harga Gram</label>
                      <div class="col-sm-6">
                        <input type="text" name="harga_gram" class="form-control" value="<?php echo $array['harga_gram']; ?>">
                      </div>
                    </div>
                                          <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Harga Total</label>
                      <div class="col-sm-6">
                        <input type="text" name="harga_total" class="form-control" value="<?php echo $array['harga_total']; ?>">
                      </div>
                    </div>
                                          <div class="form-group row">
                      <label class="col-sm-3 form-control-label">DP Harga</label>
                      <div class="col-sm-6">
                        <input type="text" name="dp_harga" class="form-control" value="<?php echo $array['dp_harga']; ?>">
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
                              <input type="submit" value="update" class="btn btn-primary" name="update">
                            </div>
                            </form>
                      </div>
                        </div>
                    </div>
                 
                     
                     
</section>
<?php
include "../footer.php"
?>