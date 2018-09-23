<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bop extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Mbop','Mproduksi'));
	}
   
    public function index(){
       
    }

    public function simpanbopawal(){
        $idproduksi=$this->input->post('idproduksi',true);
        $idop=$this->input->post('idop',true);
        $jumlahbiaya=$this->input->post('jumlahbiaya',true);
        $totalbiaya=$this->Mbop->totalbiaya($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya+$jumlahbiaya;
        $data=array(
          'bbopprosesawal'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $databop=array(
          'idproduksi'=>$idproduksi,
          'idop'=>$idop,
          'jumlahbop'=>$jumlahbiaya,
          'statusbop'=>'0',
        );
        $simpanbop=$this->Mbop->simpan_bop($databop);
        if($editproduksi && $simpanbop){
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

    public function hapusbopawal($idbop,$idproduksi,$jumlah){
    	$totalbiaya=$this->Mbop->totalbiaya($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya-$jumlah;  

        $data=array(
          'bbopprosesawal'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $hapusbop=$this->Mbop->hapus_bop($idbop);
        if($editproduksi && $hapusbop){
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

    public function simpanbopakhir(){
        $idproduksi=$this->input->post('idproduksi',true);
        $idop=$this->input->post('idop',true);
        $jumlahbiaya=$this->input->post('jumlahbiaya',true);
        $totalbiaya=$this->Mbop->totalbiayaakhir($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya+$jumlahbiaya;
        $data=array(
          'bboptambahan'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $databop=array(
          'idproduksi'=>$idproduksi,
          'idop'=>$idop,
          'jumlahbop'=>$jumlahbiaya,
          'statusbop'=>'1',
        );
        $simpanbop=$this->Mbop->simpan_bop($databop);
        if($editproduksi && $simpanbop){
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
    
    public function hapusbopakhir($idbop,$idproduksi,$jumlah){
    	$totalbiaya=$this->Mbop->totalbiayaakhir($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya-$jumlah;  

        $data=array(
          'bboptambahan'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $hapusbop=$this->Mbop->hapus_bop($idbop);
        if($editproduksi && $hapusbop){
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