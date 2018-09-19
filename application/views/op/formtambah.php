<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Overhead Pabrik
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Overhead Pabrik</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            
            <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
            <!-- /.box-header -->
            <form action="#" role="form" method="post" class="form-horizontal">
              <div class="box-body">
               <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Overhead Pabrik</label>
                  <input type="text" class="form-control" id="idop" required="" name="idop" placeholder="ID Overhead Pabrik">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Overhead Pabrik</label>
                  <input type="text" class="form-control" id="namaop" required="" name="namaop" placeholder="Nama Overhead Pabrik">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Overhead Pabrik</label>
                  <select class="form-control" id="satuan" required="" name="satuan" style="width: 100%;">
                    <option value="">--Pilih Overhead Pabrik--</option> 
                    <option value="Tetap">Tetap</option>
                    <option value="Berubah">Berubah</option>
                  </select>
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