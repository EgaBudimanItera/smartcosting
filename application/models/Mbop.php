<?php


class Mbop extends CI_Model {

	function simpan_bop($data){
        $this->db->insert('bop', $data);
        return true;
    }

    
    function hapus_bop($kode){
        $this->db->delete('bop', array('idbop' => $kode)); 
        return true;
    }


    function list_bopawal($idproduksi){
         $this->db->select('*');
         $this->db->from('bop');
         $this->db->join('op', 'bop.idop = op.idop');
         $this->db->where(array('idproduksi'=>$idproduksi,'statusbop'=>'0'));
         return $query=$this->db->get()->result();
    }

    function list_bopakhir($idproduksi){
         $this->db->select('*');
         $this->db->from('bop');
         $this->db->join('op', 'bop.idop = op.idop');
         $this->db->where(array('idproduksi'=>$idproduksi,'statusbop'=>'1'));
         return $query=$this->db->get()->result();
    }

    function totalbiaya($idproduksi){
        $query="SELECT coalesce((sum(jumlahbop)),0)as total FROM bop where idproduksi='$idproduksi' and statusbop='0'";
        return $this->db->query($query);
    }

    function totalbiayaakhir($idproduksi){
        $query="SELECT coalesce((sum(jumlahbop)),0)as total FROM bop where idproduksi='$idproduksi' and statusbop='1'";
        return $this->db->query($query);
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