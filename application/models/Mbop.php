<?php


class Mbop extends CI_Model {

	function simpan_bop($data){
        $this->db->insert('bop', $data);
        return true;
    }

    function ubah_bop($param_kode, $kode, $data){       
        $this->db->where($param_kode, $kode);
        $this->db->update('bop', $data); 
        return true;
    }

    function hapus_bop($param_kode, $kode){
        $this->db->delete('bop', array($param_kode => $kode)); 
        return true;
    }


    function list_bop($idproduksi){
         $this->db->select('*');
         $this->db->from('bop');
         $this->db->join('op', 'bop.idop = op.idop');
         $this->db->where('idproduksi',$idproduksi);
         return $query=$this->db->get()->result();
    }

    function ambil_bop($param_kode, $kode){
        $this->db->select('*');
        $this->db->from('bop');
        $this->db->where($param_kode,$kode);
        return $query=$this->db->get();
    }

    function kode_bop(){
    	//N201700001
    	$this->db->select('Right(idbop,5) as kode',false);
    	
    	$this->db->order_by('idbop','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('bop');

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