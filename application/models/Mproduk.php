<?php


class Mproduk extends CI_Model {

	function simpan_produk($data){
        $this->db->insert('produk', $data);
        return true;
    }

    function ubah_produk($kode, $data){       
        $this->db->where('idproduk', $kode);
        $this->db->update('produk', $data); 
        return true;
    }

    function hapus_produk($kode){
        $this->db->delete('produk', array('idproduk' => $kode)); 
        return true;
    }


    function list_produk(){
         $this->db->select('*');
         $this->db->from('produk');
         return $query=$this->db->get()->result();
    }

    function ambil_produk($kode){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('idproduk',$kode);
        return $query=$this->db->get();
    }

    function kode_produk(){
    	//N201700001
    	$this->db->select('Right(idproduk,4) as kode',false);
    	
    	$this->db->order_by('idproduk','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('produk');

    	if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "P".$kodemax;
        return $kodejadi;
   	}
}