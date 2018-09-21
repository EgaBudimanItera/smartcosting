<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Produksi
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
            <form action="<?=base_url()?>produksi/prosessimpan" role="form" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID Produksi</label>
                      <input type="text" class="form-control" readonly value="<?=$idproduksi?>" name="idproduksi" placeholder="ID Produksi">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Produk</label>
                      <select class="form-control" id="idproduk" required="" name="idproduk" style="width: 100%;">
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
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Mulai Produksi</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" id="tglmulai" name="tglmulai">
                      </div>
                    </div>  
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Rencana Jumlah Produksi</label>
                      <input type="number" class="form-control" id="jumlrencana" required="" name="jumlrencana" placeholder="Jumlah Rencana Produksi">
                    </div>  
                  </div> 
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <button type="button" class="btn btn-warning" onclick="self.history.back()">
                  <i class="fa fa-chevron-left"></i> Kembali
                </button>
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
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