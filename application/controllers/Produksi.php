<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class produksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mproduksi');
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
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($id_produksi){
        $data = array(
            'page' => 'produksi/formedit',
            'link' => 'produksi',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data produksi' => base_url() . 'produksi',
                'Edit Data' =>base_url(). 'produksi/formedit'
            ),
            'list'=>$this->Mproduksi->ambil_produksi($id_produksi)->row(),
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
            
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function viewlaporanproduksi(){
        $data = array(
            'page' => 'produksi/viewlaporanproduksi',
            'link' => 'laporanproduksi',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Laporan Produksi' => base_url() . 'produksi/formlaporanproduksi',
                'View Laporan Produksi' => base_url() . 'produksi/viewlaporanproduksi',
            ),
            
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
      $nMproduksi=$this->input->post('nMproduksi',true);
      $data=array(
        'nMproduksi'=>$nMproduksi,
      );
      $simpan = $this->Mproduksi->simpan_data($data);
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

    public function prosesedit(){
       $id_produksi=$this->input->post('id_produksi',true);
       $nMproduksi=$this->input->post('nMproduksi2',true);
       $data=array(
         'nMproduksi'=>$nMproduksi,
       ); 
       $edit= $this->Mproduksi->update('id_produksi',$id_produksi,$data);  
       if($edit){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diedit !</div>'
        );
            redirect(produksi);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diedit !</div>'
        );
            redirect(produksi/formedit);
      }
    }

    public function proseshapus($id_produksi){
       $hapus= $this->Mproduksi->hapus('id_produksi',$id_produksi);  
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