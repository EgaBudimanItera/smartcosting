<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Useraplikasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Museraplikasi');
	}

	public function index(){
	   $this->load->view('user/login');
	}

	public function datauser(){
	   $data = array(
	   	  'page'=>'user/data',
		  'link'=>'user',
		  'list'=>$this->Museraplikasi->list_user(),
		  'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data User' => base_url() . 'useraplikasi/datauser'),
	   );
	   $this->load->view('template/header',$data);
	   $this->load->view('template/sidebaradmin');
       $this->load->view('template/content');
	   $this->load->view('template/footer');
	}

	public function formtambah(){
		$data = array(
	   	  'page'=>'user/formtambah',
		  'link'=>'user',
		  'list'=>$this->Museraplikasi->list_user(),
		  'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data User' => base_url() . 'useraplikasi/datauser',
                'Tambah Data User' => base_url() . 'useraplikasi/formtambah'
            ),
	   );
	   $this->load->view('template/header',$data);
	   $this->load->view('template/sidebaradmin');
       $this->load->view('template/content');
	   $this->load->view('template/footer');
	}

	public function prosestambah(){
		$userNama=$this->input->post('userNama',true);
		$userHakakses=$this->input->post('userHakakses',true);
		$data=array(
			'userNama'=>$userNama,
			'userHakakses'=>$userHakakses,
			'userPassword'=>'123',
		);
		$simpanuser=$this->Museraplikasi->simpan_user($data);
		if($simpanuser){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
        );
            redirect(base_url().'useraplikasi/datauser');
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
        );
            redirect(base_url().'useraplikasi/formtambah');
      }
	}

	public function formubahpassword(){
		$data = array(
	   	  'page'=>'user/formedit',
		  'link'=>'',
		  'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Ubah Password' => base_url() . 'useraplikasi/formubahpassword'
                
            ),
	   );
	   $this->load->view('template/header',$data);
	   $this->load->view('template/sidebaradmin');
       $this->load->view('template/content');
	   $this->load->view('template/footer');
	}

	public function prosesubahpassword(){
		$userId=$this->input->post('userId',true);
		$data=array(
			'userPassword'=>$this->input->post('userPassword',true),
		);
		$ubah=$this->Museraplikasi->ubah_user($userId,$data);
		if($ubah){
            echo '<script>alert("Berhasil Ubah Password!");window.location = "'.base_url().'useraplikasi/logout";</script>';
        }else{
            echo '<script>alert("Password gagal Diubah!");window.location = "'.base_url().'formubahpassword";</script>';
      }
	}

	public function hapususer($userId){
	   $hapus=$this->Museraplikasi->hapus_user($userId);
	   if($hapus){
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
        );
            redirect(base_url().'useraplikasi/datauser');
        }else{
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
        );
            redirect(base_url().'useraplikasi/datauser');
      }
	}

	public function logout(){
		$this->Museraplikasi->logout();
	}

	public function authuser(){
		$userNama=$this->input->post('userNama',true);
	    $userPassword=$this->input->post('userPassword',true);
	    $where=array(
	          'userNama'=>$userNama,
	          'userPassword'=>$userPassword,
	    );
	    $cek=$this->Museraplikasi->cek_login($where)->num_rows(); 
	    if($cek!=0){
	      $data_session = array(
	          'userNama' => $userNama,
	          'userHakakses'=>$this->Museraplikasi->cek_login($where)->row()->userHakakses,
	          'userId'=>$this->Museraplikasi->cek_login($where)->row()->userId,
	          'status' => "login",
	      );

	      $this->session->set_userdata($data_session);
	      echo '<script>alert("user ditemukan!");window.location = "'.base_url().'berandaadmin";</script>';
	      
	    }
	    else{
	      echo '<script>alert("Maaf, username atau password salah!");window.location = "'.base_url().'useraplikasi";</script>';
	      
	    }	
	}
}