<?php


class Mproduksi extends CI_Model {

	function simpan_produksi($data){
        $this->db->insert('produksi', $data);
        return true;
    }

    function ubah_produksi($kode, $data){       
        $this->db->where('idproduksi', $kode);
        $this->db->update('produksi', $data); 
        return true;
    }

    function hapus_produksi($kode){
        $this->db->delete('produksi', array('idproduksi' => $kode)); 
        return true;
    }

    function ambil_produksi2($idproduksi){
      $this->db->select('*');
      $this->db->from('produksi'); 
      $this->db->where('idproduksi', $idproduksi); 
      return $query=$this->db->get();
    }

    function hitungproduksi($statusproduksi){
      $this->db->select('*');
      $this->db->from('produksi'); 
      $this->db->where('statusproduksi', $statusproduksi); 
      return $query=$this->db->get();
    }

    function ambil_produksi3($kriteria){
      $this->db->select('*');
      $this->db->from('produksi');
      $this->db->join('produk','produksi.idproduk=produk.idproduk'); 
      $this->db->where($kriteria); 
      return $query=$this->db->get();
    }

    function hitungbiayaunit($idproduksi){
       $hasil=$this->Mproduksi->ambil_produksi2($idproduksi)->row();
       
       //jumlah2
       $jumlrencana=$hasil->jumlrencana;
       //awal
       $jumlprosesawal=$hasil->jumlprosesawal;
       $jumlproduksi=$hasil->jumlproduksi;
       //akhir
       $jumlselesai=$hasil->jumlselesai;
       $jumlprosesakhir=$hasil->jumlprosesakhir;

       //persen2 awal
       $pbbprosesawal=$hasil->pbbprosesawal;
       $ptklprosesawal=$hasil->ptklprosesawal;
       $pbopprosesawal=$hasil->pbopprosesawal;
       //persen2 akhir
       $pbbprosesakhir=$hasil->pbbprosesakhir;
       $ptklprosesakhir=$hasil->ptklprosesakhir;
       $pbopprosesakhir=$hasil->pbopprosesakhir;

       //biaya2 awal
       $bbbprosesawal=$hasil->bbbprosesawal;
       $btklprosesawal=$hasil->btklprosesawal;
       $bbopprosesawal=$hasil->bbopprosesawal;  

       //biaya2 akhir
       $bbbtambahan=$hasil->bbbtambahan;
       $btkltambahan=$hasil->btkltambahan;
       $bboptambahan=$hasil->bboptambahan;

       //masukan
       $masukan=$jumlprosesawal+$jumlproduksi;

       //keluaran
       $keluaran=$jumlselesai+$jumlprosesakhir;

       //unit ditransfer ke persediaan barang jadi
       $unitbahan1=$jumlselesai;
       $unittenagakerja1=$jumlselesai;
       $unitoverhead1=$jumlselesai;

       //unit dalam proses persediaan akhir
       $unitbahan2=$jumlprosesakhir*$pbbprosesakhir/100;
       $unittenagakerja2=$jumlprosesakhir*$ptklprosesakhir/100;
       $unitoverhead2=$jumlprosesakhir*$pbopprosesakhir/100;

       //unit ekivalen
       $unitekivalenbahan=$unitbahan1+$unitbahan2;
       $unitekivalentenagakerja=$unittenagakerja1+$unittenagakerja2;
       $unitekivalenoverhead=$unitoverhead1+$unitoverhead2;

       //jumlah2 biaya
       $biayabahan=$bbbprosesawal+$bbbtambahan;
       $biayatenagakerja=$btklprosesawal+$btkltambahan;
       $biayaoverhead=$bbopprosesawal+$bboptambahan;

       $jumlahbiaya=$biayabahan+$biayatenagakerja+$biayaoverhead;

       if($unitekivalenbahan==0){
        $biayabahanperunit=0;
       }else{
        $biayabahanperunit=$biayabahan/$unitekivalenbahan; 
       }
       if($unitekivalentenagakerja==0){
        $biayatenagakerjaperunit=0;
       }else{
        $biayatenagakerjaperunit=$biayatenagakerja/$unitekivalentenagakerja;
       }
       if($unitekivalenoverhead==0){
        $biayaoverheadperunit=0;
       }else{
        $biayaoverheadperunit=$biayaoverhead/$unitekivalenoverhead;
       }
       
       

       $jumlahbiayaperunit=$biayabahanperunit+$biayaoverheadperunit+$biayatenagakerjaperunit;


       //pertanggungjawaban biaya
       $biayabarangjadi=$jumlselesai*$jumlahbiayaperunit;
       $biayabahanakhir=$jumlprosesakhir*$pbbprosesakhir*$biayabahanperunit/100;
       $biayatenagakerjaakhir=$jumlprosesakhir*$ptklprosesakhir*$biayatenagakerjaperunit/100;
       $biayaoverakhir=$jumlprosesakhir*$pbopprosesakhir*$biayaoverheadperunit/100;

       $jumlahbiayaakhir=$biayabarangjadi+$biayabahanakhir+$biayatenagakerjaakhir+$biayaoverakhir;

       $hasilakhir=array(
         'jumlrencana'=>$jumlrencana,
         'jumlprosesawal'=>$jumlprosesawal,
         'jumlproduksi'=>$jumlproduksi,
         'jumlselesai'=>$jumlselesai,
         'jumlprosesakhir'=>$jumlprosesakhir,

         'pbbprosesawal'=>$pbbprosesawal,
         'ptklprosesawal'=>$ptklprosesawal,
         'pbopprosesawal'=>$pbopprosesawal,

         'pbbprosesakhir'=>$pbbprosesakhir,
         'ptklprosesakhir'=>$ptklprosesakhir,
         'pbopprosesakhir'=>$pbopprosesakhir,

         'bbbprosesawal'=>$bbbprosesawal,
         'btklprosesawal'=>$btklprosesawal,
         'bbopprosesawal'=>$bbopprosesawal,

         'bbbtambahan'=>$bbbtambahan,
         'btkltambahan'=>$btkltambahan,
         'bboptambahan'=>$bboptambahan,

         'masukan'=>$masukan,
         'keluaran'=>$keluaran,
         
         'unitbahan1'=>$unitbahan1,
         'unittenagakerja1'=>$unittenagakerja1,
         'unitoverhead1'=>$unitoverhead1,

         'unitbahan2'=>$unitbahan2,
         'unittenagakerja2'=>$unittenagakerja2,
         'unitoverhead2'=>$unitoverhead2,

         'unitekivalenbahan'=>$unitekivalenbahan,
         'unitekivalentenagakerja'=>$unitekivalentenagakerja,
         'unitekivalenoverhead'=>$unitekivalenoverhead,

         'biayabahan'=>$biayabahan,
         'biayatenagakerja'=>$biayatenagakerja,
         'biayaoverhead'=>$biayaoverhead,
         'jumlahbiaya'=>$jumlahbiaya,

         'biayabahanperunit'=>$biayabahanperunit,
         'biayatenagakerjaperunit'=>$biayatenagakerjaperunit,
         'biayaoverheadperunit'=>$biayaoverheadperunit,
         'jumlahbiayaperunit'=>$jumlahbiayaperunit,

         'biayabarangjadi'=>$biayabarangjadi,
         'biayabahanakhir'=>$biayabahanakhir,
         'biayatenagakerjaakhir'=>$biayatenagakerjaakhir,
         'biayaoverakhir'=>$biayaoverakhir,
         'jumlahbiayaakhir'=>$jumlahbiayaakhir

       );
       return $hasilakhir;
    }

    function list_produksi(){
         $this->db->select('*');
         $this->db->from('produksi');
         $this->db->join('produk', 'produksi.idproduk = produk.idproduk');
         return $query=$this->db->get()->result();
    }

    function ambil_produksi($kode){
        $this->db->select('*');
        $this->db->from('produksi');
        $this->db->join('produk', 'produksi.idproduk = produk.idproduk');
        $this->db->where('idproduksi',$kode);
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