<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data Agama
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Agama</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool">
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            
            <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
            <!-- /.box-header -->
            <form action="<?=base_url()?>agama/prosesedit" role="form" method="post" class="form-horizontal">
              <div class="box-body">
                
                   <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Agama</label>
                      <div class="row">
                        <div class="col-xs-6">
                          <input type="text" class="form-control" id="nm_agama" readonly="" name="nm_agama" placeholder="Nama Agama" value="<?=$list->nm_agama?>">
                        </div>  

                        <div class="col-xs-6">
                          <input type="text" class="form-control" id="nm_agama2" name="nm_agama2" placeholder="Nama Agama" value="<?=$list->nm_agama?>">
                        </div>  
                      </div>
                      
                      <input type="hidden" class="form-control" id="id_agama" name="id_agama" value="<?=$list->id_agama?>">
                      </div>
                   </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <button type="button" class="btn btn-warning" onclick="self.history.back()">
                  <i class="fa fa-chevron-left"></i> Kembali
                </button>
                  <button type="submit" class="btn btn-success pull-right">Ubah</button>
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