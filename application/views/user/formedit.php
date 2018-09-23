<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Password
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Password</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool">
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            
            <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
            <!-- /.box-header -->
            <form action="<?=base_url()?>useraplikasi/prosesubahpassword" role="form" method="post" class="form-horizontal">
              <div class="box-body">
               <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama User</label>
                  <input type="text" class="form-control"  readonly name="userNama" placeholder="Nama User" value="<?=$this->session->userdata('userNama')?>">
                  <input type="hidden" class="form-control"  readonly name="userId" placeholder="Nama User" value="<?=$this->session->userdata('userId')?>">
                </div>
               </div>
               <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Password Baru</label>
                  <input type="password" class="form-control"  required name="userPassword" placeholder="Password Baru">
                  
               </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <!-- <button type="button" class="btn btn-warning" onclick="self.history.back()">
                  <i class="fa fa-chevron-left"></i> Kembali
                </button> -->
                  <button type="submit" class="btn btn-success pull-right">Ubah Password</button>
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