<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Biayatkl extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Mbiayatkl','Mproduksi'));
	}
   
    public function index(){
       
    }

    public function simpantklawal(){
        $idproduksi=$this->input->post('idproduksi',true);
        $idtkl=$this->input->post('idtkl',true);
        $jumlahbiaya=$this->input->post('jumlahbiaya',true);
        $totalbiaya=$this->Mbiayatkl->totalbiaya($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya+$jumlahbiaya;
        $data=array(
          'tklprosesawal'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $datatkl=array(
          'idproduksi'=>$idproduksi,
          'idtkl'=>$idtkl,
          'jumlahbiaya'=>$jumlahbiaya,
          'statustkl'=>'0',
        );
        $simpantkl=$this->Mbiayatkl->simpan_biayatkl($datatkl);
        if($editproduksi && $simpantkl){
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

    public function hapustklawal($idtkl,$idproduksi,$jumlah){
    	$totalbiaya=$this->Mbiayatkl->totalbiaya($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya-$jumlah;  

        $data=array(
          'tklprosesawal'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $hapustkl=$this->Mbiayatkl->hapus_biayatkl($idtkl);
        if($editproduksi && $hapustkl){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
        );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
        );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
        }
    }

    public function simpantklakhir(){
        $idproduksi=$this->input->post('idproduksi',true);
        $idtkl=$this->input->post('idtkl',true);
        $jumlahbiaya=$this->input->post('jumlahbiaya',true);
        $totalbiaya=$this->Mbiayatkl->totalbiayaakhir($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya+$jumlahbiaya;
        $data=array(
          'tkltambahan'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $datatkl=array(
          'idproduksi'=>$idproduksi,
          'idtkl'=>$idtkl,
          'jumlahbiaya'=>$jumlahbiaya,
          'statustkl'=>'1',
        );
        $simpantkl=$this->Mbiayatkl->simpan_biayatkl($datatkl);
        if($editproduksi && $simpantkl){
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
    
    public function hapustklakhir($idtkl,$idproduksi,$jumlah){
    	$totalbiaya=$this->Mbiayatkl->totalbiayaakhir($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya-$jumlah;  

        $data=array(
          'tkltambahan'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $hapustkl=$this->Mbiayatkl->hapus_biayatkl($idtkl);
        if($editproduksi && $hapustkl){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
        );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
        );
            redirect(base_url().'produksi/formedit/'.$idproduksi);
        }
    }

}