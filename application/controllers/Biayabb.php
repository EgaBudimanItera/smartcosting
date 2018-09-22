<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Biayabb extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Mbiayabb','Mproduksi'));
	}
   
    public function index(){
       
    }

    public function simpanbbbawal(){
        $idproduksi=$this->input->post('idproduksi',true);
        $idbb=$this->input->post('idbb',true);
        $jumlahbiaya=$this->input->post('jumlahbiaya',true);
        $totalbiaya=$this->Mbiayabb->totalbiaya($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya+$jumlahbiaya;
        $data=array(
          'bbbprosesawal'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $databbb=array(
          'idproduksi'=>$idproduksi,
          'idbb'=>$idbb,
          'jumlahbiaya'=>$jumlahbiaya,
          'statusbb'=>'0',
        );
        $simpanbbb=$this->Mbiayabb->simpan_biayabb($databbb);
        if($editproduksi && $simpanbbb){
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

    public function hapusbbbawal($idbbb,$idproduksi,$jumlah){
    	$totalbiaya=$this->Mbiayabb->totalbiaya($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya-$jumlah;  

        $data=array(
          'bbbprosesawal'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $hapusbbb=$this->Mbiayabb->hapus_biayabb($idbbb);
        if($editproduksi && $hapusbbb){
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

    public function simpanbbbakhir(){
        $idproduksi=$this->input->post('idproduksi',true);
        $idbb=$this->input->post('idbb',true);
        $jumlahbiaya=$this->input->post('jumlahbiaya',true);
        $totalbiaya=$this->Mbiayabb->totalbiayaakhir($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya+$jumlahbiaya;
        $data=array(
          'bbbtambahan'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $databbb=array(
          'idproduksi'=>$idproduksi,
          'idbb'=>$idbb,
          'jumlahbiaya'=>$jumlahbiaya,
          'statusbb'=>'1',
        );
        $simpanbbb=$this->Mbiayabb->simpan_biayabb($databbb);
        if($editproduksi && $simpanbbb){
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
    
    public function hapusbbbakhir($idbbb,$idproduksi,$jumlah){
    	$totalbiaya=$this->Mbiayabb->totalbiayaakhir($idproduksi)->row()->total;
        $totalbiaya=$totalbiaya-$jumlah;  

        $data=array(
          'bbbtambahan'=>$totalbiaya,
        );
        $editproduksi=$this->Mproduksi->ubah_produksi($idproduksi,$data);

        $hapusbbb=$this->Mbiayabb->hapus_biayabb($idbbb);
        if($editproduksi && $hapusbbb){
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