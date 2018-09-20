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
      <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
      <div class="row">
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
                    <input type="text" class="form-control" id="idproduksi" readonly name="idproduksi" placeholder="ID Produksi">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Produk</label>
                    <input type="text" class="form-control" id="Produk" readonly name="Produk" placeholder="Nama Produk">
                  </div>  
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Mulai Produksi</label>
                    <input type="text" class="form-control" id="tglmulai" readonly name="tglmulai" placeholder="Tanggal Mulai Produksi">
                  </div>  
                </div> 
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rencana Jumlah Produksi</label>
                    <input type="number" class="form-control" id="jumlrencana" readonly name="jumlrencana" placeholder="Jumlah Rencana Produksi">
                  </div>  
                </div> 
                <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-warning" onclick="self.history.back()">
                  <i class="fa fa-chevron-left"></i> Kembali
                </button>
                  
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
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
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Proses Awal</label>
                    <input type="number" class="form-control" id="jumlprosesawal" name="jumlprosesawal" placeholder="Jumlah Proses Awal">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Produksi</label>
                    <input type="number" class="form-control" id="jumlproduksi" name="jumlproduksi" placeholder="Jumlah Produksi">
                  </div>  
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Selesai</label>
                    <input type="number" class="form-control" id="jumlselesai" name="jumlselesai" placeholder="Jumlah Selesai">
                  </div>  
                </div> 
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Proses Akhir</label>
                    <input type="number" class="form-control" id="jumlprosesakhir" name="jumlprosesakhir" placeholder="Jumlah Proses Akhir">
                  </div>  
                </div> 
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan Jumlah Produksi</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
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
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase Bahan Baku Awal</label>
                    <input type="number" class="form-control" id="pbbprosesawal" name="pbbprosesawal" placeholder="Persentase Bahan Baku Awal">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase Tenaga Kerja Langsung Awal</label>
                    <input type="number" class="form-control" id="ptklprosesawal" name="ptklprosesawal" placeholder="Persentase Tenaga Kerja Langsung Awal">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase Biaya Overhead Pabrik Awal</label>
                    <input type="number" class="form-control" id="pbopprosesawal" name="pbopprosesawal" placeholder="Persentase Biaya Overhead Pabrik Awal">
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
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase Bahan Baku Akhir</label>
                    <input type="number" class="form-control" id="pbbprosesakhir" name="pbbprosesakhir" placeholder="Persentase Bahan Baku Akhir">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase Tenaga Kerja Langsung Akhir</label>
                    <input type="number" class="form-control" id="ptklprosesakhir" name="ptklprosesakhir" placeholder="Persentase Tenaga Kerja Langsung Akhir">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentase Biaya Overhead Pabrik Akhir</label>
                    <input type="number" class="form-control" id="pbopprosesakhir" name="pbopprosesakhir" placeholder="Persentase Biaya Overhead Pabrik Akhir">
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
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bahan Baku</label>
                    <select class="form-control" id="idbb" required="" name="idbb" style="width: 100%;">
                        <option value="">--Pilih Bahan Baku--</option> 
                      </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Bahan Baku Awal">
                  </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
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
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="#" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Bahan Baku Proses Akhir</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bahan Baku</label>
                    <select class="form-control" id="idbb" required="" name="idbb" style="width: 100%;">
                        <option value="">--Pilih Bahan Baku--</option> 
                      </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Bahan Baku Awal">
                  </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
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
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="#" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
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
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <select class="form-control" id="idtkl" required="" name="idtkl" style="width: 100%;">
                        <option value="">--Pilih Kegiatan--</option> 
                      </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Bahan Baku Awal">
                  </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
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
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="#" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Tenaga Kerja Langsung Proses Akhir</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <select class="form-control" id="idtkl" required="" name="idtkl" style="width: 100%;">
                        <option value="">--Pilih Kegiatan--</option> 
                      </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Bahan Baku Awal">
                  </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
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
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="#" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
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
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Biaya</label>
                    <select class="form-control" id="idtkl" required="" name="idtkl" style="width: 100%;">
                        <option value="">--Pilih BOP--</option> 
                      </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Bahan Baku Awal">
                  </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
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
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="#" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Overhead Pabrik Proses Akhir</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Biaya</label>
                    <select class="form-control" id="idtkl" required="" name="idtkl" style="width: 100%;">
                        <option value="">--Pilih BOP--</option> 
                      </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlahbiaya" name="jumlahbiaya" placeholder="Biaya Bahan Baku Awal">
                  </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
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
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="#" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Biaya Overhead Pabrik Proses Akhir</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="#" role="form" method="post" class="form-horizontal">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Biaya Per Unit</label>
                     <input type="number" class="form-control" id="biayaunit" readonly name="biayaunit" placeholder="Biaya Per Unit"> 
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status Produksi</label>
                    <select class="form-control" id="idtkl" required="" name="idtkl" style="width: 100%;">
                      <option value="">--Pilih Status Produksi--</option> 
                      <option value="0">Sedang Diproduksi</option> 
                      <option value="1">Produksi Selesai</option> 
                      <option value="2">Transfer Produksi Ke Bulan Depan</option>
                    </select>
                  </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Simpan</button>
                </div>
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
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="#" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                      </td>
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