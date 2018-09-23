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
            
            <div class="box-body">
              <div class="widget-body">
                <a href="<?=base_url()?>produksi/cetaklaporanproduksi/<?=$kriteria['bulan']?>/<?=$kriteria['tahun']?>" target="_blank" class="btn btn-success">Cetak Laporan</a>
              </div>
            </div>
            <div class="box-body">
                
                <table  class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Produksi</th>
                      <th>Tanggal</th>
                      <th>Nama Produk</th>
                      <th>Jumlah Selesai</th>
                      <th>Harga Per Unit</th>
                      <th>Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      // var_dump($listproduksi);
                     $no=1;
                     $total=0;
                     foreach($listproduksi as $l){
                        $total=$total+($l->jumlselesai*$l->biayaunit);
                    ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$l->idproduksi?></td>
                      <td><?=$l->tglmulai?></td>
                      <td><?=$l->namaproduk?></td>
                      <td align="right"><?php echo number_format($l->jumlselesai)?></td>
                      <td align="right"><?php echo number_format($l->biayaunit,2,',','')?></td>
                      <td align="right"><?php echo number_format($l->biayaunit*$l->jumlselesai)?></td>
                    </tr>
                    
                    <?php
                     }
                    ?>  
                    <tr>
                      <td colspan="6" align="left">Total</td>
                      <td align="right"><?php echo number_format($total)?></td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper