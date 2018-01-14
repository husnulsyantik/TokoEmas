<?php
	include '../koneksi.php';
	if(isset($_POST['input']))
	{
		$idToko=$_POST['idToko'];
		$Nama_Toko=$_POST['Nama_Toko'];
		$Alamat=$_POST['Alamat'];
		$no_telp=$_POST['no_telp'];

		$query = "insert into toko(idtoko,Nama_Toko,Alamat,No_telp) values ('$idToko','$Nama_Toko','$Alamat','$no_telp')";
		echo "$idToko";
		echo $query;
	$q = mysqli_query($conn,$query) or die(mysql_error());
	echo "<script>
	alert('Data Sudah Diinputkan');
	window.location='datajenisbarang.php';
	</script>";

	}
	else if(isset($_POST['update'])){
		echo "Click";
		$idjenis_barang=$_POST['id_jenis'];
		$nama_jenis_barang=$_POST['nama_jenis_barang'];
		$singkatan=$_POST['singkatan'];

		$query = "update jenis_barang set nama_jenis_barang='$nama_jenis_barang',singkatan='$singkatan' where idjenis_barang='$idjenis_barang'";
		echo "$idjenis_barang";
		echo $query;
	$q = mysqli_query($conn,$query) or die(mysql_error());
	echo "<script>
	alert('Data Sudah Diinputkan');
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
              <h2 class="no-margin-bottom">Update Data Toko</h2>
            </div>
          </header>
          <!-- Forms Section-->
          <section class="forms">
            <div class="container-fluid">
              <div class="row">
								<method ="post">
				<!-- Form Elements -->
                 <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">

                    </div>
                      <div class="card-body">
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Id Toko </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
												<?php
												$id = $_GET['update'];
												if($id=='0'){
													{ ?>
														<input type="text" name="idToko" class="form-control">
							<!--								echo "<option value=$jenis2[id_jenisbarang]>$jenis2[singkatan]($jenis2[nama_jenis_barang])</option>";-->
														<?php	}

												}
												else if($id!='0'){
													{ ?>
														<input type="text" name="idToko" class="form-control" value="<?php echo $_GET["update"]; ?>" readonly="readonly">
							<!--								echo "<option value=$jenis2[id_jenisbarang]>$jenis2[singkatan]($jenis2[nama_jenis_barang])</option>";-->
														<?php	}
												}
												 ?>

                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama Toko </label>
                          <div class="col-sm-6">

                              <input type="text" name="Nama_Toko" class="form-control" value="<?php
					                        $id=$_GET["update"];
					                        $query = mysqli_query($conn,"SELECT * FROM toko where idToko='$id'");
					                        while($data = mysqli_fetch_array($query)) {
					                        echo $data['Nama_Toko'];
					                        }
					                        ?>">

                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Alamat </label>
                          <div class="col-sm-6">
                              <input type="text" name="Alamat" class="form-control" required="" value="	<?php
						                        $id=$_GET["update"];
						                        $query = mysqli_query($conn,"SELECT * FROM toko where idToko='$id'");
						                        while($data = mysqli_fetch_array($query)) {
						                        echo $data['Alamat'];
						                        }
						                        ?>">
                          </div>
													    </div>
											<div class="form-group row">
                          <label class="col-sm-3 form-control-label">No Telp </label>
                          <div class="col-sm-6">
                              <input type="text" name="no_telp" class="form-control" required="" value="	<?php
						                        $id=$_GET["update"];
						                        $query = mysqli_query($conn,"SELECT * FROM toko where idToko='$id'");
						                        while($data = mysqli_fetch_array($query)) {
						                        echo $data['No_telp'];
						                        }
						                        ?>">
                          </div>
                        <div class="line"></div>
                    <div class="col-sm-4 offset-sm-3">

										 <?php
										 $id = $_GET['update'];
										 if($id=='0'){
											 { ?>
												 <input type="submit" value="Insert" name="input" class="btn btn-primary">
					 <!--								echo "<option value=$jenis2[id_jenisbarang]>$jenis2[singkatan]($jenis2[nama_jenis_barang])</option>";-->
												 <?php	}

										 }
										 else if($id!='0'){
											 { ?>
												  <input type="submit" value="Update" name="update" class="btn btn-primary">
					 <!--								echo "<option value=$jenis2[id_jenisbarang]>$jenis2[singkatan]($jenis2[nama_jenis_barang])</option>";-->
												 <?php	}
										 }
											?>
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



<?php
    include '../footer.php';
?>
