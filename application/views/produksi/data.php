<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Produksi
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
         <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">List Produksi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="widget-body">
                <a href="<?=base_url()?>produksi/formtambah" class="btn btn-danger">Tambah Data Produksi</a>
              </div>  
              <br>
              <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Produksi</th>
                      <th>Tanggal</th>
                      <th>Nama Produk</th>
                      <th>Jumlah</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach ($list as $l){
                        if($l->statusproduksi=='0'){
                          $ket='Sedang Diproduksi';
                        }elseif ($l->statusproduksi=='1') {
                          $ket='Selesai Diproduksi';
                        }else{
                          $ket='Transfer';
                        }
                    ?>
                    
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$l->idproduksi?></td>
                      <td><?=$l->tglmulai?></td>
                      <td><?=$l->namaproduk?></td>
                      <td><?=$l->jumlrencana?></td>
                      <td><?=$ket?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-warning" href="<?=base_url()?>produksi/formedit/<?=$l->idproduksi?>"><i class="fa fa-pencil"></i></a>
                        <!-- <a data-toggle="tooltip" data-placement="bottom" title="Print Kartu Produksi" class="btn btn-success" href="<?=base_url()?>produksi/kartuproduksi/<?=$l->idproduksi?>" target="_blank" ><i class="fa fa-print"></i></a> -->
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>produksi/proseshapus/<?=$l->idproduksi?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
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