<?php


class Mbiayatkl extends CI_Model {

	function simpan_biayatkl($data){
        $this->db->insert('biayatkl', $data);
        return true;
    }

    function ubah_biayatkl($param_kode, $kode, $data){       
        $this->db->where($param_kode, $kode);
        $this->db->update('biayatkl', $data); 
        return true;
    }

    function hapus_biayatkl($param_kode, $kode){
        $this->db->delete('biayatkl', array($param_kode => $kode)); 
        return true;
    }


    function list_biayatkl(){
         $this->db->select('*');
         $this->db->from('biayatkl');
         return $query=$this->db->get()->result();
    }

    function ambil_biayatkl($param_kode, $kode){
        $this->db->select('*');
        $this->db->from('biayatkl');
        $this->db->where($param_kode,$kode);
        return $query=$this->db->get();
    }

    function kode_biayatkl(){
    	//N201700001
    	$this->db->select('Right(idbiayatkl,5) as kode',false);
    	
    	$this->db->order_by('idbiayatkl','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('biayatkl');

    	if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
        $kodejadi  = "C2".$kodemax;
        return $kodejadi;
   	}
}