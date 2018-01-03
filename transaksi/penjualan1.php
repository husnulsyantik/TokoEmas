<?php 
	include '../header.php';
include '../koneksi.php';

$query = "SELECT max(idPenjualan) as maxKode FROM penjualan";
$hasil = mysqli_query($conn,$query);
$data  = mysqli_fetch_array($hasil);
$kodemember = $data['maxKode'];

$noUrut = (int) substr($kodemember, 3, 3);

$noUrut++;

$char = "T";
$newID = $char . sprintf("%03s", $noUrut);
    
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Penjualan</h2>
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
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Memasukkan Kode Barang</h3>
                    </div>
					 <div class="card-body">
					 <p>Memasukkan kode barang, berat timbangan, kadar dan harga.<p>
                         
                      <form class="form-horizontal" method="post">
                                            
                        <div class="line"></div>
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Penjualan</label>
                              <div class="col-sm-6">
                                <input type="text" name="idpenj" class="form-control form-control-success" id="kdtoko" value="<?php echo $newID; ?>" readonly>
                              </div>
                            </div>
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Toko</label>
                              <div class="col-sm-6">
                                <input type="text"  name="kdtoko" class="form-control form-control-success" id="kdtoko">
                              </div>
                            </div>
                       <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kode Barang</label>
                           <div class="col-sm-6">
                          <input type="text"  name="kdbarang" class="form-control form-control-success" id="kdbarang" placeholder="Masukkan Kode Barang" onkeyup="isiOtomatis(this.value)" onchange="isiOtomatis(this.value)">
                           </div>
                            </div>
                        <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Berat Timbangan (gram)</label>
                      <div class="col-sm-6">
                        <input type="text" name="berat" class="form-control form-control-success" id="berat">
                      </div>
                    </div>
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kadar</label>
                          <div class="col-sm-6 select">
                            <input type="text" name="kadar" class="form-control form-control-success" id="kadar">
                          </div>
                            </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Harga</label>
                          <div class="col-sm-3 select">
                            <input id="htoko" type="radio" value="" name="pilihan">
                            <label for="option">Harga sesuai harga toko</label>
                          </div>
                          <div class="col-sm-3">
                             <input type="text" name="harga" class="form-control form-control-success" id="toko">
                          </div>
                        </div>
                          
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"></label>
                          <div class="col-sm-3 select">
                            <input id="htawar" type="radio" name="pilihan">
                            <label for="option">Harga Tawaran</label>
                          </div>
                          <div class="col-sm-3">
                             <input type="text" name="harga" class="form-control form-control-success" id="tawar" value="0" onchange="hitung()">
                          </div>
                        </div>
                          
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Harga Total</label>
                      <div class="col-sm-6">
                        <input type="text" name="hargatot" class="form-control form-control-success" id="hargatot">
                      </div>
                    </div>
                          <div class="form-group row">
                      <label class="col-sm-3 form-control-label">ID USER</label>
                      <div class="col-sm-6">
                        <input type="text" name="iduser" class="form-control form-control-success">
                      </div>
                    </div>
     
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
<!--						   <a href="#"><input type="button" value="&nbsp;&nbsp;Batal&nbsp;&nbsp;" type="submit" class="btn btn-secondary"></a>&nbsp;&nbsp;&nbsp;-->
<!--                          <a href="penjualan2.php"><input type="button" value="&nbsp;&nbsp;Lanjut&nbsp;>>&nbsp;&nbsp;" type="submit" class="btn btn-primary"></a>-->
                          <input type="submit" value="&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;" class="btn btn-primary" name="simpan">
                          </div> 
                      </div>
                         </form>
                         
<!--                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
                         <script type="text/javascript">
                             
            function isiOtomatis(kodbarang){
                $("#kdbarang").change(function(){
                //var kodbarang = $("#kdbarang").val();
                $.ajax({
                    url: 'tampil.php',
                    data: "kode="+kodbarang,
                
                    success:function(data){
                        var json = data,
                        obj = JSON.parse(json);
                        $('#berat').val(obj.berat);
                        $('#toko').val(obj.harga);
                        $('#kadar').val(obj.kadar);
                       // $('#toko').val(data['harga1']);
                    }
                });
                });
                
            }
                        </script>
                         
                         
                         <script>
                            $('#htoko').click(function(){
                                $('#tawar').prop('disabled',true);
                                $('#toko').prop('disabled',false);
                            document.getElementById('hargatot').value=document.getElementById('toko').value*document.getElementById('berat').value;
                            })
                             
                            $('#htawar').click(function(){
                                $('#tawar').prop('disabled',false);
                                $('#toko').prop('disabled',true);
                            })
                             function hitung(){
                             document.getElementById('hargatot').value=document.getElementById('tawar').value*document.getElementById('berat').value;
                                 }
                        </script>
							</div>
                        </div>
                </div>
              </div>
              </div>
</section>

<?php
    if(isset($_POST['simpan'])){
$aa=$_POST['idpenj'];
$a=$_POST['kdtoko'];
$b=$_POST['kdbarang'];
$c=$_POST['berat'];
$d=$_POST['kadar'];
$e=$_POST['harga'];
$f=$_POST['hargatot'];
$g=$_POST['iduser'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d H:i:s');

$sql="insert into penjualan (idPenjualan, berat_now, harga_gram, harga_total, tanggal_penjualan, idbarang, id_user, idtoko) values ('$aa','$c','$e','$f','$tanggal','$b','$g','$a')";
$query_sql = mysqli_query($conn, $sql);
    if($query_sql){
		echo "<script language=\"JavaScript\">\n";
		echo "alert(\"Data Berhasil Disimpan...!!\");\n";
		echo "window.location=\"penjualan1.php\" ";
		echo "</script>";
	}else{ 
		echo "<script language=\"JavaScript\">\n";
		echo "alert(\"Data Gagal Disimpan...!!\");\n";
		echo "window.location=\"penjualan1.php\" ";
		echo "</script>";}
}
?>
                     
          <?php 
	include '../footer.php';
    
?>