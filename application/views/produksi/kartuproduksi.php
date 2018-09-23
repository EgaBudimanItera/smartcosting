
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table {
    border-collapse: collapse;
}
td.garis {
  border-bottom: 1pt solid black;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kartu Produksi Barang</title>
</head>
<body onload="window.print()" background="<?=base_url()?>/assets/bgh.jpg" >
	<table width="100%" border="1px">
	  <tr>
		<td>
			<?php
			  $bulan=$list->bulan;
			  if($bulan=="1"){
			  	$namabulan="Januari";
			  }else if($bulan=="2"){
			  	$namabulan="Februari";
			  }else if($bulan=="3"){
			  	$namabulan="Maret";
			  }else if($bulan=="4"){
			  	$namabulan="April";
			  }else if($bulan=="5"){
			  	$namabulan="Mei";
			  }else if($bulan=="6"){
			  	$namabulan="Juni";
			  }else if($bulan=="7"){
			  	$namabulan="Juli";
			  }else if($bulan=="8"){
			  	$namabulan="Agustus";
			  }else if($bulan=="9"){
			  	$namabulan="September";
			  }else if($bulan=="10"){
			  	$namabulan="Oktober";
			  }else if($bulan=="11"){
			  	$namabulan="November";
			  }else if($bulan=="12"){
			  	$namabulan="Desember";
			  }
			?>
			<center>
				<h4>Mega Jaya<br/>Kartu Produksi <?=$list->namaproduk?><br>Bulan <?=$namabulan?> <?=$list->tahun?><br> (Dalam Rupiah)</h4>
			</center>
		</td>
	  </tr>
	  <tr>
	  	<td><center><b>DATA KUANTITAS</b></center></td>
	  </tr>
	  <tr>
	  	<td>
	  		<table border="0" width="100%">
	  			<tr>
	  				<td width="40%">&nbsp</td>
	  				<td width="15%" class="garis"><center><b>Bahan</b></center></td>
	  				<td  >&nbsp</td>
	  				<td width="15%" class="garis"><center><b>Tenaga Kerja</b></center></td>
	  				<td  >&nbsp</td>
	  				<td width="15%" class="garis"><center><b>Overhead</b></center></td>
	  				<td  >&nbsp</td>
	  				<td width="15%" class="garis"><center><b>Kuantitas</b></center></td>
	  				<td  >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >Unit Dalam Proses, Persediaan Awal</td>
	  				<td ><center><?php echo $list->pbbprosesawal.' %'?></center></td>
	  				<td >&nbsp</td>
	  				<td ><center><?php echo $list->ptklprosesawal.' %'?></center></td>
	  				<td >&nbsp</td>
	  				<td ><center><?php echo $list->pbopprosesawal.' %'?></center></td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($list->jumlprosesawal).' '.$list->satuan?></td>
	  				<td  >&nbsp</td>	
	  			</tr>
	  			<tr>
	  				<td >Unit masuk Proses bulan ini</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				
	  				<td align="right" class="garis"><?php echo number_format($list->jumlproduksi).' '.$list->satuan?></td>	
	  				<td  >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td align="right" class="garis"><?php echo number_format($list->jumlproduksi+$list->jumlprosesawal).' '.$list->satuan?></td>
	  				<td  >&nbsp</td>	
	  			</tr>

	  			<tr>
	  				<td >Unit Dalam Proses, Persediaan Awal</td>
	  				<td ><center><?php echo $list->pbbprosesakhir.' %'?></center></td>
	  				<td  >&nbsp</td>
	  				<td ><center><?php echo $list->ptklprosesakhir.' %'?></center></td>
	  				<td  >&nbsp</td>
	  				<td ><center><?php echo $list->pbopprosesakhir.' %'?></center></td>
	  				<td  >&nbsp</td>
	  				<td align="right"><?php echo number_format($list->jumlprosesawal).' '.$list->satuan?></td>	
	  				<td  >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >Unit masuk Proses bulan ini</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td align="right" class="garis"><?php echo number_format($list->jumlproduksi).' '.$list->satuan?></td>
	  				<td  >&nbsp</td>	
	  			</tr>
	  			<tr>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td  >&nbsp</td>
	  				<td align="right" class="garis"><?php echo number_format($list->jumlproduksi+$list->jumlprosesawal).' '.$list->satuan?></td>	
	  				<td  >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td colspan="9">&nbsp</td>
	  			</tr>
	  		</table>
	  	</td>
	  </tr>
	  <tr>
	  	<td><center><b>BIAYA YANG HARUS DIPERTANGGUNGJAWABKAN</b></center></td>	
	  </tr>
	  <tr>
	  	<td>
	  		<table border="0" width="100%">
	  			<tr>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td width="40%">&nbsp</td>
	  				<td >&nbsp</td>
	  				<td width="15%" class="garis"><center><b>Jumlah Biaya</b></center></td>
	  				<td  >&nbsp</td>
	  				<td  ><b>+</b></td>
	  				<td  >&nbsp</td>
	  				<td width="15%" class="garis"><center><b>Jumlah Unit Ekivalen</b></center></td>
	  				<td  >&nbsp</td>
	  				<td  ><b>=</b></td>
	  				<td  >&nbsp</td>
	  				<td width="15%" class="garis"><center><b>Biaya Per Unit</b></center></td>
	  				<td  >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td colspan="3">Biaya Unit Dalam proses, persediaan awal</td>
	  				
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >&nbsp</td>
	  				<td colspan="2">Bahan</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($list->bbbprosesawal)?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >&nbsp</td>
	  				<td colspan="2">Tenaga Kerja</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($list->btklprosesawal)?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >&nbsp</td>
	  				<td colspan="2">Overhead Pabrik</td>
	  				<td >&nbsp</td>
	  				<td align="right" class="garis"><?php echo number_format($list->bbopprosesawal)?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >Jumlah Biaya Persediaan Awal</td>
	  				<td >&nbsp</td>
	  				<td align="right" class="garis"><?php echo number_format($list->bbbprosesawal+$list->btklprosesawal+$list->bbopprosesawal)?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  			</tr>


	  			<tr>
	  				<td colspan="3">Biaya ditambahkan selama bulan ini</td>
	  				
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >&nbsp</td>
	  				<td colspan="2">Bahan</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($list->bbbtambahan)?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($hasilmodel['unitekivalenbahan']).' '.$list->satuan?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($hasilmodel['biayabahanperunit'],2,',','')?></td>
	  				<td >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >&nbsp</td>
	  				<td colspan="2">Tenaga Kerja</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($list->btkltambahan)?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($hasilmodel['unitekivalentenagakerja']).' '.$list->satuan?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($hasilmodel['biayatenagakerjaperunit'],2,',','')?></td>
	  				<td >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >&nbsp</td>
	  				<td colspan="2">Overhead Pabrik</td>
	  				<td >&nbsp</td>
	  				<td align="right" class="garis"><?php echo number_format($list->bboptambahan)?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($hasilmodel['unitekivalenoverhead']).' '.$list->satuan?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td align="right"><?php echo number_format($hasilmodel['biayaoverheadperunit'],2,',','')?></td>
	  				<td >&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >Jumlah Biaya Ditambahkan</td>
	  				<td >&nbsp</td>
	  				<td align="right" class="garis"><?php echo number_format($list->bboptambahan+$list->btkltambahan+$list->bbbtambahan)?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp   </td>
	  				<td class="garis">&nbsp</td>
	  			</tr>
	  			<tr>
	  				<td colspan="3">Jumlah Biaya Yang Harus dipertanggungjawabkan</td>
	  				
	  				<td >&nbsp</td>
	  				<td align="right" class="garis"><?php echo number_format($list->bboptambahan+$list->btkltambahan+$list->bbbtambahan+$list->bbbprosesawal+$list->btklprosesawal+$list->bbopprosesawal)?></td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				<td >&nbsp</td>
	  				
	  				<td >&nbsp</td>
	  				<td class="garis" align="right"><?php echo number_format($hasilmodel['jumlahbiayaperunit'],2,',','')?></td>
	  			</tr>
	  			<tr>
	  				<td colspan="13">&nbsp</td>
	  			</tr>
	  		</table>
	  	</td>
	  </tr>
	  <tr>
	  	<td><center><b>PERTANGGUNGJAWABAN BIAYA</b></center></td>	
	  </tr>
	  <tr>
	  	<td>
	  	  <table border="0" width="100%">
	  	    <tr>
	  	      <td>&nbsp</td>
	  	      <td>&nbsp&nbsp</td>
	  	      <td width="30%">&nbsp</td>
	  	      <td width="30%">&nbsp</td>
	  	      <td>&nbsp</td>
	  	      <td width="10%">&nbsp</td>
	  	      <td>&nbsp</td>
	  	      <td width="10%">&nbsp</td>
	  	      <td>&nbsp</td>
	  	    </tr>
	  	    <tr>
	  	      <td colspan="3">Biaya Ditransfer ke persediaan barang jadi</td>
	  	      
	  	      <td ><?php echo '('.number_format($list->jumlselesai).' '.$list->satuan. ' x '.number_format($hasilmodel['jumlahbiayaperunit'],2,',','').')'?></td>
	  	      <td>&nbsp</td>
	  	      <td >&nbsp</td>
	  	      <td>&nbsp</td>
	  	      <td align="right"><?php echo number_format($list->jumlselesai*$hasilmodel['jumlahbiayaperunit'])?></td>
	  	      <td>&nbsp</td>
	  	      
	  	    </tr>
	  	    <tr>
	  	      <td colspan="3">Biaya unit dalam proses persediaan akhir</td>
	  	      <td>&nbsp</td>
	  	      <td >&nbsp</td>
	  	      <td>&nbsp</td>
	  	      <td >&nbsp</td>
	  	      <td>&nbsp</td>
	  	      <td >&nbsp</td>
	  	      
	  	    </tr>
	  	    
	  	    <tr>
	  	      <td>&nbsp</td>
	  	      <td >Bahan</td>
	  	      <td>&nbsp</td>
	  	      <td ><?php echo '('.number_format($list->jumlprosesakhir).' '.$list->satuan. ' x '.number_format($list->pbbprosesakhir).' % x '.number_format($hasilmodel['biayabahanperunit'],2,',','').')'?></td>
	  	      
	  	      <td colspan="2" align="right"><?php echo number_format($hasilmodel['biayabahanakhir'])?></td>
	  	      <td>&nbsp</td>
	  	      <td >&nbsp</td>
	  	      <td>&nbsp</td>
	  	    </tr>
	  	    <tr>
	  	      <td>&nbsp</td>
	  	      <td >Tenaga Kerja</td>
	  	      <td>&nbsp</td>
	  	     <td ><?php echo '('.number_format($list->jumlprosesakhir).' '.$list->satuan. ' x '.number_format($list->ptklprosesakhir).' % x '.number_format($hasilmodel['biayatenagakerjaperunit'],2,',','').')'?></td>
	  	     
	  	      <td colspan="2" align="right"><?php echo number_format($hasilmodel['biayatenagakerjaakhir'])?></td>
	  	      <td>&nbsp</td>
	  	      <td >&nbsp</td>
	  	      <td>&nbsp</td>
	  	    </tr>
	  	    <tr>
	  	      <td>&nbsp</td>
	  	      <td >Overhead</td>
	  	      <td>&nbsp</td>
	  	      <td ><?php echo '('.number_format($list->jumlprosesakhir).' '.$list->satuan. ' x '.number_format($list->pbopprosesakhir).' % x '.number_format($hasilmodel['biayaoverheadperunit'],2,',','').')'?></td>
	  	      
	  	      <td colspan="2" class="garis" align="right"><?php echo number_format($hasilmodel['biayaoverakhir'])?></td>
	  	      <td>&nbsp</td>
	  	      <td class="garis" align="right"><?php echo number_format($hasilmodel['biayaoverakhir']+$hasilmodel['biayatenagakerjaakhir']+$hasilmodel['biayabahanakhir'])?></td>
	  	      <td>&nbsp</td>
	  	    </tr>
	  	    <tr>
	  	      <td colspan="3">Jumlah Biaya Yang Dipertanggungjawabkan</td>
	  	      
	  	      <td >&nbsp</td>
	  	      
	  	      <td colspan="2"></td>
	  	      <td>&nbsp</td>
	  	      <td class="garis" align="right"><?php echo number_format($hasilmodel['jumlahbiayaakhir'])?></td>
	  	      <td>&nbsp</td>
	  	    </tr>
	  	    <tr>
	  	      <td colspan="9">&nbsp</td>
	  	      
	  	    </tr>
	  	  </table>	
	  	</td>
	  </tr>

	</table>
	
	
</body>
</html>

