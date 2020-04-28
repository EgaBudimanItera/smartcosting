<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class produksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Mproduksi','Mbahanbaku','Mop','Mtenagakerjalangsung','Mproduk','Mbiayabb','Mbiayatkl','Mbop'));
	}
   
    public function index(){
        $data = array(
            'page' => 'produksi/data',
            'link' => 'produksi',
            'script'=>'',
            'list'=>$this->Mproduksi->list_produksi(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data produksi' => base_url() . 'produksi'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $data = array(
            'page' => 'produksi/formtambah',
            'link' => 'produksi',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data produksi' => base_url() . 'produksi',
                'Tambah Data' =>base_url(). 'produksi/formtambah'
            ),
            'idproduksi'=>$this->Mproduksi->kode_produksi(),
            'produk'=>$this->Mproduk->list_produk(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($idproduksi){
        $data = array(
            'page' => 'produksi/formedit',
            'link' => 'produksi',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data produksi' => base_url() . 'produksi',
                'Edit Data' =>base_url(). 'produksi/formedit'
            ),
            'list'=>$this->Mproduksi->ambil_produksi($idproduksi)->row(),
            'bahanbaku'=>$this->Mbahanbaku->list_bahanbaku(),
            'tkl'=>$this->Mtenagakerjalangsung->list_tenagakerjalangsung(),
            'op'=>$this->Mop->list_op(),
            'listbbbawal'=>$this->Mbiayabb->list_biayabbawal($idproduksi),
            'listbbbakhir'=>$this->Mbiayabb->list_biayabbakhir($idproduksi),
            'listbtklawal'=>$this->Mbiayatkl->list_biayatklawal($idproduksi),
            'listbtklakhir'=>$this->Mbiayatkl->list_biayatklakhir($idproduksi),
            'listbbopawal'=>$this->Mbop->list_bopawal($idproduksi),
            'listbbopakhir'=>$this->Mbop->list_bopakhir($idproduksi),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formlaporanproduksi(){
        $data = array(
            'page' => 'produksi/formlaporanproduksi',
            'link' => 'laporanproduksi',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Laporan Produksi' => base_url() . 'produksi/formlaporanproduksi',
            ),
            'produk'=>$this->Mproduk->list_produk(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function viewlaporanproduksi(){
        $kriteria=array(
            
            'bulan'=>$this->input->post('bulan',true),
            'tahun'=>$this->input->post('tahun',true),
        );
        $data = array(
            'page' => 'produksi/viewlaporanproduksi',
            'link' => 'laporanproduksi',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Laporan Produksi' => base_url() . 'produksi/formlaporanproduksi',
                'View Laporan Produksi' => base_url() . 'produksi/viewlaporanproduksi',
            ),
            'listproduksi'=>$this->Mproduksi->ambil_produksi3($kriteria)->result(),
            'kriteria'=>$kriteria,
        );
        
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function kertaskerja($idproduksi){
        $data=array(
         'produksi'=>$this->Mproduksi->ambil_produksi2($idproduksi)->row(),
         'bb'=>$this->Mbiayabb->list_biayabball($idproduksi),
        
         'btk'=>$this->Mbiayatkl->list_biayatklall($idproduksi),
         
         'bop'=>$this->Mbop->list_bopall($idproduksi),
        
         
       );

        
       $this->load->view('produksi/kertaskerja',$data);
    }

    public function cetaklaporanproduksi($bulan,$tahun){
       $kriteria=array(
            'bulan'=>$bulan,
            'tahun'=>$tahun,
        );
       $data=array(
         'list'=>$this->Mproduksi->ambil_produksi3($kriteria)->result(),
         'kriteria'=>$kriteria,
       );
       $this->load->view('produksi/laporanproduksi',$data);
    }

    public function kartuproduksi($idproduksi){
        $data=array(
           'list'=>$this->Mproduksi->ambil_produksi($idproduksi)->row(),
           'hasilmodel'=>$this->Mproduksi->hitungbiayaunit($idproduksi),
        );
        $this->load->view('produksi/kartuproduksi',$data);

    }

    public function prosessimpan(){
      $idproduksi=$this->Mproduksi->kode_produksi();
      $idproduk=$this->input->post('idproduk',0);
      $tglmulai=date_format(date_create($this->input->post('tglmulai',true)),"Y-m-d");
      $bulan=date_format(date_create($this->input->post('tglmulai',true)),"m");
      $tahun=date_format(date_create($this->input->post('tglmulai',true)),"Y");
      $jumlrencana=$this->input->post('jumlrencana',0);
      $data=array(
        'idproduksi'=>$idproduksi,
        'idproduk'=>$idproduk,
        'tglmulai'=>$tglmulai,
        'jumlrencana'=>$jumlrencana,
        'bulan'=>$bulan,
        'tahun'=>$tahun,
      );
      $simpan = $this->Mproduksi->simpan_produksi($data);
      if($simpan){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
        );
            redirect(produksi);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
        );
            redirect(produksi/formtambah);
      }
    }

    public function proseseditjumlahproduksi(){
        $idproduksi=$this->input->post('idproduksi',true);
        $jumlprosesawal=$this->input->post('jumlprosesawal',true);
        $jumlproduksi=$this->input->post('jumlproduksi',true);
        $jumlprosesakhir=$this->input->post('jumlprosesakhir',true);
        $jumlselesai=$this->input->post('jumlselesai',true);
        $data=array(
          'jumlprosesawal'=>$jumlprosesawal,
          'jumlproduksi'=>$jumlproduksi,
          'jumlprosesakhir'=>$jumlprosesakhir,
          'jumlselesai'=>$jumlselesai,
        );

        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);
        if($editproduksi){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
        );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
        );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
      }
    }

    public function hitungdanstatus(){
       $idproduksi=$this->input->post('idproduksi',true);
       $kriteria=$this->Mproduksi->ambil_produksi2($idproduksi)->row();
       $masukan=$kriteria->jumlprosesawal+$kriteria->jumlproduksi;
       $keluaran=$kriteria->jumlselesai+$kriteria->jumlprosesakhir;
       if($masukan>0 && $keluaran>0){
         if($masukan==$keluaran){
           $hasilmodel=$this->Mproduksi->hitungbiayaunit($idproduksi);  
           $biayaperunit=$hasilmodel['jumlahbiayaperunit'];
           $statusproduksi=$this->input->post('statusproduksi',true);
           $data=array(
             'biayaunit'=>$biayaperunit,
             'statusproduksi'=>$statusproduksi,
           );

            $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);
            if($editproduksi){
                $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
                );
                redirect(base_url().'produksi/formedit/'.$idproduksi);
            }else{
                $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
                );
                redirect(base_url().'produksi/formedit/'.$idproduksi);
            }
         }else{
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Warning!</strong> Data Jumlah Masukan dan Keluar Tidak Sama !</div>'
            );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
         }
       }else{
         $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Danger!</strong> Data Masukan dan Keluaran Produk 0 !</div>'
         );
         redirect(base_url().'produksi/formedit/'.$idproduksi);
       }
       
    }

    public function proseseditpersenawal(){
        $idproduksi=$this->input->post('idproduksi',true);
        $pbbprosesawal=$this->input->post('pbbprosesawal',true);
        $ptklprosesawal=$this->input->post('ptklprosesawal',true);
        $pbopprosesawal=$this->input->post('pbopprosesawal',true);
        
        $data=array(
          'pbbprosesawal'=>$pbbprosesawal,
          'ptklprosesawal'=>$ptklprosesawal,
          'pbopprosesawal'=>$pbopprosesawal,
        );
        
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);
        if($editproduksi){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
            );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
            );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
        }
    }

    public function proseseditpersenakhir(){
        $idproduksi=$this->input->post('idproduksi',true);
        $pbbprosesakhir=$this->input->post('pbbprosesakhir',true);
        $ptklprosesakhir=$this->input->post('ptklprosesakhir',true);
        $pbopprosesakhir=$this->input->post('pbopprosesakhir',true);
        
        $data=array(
          'pbbprosesakhir'=>$pbbprosesakhir,
          'ptklprosesakhir'=>$ptklprosesakhir,
          'pbopprosesakhir'=>$pbopprosesakhir,
        );
        
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);
        if($editproduksi){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
        );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
        );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
      }
    }


    public function proseshapus($idproduksi){
       $hapus= $this->Mproduksi->hapus_produksi($idproduksi);  
       if($hapus){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
        );
            redirect(produksi);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
        );
            redirect(produksi);
      }   
    }
}