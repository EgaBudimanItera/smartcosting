<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Laporan Produksi
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Produksi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            
            <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
            <!-- /.box-header -->
            <form action="<?=base_url()?>produksi/viewlaporanproduksi" role="form" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="col-md-6">
                  <!-- <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID Produk</label>
                      <select class="form-control" id="idproduk"  name="idproduk" style="width: 100%;">
                        <option value="">--Pilih Produk--</option> 
                        <?php
                          foreach($produk as $p){
                        ?>
                        <option value="<?=$p->idproduk?>"><?=$p->namaproduk?></option> 
                        <?php    
                          }
                        ?>
                      </select>
                    </div>  
                  </div> -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bulan Produksi</label>
                      <select class="form-control" id="bulan" required="" name="bulan" style="width: 100%;">
                        <option value="">--Pilih Bulan Produksi--</option> 
                        <option value="01">Januari</option> 
                        <option value="02">Februari</option> 
                        <option value="03">Maret</option> 
                        <option value="04">April</option> 
                        <option value="05">Mei</option> 
                        <option value="06">Juni</option> 
                        <option value="07">Juli</option> 
                        <option value="08">Agustus</option> 
                        <option value="09">September</option> 
                        <option value="10">Oktober</option> 
                        <option value="11">November</option> 
                        <option value="12">Desember</option> 
                      </select>
                    </div>  
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tahun Produksi</label>
                      <input type="number" class="form-control" required="" id="tahun" name="tahun" placeholder="Tahun Produksi">
                    </div>  
                  </div> 
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">  
                <button type="submit" class="btn btn-success pull-right">Lihat Laporan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper