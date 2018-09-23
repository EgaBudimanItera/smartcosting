<?php


class Museraplikasi extends CI_Model {

	function simpan_user($data){
        $this->db->insert('user', $data);
        return true;
    }

    function ubah_user($kode, $data){       
        $this->db->where('userId', $kode);
        $this->db->update('user', $data); 
        return true;
    }

    function hapus_user($kode){
        $this->db->delete('user', array('userId' => $kode)); 
        return true;
    }

    function cek_login($where){      
        return $this->db->get_where('user',$where);
    }

    function cekuserid(){
        $userId=$this->session->userdata('userId');
        return $userId;
    }

    function list_user(){
         $this->db->select('*');
         $this->db->from('user');
         return $query=$this->db->get()->result();
    }

    function ambil_user($kode){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('userId',$kode);
        return $query=$this->db->get();
    }

    public function logout(){
      $this->session->sess_destroy();
      echo '<script>alert("Terima Kasih!");window.location = "'.base_url().'";</script>';
      
  }
}