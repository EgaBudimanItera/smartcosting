<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Data Produksi
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
      <!-- <div>
        <button type="button" class="btn btn-warning" onclick="self.history.back()">
        <i class="fa fa-chevron-left"></i> Kembali
        </button>
      </div> -->
      <div class="row">
          
        <!-- produksi -->
        <div class="col-xs-6">

          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Produksi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Produksi</label>
                    <input type="text" class="form-control" value="<?=$list->idproduksi?>" readonly name="idproduksi" placeholder="ID Produksi">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Produk</label>
                    <input type="text" class="form-control" value="<?=$list->namaproduk?>" readonly name="Produk" placeholder="Nama Produk">
                  </div>  
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Mulai Produksi</label>
                    <input type="text" class="form-control" value="<?=$list->tglmulai?>" readonly name="tglmulai" placeholder="Tanggal Mulai Produksi">
                  </div>  
                </div> 
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rencana Jumlah Produksi</label>
                    <input type="text" class="form-control" value="<?php echo number_format($list->jumlrencana)?>" readonly name="jumlrencana" placeholder="Jumlah Rencana Produksi">
                  </div>  
                </div> 
              
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- Jumlah produksi -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Jumlah Produksi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            
            
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>produksi/proseseditjumlahproduksi" role="form" method="post" class="form-horizontal">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Proses Awal</label>
                    <input type="text" class="form-control" value="<?php echo number_format($list->jumlprosesawal)?>" name="jumlprosesawalview" placeholder="Jumlah Proses Awal" readonly>
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" name="idproduksi" placeholder="ID Produksi">
                  </div>
                </div>
                <div class="col-md-1">
                  
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" class="form-control" value="<?=$list->jumlprosesawal?>" name="jumlprosesawal" placeholder="Jumlah Proses Awal">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Produksi</label>
                    <input type="text" class="form-control" value="<?php echo number_format($list->jumlproduksi)?>" name="jumlproduksiview" readonly placeholder="Jumlah Produksi">
                  </div>  
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" class="form-control" value="<?=$list->jumlproduksi?>" name="jumlproduksi" placeholder="Jumlah Produksi">
                  </div>  
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Selesai</label>
                    <input type="text" class="form-control" readonly="" value="<?php echo number_format($list->jumlselesai)?>" name="jumlselesaiview" placeholder="Jumlah Selesai">
                  </div>  
                </div> 
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" class="form-control" value="<?=$list->jumlselesai?>" name="jumlselesai" placeholder="Jumlah Selesai">
                  </div>  
                </div> 
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Proses Akhir</label>
                    <input type="text" class="form-control" value="<?php echo number_format($list->jumlprosesakhir)?>"  name="jumlprosesakhirview" readonly placeholder="Jumlah Proses Akhir">
                  </div>  
                </div> 
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" class="form-control" value="<?=$list->jumlprosesakhir?>" name="jumlprosesakhir" placeholder="Jumlah Proses Akhir">
                  </div>  
                </div> 
                <?php
                  if($list->statusproduksi=="0"){
                ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan Jumlah Produksi</button>
                </div>
                <?php    
                  }
                ?>
                
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- % awal -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Persentase Kuantitas Produksi Awal</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>produksi/proseseditpersenawal" role="form" method="post" class="form-horizontal">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase Bahan Baku Awal (%)</label>
                    <input type="text" readonly class="form-control" value="<?php echo number_format($list->pbbprosesawal)?>" name="pbbprosesawalview" placeholder="Persentase Bahan Baku Awal">
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" name="idproduksi" placeholder="ID Produksi">
                  </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" required class="form-control" name="pbbprosesawal" value="<?=$list->pbbprosesawal?>" placeholder="Persentase Bahan Baku Awal">
                   
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase TKL Awal (%)</label>
                    <input type="text" readonly class="form-control" value="<?php echo number_format($list->ptklprosesawal)?>" name="ptklprosesawalview" placeholder="Persentase Tenaga Kerja Langsung Awal">
                  </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" required class="form-control" value="<?=$list->ptklprosesawal?>" name="ptklprosesawal" placeholder="Persentase Tenaga Kerja Langsung Awal">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase BOP Awal (%)</label>
                    <input type="text" readonly class="form-control" value="<?php echo number_format($list->pbopprosesawal)?>" name="pbopprosesawalview" placeholder="Persentase Biaya Overhead Pabrik Awal">
                  </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" required class="form-control" value="<?=$list->pbopprosesawal?>" name="pbopprosesawal" placeholder="Persentase Biaya Overhead Pabrik Awal">
                  </div>
                </div>
                <?php
                  if($list->statusproduksi=="0"){
                ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
                <?php    
                  }
                ?>
                
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- % akhir -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Persentase Kuantitas Produksi Akhir</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>produksi/proseseditpersenakhir" role="form" method="post" class="form-horizontal">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase Bahan Baku Akhir (%)</label>
                    <input type="text" readonly class="form-control" value="<?php echo number_format($list->pbbprosesakhir)?>" name="pbbprosesakhirview" placeholder="Persentase Bahan Baku Akhir">
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" name="idproduksi" placeholder="ID Produksi">
                  </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" class="form-control" value="<?=$list->pbbprosesakhir?>" name="pbbprosesakhir" required placeholder="Persentase Bahan Baku Akhir">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase TKL Akhir (%)</label>
                    <input type="text" class="form-control" value="<?php echo number_format($list->ptklprosesakhir)?>" name="ptklprosesakhirview" readonly placeholder="Persentase Tenaga Kerja Langsung Akhir">
                  </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" class="form-control" value="<?=$list->ptklprosesakhir?>" name="ptklprosesakhir" required placeholder="Persentase Tenaga Kerja Langsung Akhir">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase BOP Akhir (%)</label>
                    <input type="text" readonly class="form-control" value="<?php echo number_format($list->pbopprosesakhir)?>" name="pbopprosesakhirview" placeholder="Persentase Biaya Overhead Pabrik Akhir">
                  </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">-</label>
                    <input type="number" required class="form-control" value="<?=$list->pbopprosesakhir?>" name="pbopprosesakhir" placeholder="Persentase Biaya Overhead Pabrik Akhir">
                  </div>
                </div>
                <?php
                  if($list->statusproduksi=="0"){
                ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
                <?php    
                  }
                ?>
              </form>

            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- Bahan Baku Awal -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Bahan Baku Proses Awal</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>biayabb/simpanbbbawal" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bahan Baku</label>
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" readonly name="idproduksi" placeholder="ID Produksi">
                    <select class="form-control" id="idbb" placeholder="--Pilih Bahan Baku--" required="" name="idbb" style="width: 100%;">
                      <option value="">--Pilih Bahan Baku--</option> 
                      <?php
                        foreach($bahanbaku as $b){
                      ?>
                      <option value="<?=$b->idbb?>"><?=$b->namabb?></option>
                      <?php
                        }
                      ?> 
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Bahan Baku Awal">
                  </div>
                </div>
                
                <?php
                  if($list->statusproduksi=="0"){
                ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
                <?php    
                  }
                ?>
              </form>
              
              <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Bahan Baku</th>
                      <th>Biaya</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no=1;
                      $total=0;
                      foreach ($listbbbawal as $l){
                        $total=$total+$l->jumlahbiaya;
                    ?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$l->namabb?></td>
                      <td><?=$l->jumlahbiaya?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>biayabb/hapusbbbawal/<?=$l->idbiayabb?>/<?=$l->idproduksi?>/<?=$l->jumlahbiaya?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php    
                      }
                    ?>
                    <tr>
                      <td colspan="2">Total Biaya</td>
                      <td colspan="2"><?php echo 'Rp '.number_format($total)?></td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- Bahan Baku Akhir -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Bahan Baku Proses Tambahan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>biayabb/simpanbbbakhir" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bahan Baku</label>
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" readonly name="idproduksi" placeholder="ID Produksi">
                    <select class="form-control" id="idbb2" required="" name="idbb" style="width: 100%;">
                      <option value="">--Pilih Bahan Baku--</option> 
                      <?php
                        foreach($bahanbaku as $b){
                      ?>
                      <option value="<?=$b->idbb?>"><?=$b->namabb?></option>
                      <?php
                        }
                      ?> 
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Bahan Baku Tambahan">
                  </div>
                </div>
                
                <?php
                  if($list->statusproduksi=="0"){
                ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
                <?php    
                  }
                ?>
              </form>
              <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Bahan Baku</th>
                      <th>Biaya</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no=1;
                      $total=0;
                      foreach ($listbbbakhir as $l){
                        $total=$total+$l->jumlahbiaya;
                    ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$l->namabb?></td>
                      <td><?=$l->jumlahbiaya?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>biayabb/hapusbbbakhir/<?=$l->idbiayabb?>/<?=$l->idproduksi?>/<?=$l->jumlahbiaya?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                     }
                    ?>
                    <tr>
                      <td colspan="2">Total Biaya</td>
                      <td colspan="2"><?php echo 'Rp '.number_format($total)?></td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- TKL Awal -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Tenaga Kerja Langsung Proses Awal</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>biayatkl/simpantklawal" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" readonly name="idproduksi" placeholder="ID Produksi">
                    <select class="form-control" id="idtkl" required="" name="idtkl" style="width: 100%;">
                      <option value="">--Pilih Kegiatan--</option>
                      <?php
                        foreach($tkl as $t){
                      ?>
                      <option value="<?=$t->idtkl?>"><?=$t->namatkl?></option>
                      <?php
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Tenaga Kerja Langsung Awal">
                  </div>
                </div>
                
                <?php
                  if($list->statusproduksi=="0"){
                ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
                <?php    
                  }
                ?>
              </form>
              <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kegiatan</th>
                      <th>Biaya</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      $total=0;
                      foreach($listbtklawal as $l){
                        $total=$total+$l->jumlahtkl;
                    ?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$l->namatkl?></td>
                      <td><?=$l->jumlahtkl?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>biayatkl/hapustklawal/<?=$l->idbiayatkl?>/<?=$l->idproduksi?>/<?=$l->jumlahtkl?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php    
                      }
                    ?>
                    <tr>
                      <td colspan="2">Total</td>
                      <td colspan="2"><?php echo 'Rp '.number_format($total)?></td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- TKL Akhir -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Tenaga Kerja Langsung Proses Tambahan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>biayatkl/simpantklakhir" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" readonly name="idproduksi" placeholder="ID Produksi">
                    <select class="form-control" id="idtkl2" required="" name="idtkl" style="width: 100%;">
                      <option value="">--Pilih Kegiatan--</option> 
                      <?php
                        foreach($tkl as $t){
                      ?>
                      <option value="<?=$t->idtkl?>"><?=$t->namatkl?></option>
                      <?php
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Tenaga Kerja Langsung Tambahan">
                  </div>
                </div>
                
                <?php
                  if($list->statusproduksi=="0"){
                ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
                <?php    
                  }
                ?>
              </form>
              <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kegiatan</th>
                      <th>Biaya</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      $total=0;
                      foreach($listbtklakhir as $l){
                        $total=$total+$l->jumlahtkl;
                    ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$l->namatkl?></td>
                      <td><?=$l->jumlahtkl?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>biayatkl/hapustklakhir/<?=$l->idbiayatkl?>/<?=$l->idproduksi?>/<?=$l->jumlahtkl?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                    <tr>
                      <td colspan="2">Total</td>
                      <td colspan="2"><?php echo 'Rp '.number_format($total)?></td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- BOP AWAL -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Overhead Pabrik Proses Awal</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>bop/simpanbopawal" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Biaya</label>
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" readonly name="idproduksi" placeholder="ID Produksi">
                    <select class="form-control" id="idop" required="" name="idop" style="width: 100%;">
                      <option value="">--Pilih Overhead Pabrik--</option> 
                      <?php
                        foreach($op as $t){
                      ?>
                      <option value="<?=$t->idop?>"><?=$t->namaop?></option>
                      <?php
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Bahan Baku Awal">
                  </div>
                </div>
                
                <?php
                  if($list->statusproduksi=="0"){
                ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
                <?php    
                  }
                ?>
              </form>
              <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Biaya</th>
                      <th>Biaya</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      $total=0;
                      foreach($listbbopawal as $l){
                        $total=$total+$l->jumlahbop
                    ?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$l->namaop?></td>
                      <td><?=$l->jumlahbop?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>bop/hapusbopawal/<?=$l->idbop?>/<?=$l->idproduksi?>/<?=$l->jumlahbop?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                    <tr>
                      <td colspan="2">Total</td>
                      <td colspan="2"><?php echo 'Rp '.number_format($total)?></td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- BOP AKHIR -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Overhead Pabrik Proses Tambahan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>bop/simpanbopakhir" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Biaya</label>
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" readonly name="idproduksi" placeholder="ID Produksi">
                    <select class="form-control" id="idbop2" required="" name="idop" style="width: 100%;">
                      <option value="">--Pilih BOP--</option> 
                      <?php
                        foreach($op as $t){
                      ?>
                      <option value="<?=$t->idop?>"><?=$t->namaop?></option>
                      <?php
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Overhead Pabrik Tambahan">
                  </div>
                </div>
                
                <?php
                  if($list->statusproduksi=="0"){
                ?>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
                <?php    
                  }
                ?>
              </form>
              <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Biaya</th>
                      <th>Biaya</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      $total=0;
                      foreach($listbbopakhir as $l){
                        $total=$total+$l->jumlahbop;
                    ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$l->namaop?></td>
                      <td><?=$l->jumlahbop?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>bop/hapusbopakhir/<?=$l->idbop?>/<?=$l->idproduksi?>/<?=$l->jumlahbop?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                    <tr>
                      <td colspan="2">Total</td>
                      <td colspan="2"><?php echo 'Rp '.number_format($total)?></td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- FINALE -->
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Produksi Per Unit</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?=base_url()?>produksi/hitungdanstatus" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Biaya Per Unit</label>
                    <input type="hidden" class="form-control" value="<?=$list->idproduksi?>" readonly name="idproduksi" placeholder="ID Produksi">
                    <input type="text" value="<?=$list->biayaunit?>" class="form-control" id="biayaunit" readonly name="biayaunit" placeholder="Biaya Per Unit"> 
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status Produksi</label>
                    <select class="form-control" required="" name="statusproduksi" style="width: 100%;">
                      <option value="">--Pilih Status Produksi--</option> 
                      <option value="0" <?=$list->statusproduksi == '0' ? ' selected="selected"' : '';?>>Sedang Diproduksi</option> 
                      <option value="1" <?=$list->statusproduksi == '1' ? ' selected="selected"' : '';?>>Produksi Selesai</option> 
                      <option value="2" <?=$list->statusproduksi == '2' ? ' selected="selected"' : '';?>>Transfer Produksi Ke Bulan Depan</option>
                    </select>
                  </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
              </form>
              
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper