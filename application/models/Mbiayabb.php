<?php


class Mbiayabb extends CI_Model {

	function simpan_biayabb($data){
        $this->db->insert('biayabb', $data);
        return true;
    }

    function ubah_biayabb($param_kode, $kode, $data){       
        $this->db->where($param_kode, $kode);
        $this->db->update('biayabb', $data); 
        return true;
    }

    function hapus_biayabb($param_kode, $kode){
        $this->db->delete('biayabb', array($param_kode => $kode)); 
        return true;
    }


    function list_biayabb(){
         $this->db->select('*');
         $this->db->from('biayabb');
        
         return $query=$this->db->get()->result();
    }

    function ambil_biayabb($param_kode, $kode){
        $this->db->select('*');
        $this->db->from('biayabb');
        $this->db->where($param_kode,$kode);
        return $query=$this->db->get();
    }

    function kode_biayabb(){
    	//N201700001
    	$this->db->select('Right(idbiayabb,5) as kode',false);
    	
    	$this->db->order_by('idbiayabb','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('biayabb');

    	if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
        $kodejadi  = "C1".$kodemax;
        return $kodejadi;
   	}
}