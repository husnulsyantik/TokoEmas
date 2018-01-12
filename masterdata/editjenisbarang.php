<?php
	include '../koneksi.php';
	if(isset($_POST['input']))
	{

		$idjenis_barang=$_POST['id_jenis'];
		$nama_jenis_barang=$_POST['nama_jenis_barang'];
		$singkatan=$_POST['singkatan'];

		$query = "insert into jenis_barang(idjenis_barang,nama_jenis_barang,singkatan) values ('$idjenis_barang','$nama_jenis_barang','$singkatan')";
		echo "$idjenis_barang";
		echo $query;
	$q = mysqli_query($conn,$query) or die(mysql_error());
	echo "<script>
	alert('Data Sudah Diinputkan');
	window.location='datajenisbarang.php';
	</script>";

	}
	else if(isset($_POST['update'])){
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
                      <form class="form-horizontal" method="post"> <!-- pembuatan form -->
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Id Jenis Barang </label> <!-- pembuatan label form -->
                      <div class="col-sm-6">
												<?php
												$id = $_GET['update'];
												if($id=='0'){
													{ ?>
														<input type="text" name="id_jenis" class="form-control">
							<!--								echo "<option value=$jenis2[id_jenisbarang]>$jenis2[singkatan]($jenis2[nama_jenis_barang])</option>";-->
														<?php	}

												}
												else if($id!='0'){
													{ ?>
														<input type="text" name="id_jenis" class="form-control" value="<?php echo $_GET["update"]; ?>" readonly="readonly">
							<!--								echo "<option value=$jenis2[id_jenisbarang]>$jenis2[singkatan]($jenis2[nama_jenis_barang])</option>";-->
														<?php	}
												}
												 ?>

                      </div>
                    </div>
                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama Jenis Barang </label>
                          <div class="col-sm-6">

                              <input type="text" name="nama_jenis_barang" class="form-control" value="<?php
					                        $id=$_GET["update"];
					                        $query = mysqli_query($conn,"SELECT * FROM jenis_barang where idjenis_barang='$id'");
					                        while($data = mysqli_fetch_array($query)) {
					                        echo $data['nama_jenis_barang'];
					                        }
					                        ?>">

                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Singkatan </label>
                          <div class="col-sm-6">
                              <input type="text" name="singkatan" class="form-control" required="" value="	<?php
						                        $id=$_GET["update"];
						                        $query = mysqli_query($conn,"SELECT * FROM jenis_barang where idjenis_barang='$id'");
						                        while($data = mysqli_fetch_array($query)) {
						                        echo $data['singkatan'];
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
