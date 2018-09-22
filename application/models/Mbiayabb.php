<?php


class Mbiayabb extends CI_Model {

	function simpan_biayabb($data){
        $this->db->insert('biayabb', $data);
        return true;
    }

    function hapus_biayabb($kode){
        $this->db->delete('biayabb', array('idbiayabb'=> $kode)); 
        return true;
    }


    function list_biayabbawal($idproduksi){
         $this->db->select('*');
         $this->db->from('biayabb');
         $this->db->join('bahanbaku', 'biayabb.idbb = bahanbaku.idbb');
         $this->db->where(array('idproduksi'=>$idproduksi,'statusbb'=>'0'));
         return $query=$this->db->get()->result();
    }

    function list_biayabbakhir($idproduksi){
         $this->db->select('*');
         $this->db->from('biayabb');
         $this->db->join('bahanbaku', 'biayabb.idbb = bahanbaku.idbb');
         $this->db->where(array('idproduksi'=>$idproduksi,'statusbb'=>'1'));
         return $query=$this->db->get()->result();
    }

    function totalbiaya($idproduksi){
        $query="SELECT coalesce((sum(jumlahbiaya)),0)as total FROM biayabb where idproduksi='$idproduksi' and statusbb='0'";
        return $this->db->query($query);
    }

    function totalbiayaakhir($idproduksi){
        $query="SELECT coalesce((sum(jumlahbiaya)),0)as total FROM biayabb where idproduksi='$idproduksi' and statusbb='1'";
        return $this->db->query($query);
    }

    function ambil_biayabb($idbbb){
        $this->db->select('*');
        $this->db->from('biayabb');
        $this->db->where('idbiayabb',$idbbb);
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