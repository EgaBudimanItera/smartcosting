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
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($id_bahanbaku){
        $data = array(
            'page' => 'bahanbaku/formedit',
            'link' => 'bahanbaku',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Bahan Baku' => base_url() . 'bahanbaku',
                'Edit Data' =>base_url(). 'bahanbaku/formedit'
            ),
            'list'=>$this->Mbahanbaku->ambil($id_bahanbaku)->row(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
      $nMbahanbaku=$this->input->post('nMbahanbaku',true);
      $data=array(
        'nMbahanbaku'=>$nMbahanbaku,
      );
      $simpan = $this->Mbahanbaku->simpan_data($data);
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
       $id_bahanbaku=$this->input->post('id_bahanbaku',true);
       $nMbahanbaku=$this->input->post('nMbahanbaku2',true);
       $data=array(
         'nMbahanbaku'=>$nMbahanbaku,
       ); 
       $edit= $this->Mbahanbaku->update('id_bahanbaku',$id_bahanbaku,$data);  
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

    public function proseshapus($id_bahanbaku){
       $hapus= $this->Mbahanbaku->hapus('id_bahanbaku',$id_bahanbaku);  
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