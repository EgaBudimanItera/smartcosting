<?php


class Mop extends CI_Model {

	function simpan_op($data){
        $this->db->insert('op', $data);
        return true;
    }

    function ubah_op($kode, $data){       
        $this->db->where('idop', $kode);
        $this->db->update('op', $data); 
        return true;
    }

    function hapus_op($kode){
        $this->db->delete('op', array('idop' => $kode)); 
        return true;
    }


    function list_op(){
         $this->db->select('*');
         $this->db->from('op');
        
         return $query=$this->db->get()->result();
    }

    function ambil_op($kode){
        $this->db->select('*');
        $this->db->from('op');
        $this->db->where('idop',$kode);
        return $query=$this->db->get();
    }

    function kode_op(){
    	//N201700001
    	$this->db->select('Right(idop,5) as kode',false);
    	
    	$this->db->order_by('idop','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('op');

    	if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
        $kodejadi  = "O".$kodemax;
        return $kodejadi;
   	}
}