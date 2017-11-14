<?php
include"header.php"
?>

<!-- form import data-->
             
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Aturan Import Excel</h2>
            </div>
          </header>
		    <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
          <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                   
                    <div class="card-header d-flex align-items-center">
                       <h3 class="h4">Informasi Penting</h3>
                    </div>
                      <div class="col-lg-12"><br>
                      <p>Beberapa hal yang perlu diketahui sebelum melakukan import data dari Excel : </p>
                      <p>1. Di komputer anda harus sudah di install Microsoft Excel</p>
                      <p>2. Data yang dapat diimport hanya untuk item Jasa/Barang</p>
                      <p>3. Kolom-kolom pada file Excel harus terdiri dari:</p> 
                      <p>   - Kode Barang</p>
                      <p>   - Nama Barang</p>
                      <p>   - Berat Kitir</p>
                      <p>   - Stempel</p>
                      <p>   - Pj/Diameter Barang</p>
                      <p>   - Total Berat</p>
                      <p>Urutan untuk kolom-kolom di atas juga harus sama</p><br><br>
					  
					  
                   
                     <div class="form-group row">
                          <div class="col-sm-8 offset-sm-8">
                           				  
						   <a href="#"><input type="button" value="<< Kembali" type="submit" class="btn btn-secondary"></input></a>&nbsp;&nbsp;
                            <a href="#"><input type="button" value="&nbsp;&nbsp;Lanjut >>&nbsp;&nbsp;" type="submit" class="btn btn-primary"></input></a>
						
                          </div>
						  
                        </div> 
                      </div>
                  
              </div>
            </div>
            </section>
            
          <!-- form import data  -->
<?php
include"footer.php"
?>