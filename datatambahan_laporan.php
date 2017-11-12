<?php 
	include 'header.php';
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Tambahan</h2>
            </div>
          </header>
          <!--tabel-->
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">1A</h3>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Kode</th>
                            <th>Barang</th>
                            <th>Berat</th>
                            <th>Stempel</th>
							<th>Pj/Diameter</th>
							<th>Total Berat</th>
							<th>Gambar</th>
							<th>Aksi</th>
                          </tr>
                        </thead>
						<tbody>
                          <tr>
                            <th scope="row">001</th>
                            <td>Cincin</td>
                            <td>2,5gr</td>
							<td>gambar1</td>
							<td>0,01</td>
							<td>2,5</td>
							<td>gambar2</td>
							<td>
							<button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i></button></td>
							<td><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                          </tr>
						</tbody>
                      </table>
                    </div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3"><button type="submit" class="btn btn-primary">Tambah</button>
							<button type="submit" class="btn btn-danger">Cetak</button>
                            
                            <button type="submit" class="btn btn-secondari">Kembali</button>
                          </div>
                         
</div>						
          </section>
<?php 
	include 'footer.php';
?>