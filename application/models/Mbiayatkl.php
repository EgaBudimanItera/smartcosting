<?php


class Mbiayatkl extends CI_Model {

	function simpan_biayatkl($data){
        $this->db->insert('biayatkl', $data);
        return true;
    }

    

    function hapus_biayatkl($kode){
        $this->db->delete('biayatkl', array('idbiayatkl' => $kode)); 
        return true;
    }


    function list_biayatklawal($idproduksi){
         $this->db->select('*');
         $this->db->from('biayatkl');
         $this->db->join('tenagakerjalangsung', 'biayatkl.idtkl = tenagakerjalangsung.idtkl');
         $this->db->where(array('idproduksi'=>$idproduksi,'statustkl'=>'0'));
         return $query=$this->db->get()->result();
    }

    function list_biayatklakhir($idproduksi){
         $this->db->select('*');
         $this->db->from('biayatkl');
         $this->db->join('tenagakerjalangsung', 'biayatkl.idtkl = tenagakerjalangsung.idtkl');
         $this->db->where(array('idproduksi'=>$idproduksi,'statustkl'=>'1'));
         return $query=$this->db->get()->result();
    }

    function totalbiaya($idproduksi){
        $query="SELECT coalesce((sum(jumlahtkl)),0)as total FROM biayatkl where idproduksi='$idproduksi' and statustkl='0'";
        return $this->db->query($query);
    }

    function totalbiayaakhir($idproduksi){
        $query="SELECT coalesce((sum(jumlahtkl)),0)as total FROM biayatkl where idproduksi='$idproduksi' and statustkl='1'";
        return $this->db->query($query);
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