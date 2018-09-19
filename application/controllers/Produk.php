<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mproduk');
	}
   
    public function index(){
        $data = array(
            'page' => 'produk/data',
            'link' => 'produk',
            'script'=>'',
            'list'=>$this->Mproduk->list_produk(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data produk' => base_url() . 'produk'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $data = array(
            'page' => 'produk/formtambah',
            'link' => 'produk',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data produk' => base_url() . 'produk',
                'Tambah Data' =>base_url(). 'produk/formtambah'
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($id_produk){
        $data = array(
            'page' => 'produk/formedit',
            'link' => 'produk',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data produk' => base_url() . 'produk',
                'Edit Data' =>base_url(). 'produk/formedit'
            ),
            'list'=>$this->Mproduk->ambil($id_produk)->row(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
      $nMproduk=$this->input->post('nMproduk',true);
      $data=array(
        'nMproduk'=>$nMproduk,
      );
      $simpan = $this->Mproduk->simpan_data($data);
      if($simpan){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
        );
            redirect(produk);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
        );
            redirect(produk/formtambah);
      }
    }

    public function prosesedit(){
       $id_produk=$this->input->post('id_produk',true);
       $nMproduk=$this->input->post('nMproduk2',true);
       $data=array(
         'nMproduk'=>$nMproduk,
       ); 
       $edit= $this->Mproduk->update('id_produk',$id_produk,$data);  
       if($edit){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diedit !</div>'
        );
            redirect(produk);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diedit !</div>'
        );
            redirect(produk/formedit);
      }
    }

    public function proseshapus($id_produk){
       $hapus= $this->Mproduk->hapus('id_produk',$id_produk);  
       if($hapus){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
        );
            redirect(produk);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
        );
            redirect(produk);
      }   
    }
}