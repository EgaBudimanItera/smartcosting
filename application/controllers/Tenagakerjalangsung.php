<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tenagakerjalangsung extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mtenagakerjalangsung');
	}
   
    public function index(){
        $data = array(
            'page' => 'tenagakerjalangsung/data',
            'link' => 'tenagakerjalangsung',
            'script'=>'',
            'list'=>$this->Mtenagakerjalangsung->list_tenagakerjalangsung(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Tenaga Kerja Langsung' => base_url() . 'tenagakerjalangsung'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $data = array(
            'page' => 'tenagakerjalangsung/formtambah',
            'link' => 'tenagakerjalangsung',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Tenaga Kerja Langsung' => base_url() . 'tenagakerjalangsung',
                'Tambah Data' =>base_url(). 'tenagakerjalangsung/formtambah'
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($id_tenagakerjalangsung){
        $data = array(
            'page' => 'tenagakerjalangsung/formedit',
            'link' => 'tenagakerjalangsung',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Tenaga Kerja Langsung' => base_url() . 'tenagakerjalangsung',
                'Edit Data' =>base_url(). 'tenagakerjalangsung/formedit'
            ),
            'list'=>$this->Mtenagakerjalangsung->ambil($id_tenagakerjalangsung)->row(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
      $nMtenagakerjalangsung=$this->input->post('nMtenagakerjalangsung',true);
      $data=array(
        'nMtenagakerjalangsung'=>$nMtenagakerjalangsung,
      );
      $simpan = $this->Mtenagakerjalangsung->simpan_data($data);
      if($simpan){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
        );
            redirect(tenagakerjalangsung);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
        );
            redirect(tenagakerjalangsung/formtambah);
      }
    }

    public function prosesedit(){
       $id_tenagakerjalangsung=$this->input->post('id_tenagakerjalangsung',true);
       $nMtenagakerjalangsung=$this->input->post('nMtenagakerjalangsung2',true);
       $data=array(
         'nMtenagakerjalangsung'=>$nMtenagakerjalangsung,
       ); 
       $edit= $this->Mtenagakerjalangsung->update('id_tenagakerjalangsung',$id_tenagakerjalangsung,$data);  
       if($edit){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diedit !</div>'
        );
            redirect(tenagakerjalangsung);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diedit !</div>'
        );
            redirect(tenagakerjalangsung/formedit);
      }
    }

    public function proseshapus($id_tenagakerjalangsung){
       $hapus= $this->Mtenagakerjalangsung->hapus('id_tenagakerjalangsung',$id_tenagakerjalangsung);  
       if($hapus){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
        );
            redirect(tenagakerjalangsung);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
        );
            redirect(tenagakerjalangsung);
      }   
    }
}