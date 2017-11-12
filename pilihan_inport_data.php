<?php include "header.php";
?>
<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">import Data</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Pilihan Import Data</li>
            </ul>
          </div> 
            <!-- form import data-->
             <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
          <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                   
                    <div class="card-header d-flex align-items-center">
                      <u class="h4">Pilihan Import Data</u>
                    </div>
                      <div class="col-lg-12">
                      <p>Program penjualan dan stok barang versi 6.0 menyediakan fasilitas import data dari Microsoft Excel</p> 
                      <p>dan program penjualan versi 5.0/5.5. Fasilitas ini akan memberikan kemudahan untuk anda </p>
                      <p>apabila akan melakukan upgrade dari sistem Excel atau Program versi sebelumnya.</p>
                      
                    
                      
                           <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-6 form-control-label">&nbsp;Pilihlah Opsi Import dibawah ini kemudian klik tombol OK</label>
                          
                        </div>
                         <div>
                              <input id="optionsRadios1" type="radio" checked="" value="option1" name="optionsRadios">
                              <label for="optionsRadios1">Import data dari Microsoft Excel</label>
                            </div>
                             <div>
                              <input id="optionsRadios2" type="radio" value="option2" name="optionsRadios">
                              <label for="optionsRadios2">Import data dari program penjualan versi sebelumnya</label>
                            </div>
                        
                    <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-9 offset-sm-9">
                            <button type="submit" class="btn btn-secondary">Batal</button>
                            <button type="submit" class="btn btn-primary">Ok</button>
                          </div>
                        </div> 
                      </div>
                  </div>
               
                
                     </div>
              </div>
            </div>
            </section>
            
          <!-- form import data  -->
<?php include "footer.php";
?>
