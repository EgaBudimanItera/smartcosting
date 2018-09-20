<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bahanbaku extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mbahanbaku');
	}
   
    public function index(){
        $data = array(
            'page' => 'bahanbaku/data',
            'link' => 'bahanbaku',
            'script'=>'',
            'list'=>$this->Mbahanbaku->list_bahanbaku(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Bahan Baku' => base_url() . 'bahanbaku'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $data = array(
            'page' => 'bahanbaku/formtambah',
            'link' => 'bahanbaku',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Bahan Baku' => base_url() . 'bahanbaku',
                'Tambah Data' =>base_url(). 'bahanbaku/formtambah'
            ),
            'idbb'=>$this->Mbahanbaku->kode_bahanbaku(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($idbb){
        $data = array(
            'page' => 'bahanbaku/formedit',
            'link' => 'bahanbaku',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Bahan Baku' => base_url() . 'bahanbaku',
                'Edit Data' =>base_url(). 'bahanbaku/formedit'
            ),
            'list'=>$this->Mbahanbaku->ambil_bahanbaku($idbb)->row(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
      $idbb=$this->Mbahanbaku->kode_bahanbaku();
      $namabb=$this->input->post('namabb',true);
      $satuan=$this->input->post('satuan',true);
      $data=array(
        'idbb'=>$idbb,
        'namabb'=>$namabb,
        'satuan'=>$satuan,
      );
      $simpan = $this->Mbahanbaku->simpan_bahanbaku($data);
      if($simpan){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
        );
            redirect(bahanbaku);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
        );
            redirect(bahanbaku/formtambah);
      }
    }

    public function prosesedit(){
       $idbb=$this->input->post('idbb',true);
       $namabb=$this->input->post('namabb',true);
       $satuan=$this->input->post('satuan',true);
       $data=array(
         'namabb'=>$namabb,
         'satuan'=>$satuan,
       ); 
       $edit= $this->Mbahanbaku->ubah_bahanbaku($idbb,$data);  
       if($edit){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diedit !</div>'
        );
            redirect(bahanbaku);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diedit !</div>'
        );
            redirect(bahanbaku/formedit);
      }
    }

    public function proseshapus($idbb){
       $hapus= $this->Mbahanbaku->hapus_bahanbaku($id_bahanbaku);  
       if($hapus){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
        );
            redirect(bahanbaku);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
        );
            redirect(bahanbaku);
      }   
    }
}