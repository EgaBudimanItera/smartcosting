<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Overhead Pabrik
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
         <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">List Overhead Pabrik</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="widget-body">
                <a href="<?=base_url()?>op/formtambah" class="btn btn-danger">Tambah Data Overhead Pabrik</a>
              </div>  
              <br>
              <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Jenis Variabel</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach($list as $l){
                        if($l->keterangan=="0"){
                          $ket="Fixed Cost";
                        }else{
                           $ket="Variable Cost";
                        }
                    ?>

                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$l->idop?></td>
                      <td><?=$l->namaop?></td>
                      <td><?=$ket?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-warning" href="<?=base_url()?>op/formedit/<?=$l->idop?>"><i class="fa fa-pencil"></i></a>
                       
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>op/proseshapus/<?=$l->idop?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper