<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Op extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mop');
	}
   
    public function index(){
        $data = array(
            'page' => 'op/data',
            'link' => 'op',
            'script'=>'',
            'list'=>$this->Mop->list_op(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Overhead Pabrik' => base_url() . 'op'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $data = array(
            'page' => 'op/formtambah',
            'link' => 'op',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Overhead Pabrik' => base_url() . 'op',
                'Tambah Data' =>base_url(). 'op/formtambah'
            ),
            'idop'=>$this->Mop->kode_op(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($idop){
        $data = array(
            'page' => 'op/formedit',
            'link' => 'op',
            'script'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Overhead Pabrik' => base_url() . 'op',
                'Edit Data' =>base_url(). 'op/formedit'
            ),
            'list'=>$this->Mop->ambil_op($idop)->row(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebaradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
      $namaop=$this->input->post('namaop',true);
      $idop=$this->Mop->kode_op();
      $keterangan=$this->input->post('keterangan',true);
      $data=array(
        'idop'=>$idop,
        'namaop'=>$namaop,
        'keterangan'=>$keterangan,
      );
      $simpan = $this->Mop->simpan_op($data);
      if($simpan){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
        );
            redirect(op);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
        );
            redirect(op/formtambah);
      }
    }

    public function prosesedit(){
       $namaop=$this->input->post('namaop',true);
       $idop=$this->input->post('idop',true);
       $keterangan=$this->input->post('keterangan',true);
       $data=array(
        'namaop'=>$namaop,
        'keterangan'=>$keterangan,
       ); 
       $edit= $this->Mop->ubah_op($idop,$data);  
       if($edit){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diedit !</div>'
        );
            redirect(op);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diedit !</div>'
        );
            redirect(op/formedit);
      }
    }

    public function proseshapus($id_op){
       $hapus= $this->Mop->hapus('id_op',$id_op);  
       if($hapus){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
        );
            redirect(op);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
        );
            redirect(op);
      }   
    }
}