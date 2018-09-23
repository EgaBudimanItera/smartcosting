<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data User Aplikasi
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">User Aplikasi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            
            <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
            <!-- /.box-header -->
            <form action="<?=base_url()?>useraplikasi/prosestambah" role="form" method="post" class="form-horizontal">
              <div class="box-body">
               
               <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama User Aplikasi</label>
                  <input type="text" class="form-control" required="" name="userNama" placeholder="Nama User Aplikasi">
                </div>
               </div>
               <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Hak Akses</label>
                  <select class="form-control" required="" name="userHakakses" style="width: 100%;">
                    <option value="">--Pilih Hak Akses--</option> 
                    <option value="Admin">Admin</option> 
                    <option value="Pimpinan">Pimpinan</option> 
                  </select>
                </div>
               </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                 <!--  <button type="button" class="btn btn-warning" onclick="self.history.back()">
                  <i class="fa fa-chevron-left"></i> Kembali
                </button> -->
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