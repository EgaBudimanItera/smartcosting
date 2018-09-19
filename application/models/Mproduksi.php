<?php


class Mproduksi extends CI_Model {

	function simpan_produksi($data){
        $this->db->insert('produksi', $data);
        return true;
    }

    function ubah_produksi($param_kode, $kode, $data){       
        $this->db->where($param_kode, $kode);
        $this->db->update('produksi', $data); 
        return true;
    }

    function hapus_produksi($param_kode, $kode){
        $this->db->delete('produksi', array($param_kode => $kode)); 
        return true;
    }


    function list_produksi(){
         $this->db->select('*');
         $this->db->from('produksi');
        
         return $query=$this->db->get()->result();
    }

    function ambil_produksi($param_kode, $kode){
        $this->db->select('*');
        $this->db->from('produksi');
        $this->db->where($param_kode,$kode);
        return $query=$this->db->get();
    }

    function kode_produksi(){
    	//N201700001
    	$this->db->select('Right(idproduksi,5) as kode',false);
    	
    	$this->db->order_by('idproduksi','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('produksi');

    	if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
        $kodejadi  = "P".$kodemax;
        return $kodejadi;
   	}
}