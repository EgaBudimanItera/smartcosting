<?php


class Mtenagakerjalangsung extends CI_Model {

	function simpan_tenagakerjalangsung($data){
        $this->db->insert('tenagakerjalangsung', $data);
        return true;
    }

    function ubah_tenagakerjalangsung($param_kode, $kode, $data){       
        $this->db->where($param_kode, $kode);
        $this->db->update('tenagakerjalangsung', $data); 
        return true;
    }

    function hapus_tenagakerjalangsung($param_kode, $kode){
        $this->db->delete('tenagakerjalangsung', array($param_kode => $kode)); 
        return true;
    }


    function list_tenagakerjalangsung(){
         $this->db->select('*');
         $this->db->from('tenagakerjalangsung');
        
         return $query=$this->db->get()->result();
    }

    function ambil_tenagakerjalangsung($param_kode, $kode){
        $this->db->select('*');
        $this->db->from('tenagakerjalangsung');
        $this->db->where($param_kode,$kode);
        return $query=$this->db->get();
    }

    function kode_tenagakerjalangsung(){
    	//N201700001
    	$this->db->select('Right(idbb,5) as kode',false);
    	
    	$this->db->order_by('idbb','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('tenagakerjalangsung');

    	if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
        $kodejadi  = "R".$kodemax;
        return $kodejadi;
   	}
}