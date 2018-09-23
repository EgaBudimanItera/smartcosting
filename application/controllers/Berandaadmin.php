<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berandaadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Mproduksi'));
	}

	public function index()
	{
		$data=array(
		  'page'=>'berandaadmin',
		  'link'=>'beranda',
		  'produksi'=>$this->Mproduksi->hitungproduksi('0')->num_rows(),
		  'selesai'=>$this->Mproduksi->hitungproduksi('1')->num_rows(),
		  'transfer'=>$this->Mproduksi->hitungproduksi('2')->num_rows(),
		);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebaradmin');
		$this->load->view('template/content');
		$this->load->view('template/footer');
	}
}
