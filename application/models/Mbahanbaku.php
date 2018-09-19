<?php


class Mbahanbaku extends CI_Model {

	function simpan_bahanbaku($data){
        $this->db->insert('bahanbaku', $data);
        return true;
    }

    function ubah_bahanbaku($param_kode, $kode, $data){       
        $this->db->where($param_kode, $kode);
        $this->db->update('bahanbaku', $data); 
        return true;
    }

    function hapus_bahanbaku($param_kode, $kode){
        $this->db->delete('bahanbaku', array($param_kode => $kode)); 
        return true;
    }


    function list_bahanbaku(){
         $this->db->select('*');
         $this->db->from('bahanbaku');
        
         return $query=$this->db->get()->result();
    }

    function ambil_bahanbaku($param_kode, $kode){
        $this->db->select('*');
        $this->db->from('bahanbaku');
        $this->db->where($param_kode,$kode);
        return $query=$this->db->get();
    }

    function kode_bahanbaku(){
    	//N201700001
    	$this->db->select('Right(idbb,5) as kode',false);
    	
    	$this->db->order_by('idbb','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('bahanbaku');

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