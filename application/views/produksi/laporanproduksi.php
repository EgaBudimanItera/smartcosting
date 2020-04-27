
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table {
    border-collapse: collapse;
}
table.tabel{
    border-collapse: collapse;
}
td.garis {
  border-bottom: 1pt solid black;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Produksi Barang</title>
</head>
<body onload="window.print()" background="<?=base_url()?>/assets/bgh.jpg" >
   <?php
        $bulan=$kriteria['bulan'];
        if($bulan=="01"){
          $namabulan="Januari";
        }else if($bulan=="02"){
          $namabulan="Februari";
        }else if($bulan=="03"){
          $namabulan="Maret";
        }else if($bulan=="04"){
          $namabulan="April";
        }else if($bulan=="05"){
          $namabulan="Mei";
        }else if($bulan=="06"){
          $namabulan="Juni";
        }else if($bulan=="07"){
          $namabulan="Juli";
        }else if($bulan=="08"){
          $namabulan="Agustus";
        }else if($bulan=="09"){
          $namabulan="September";
        }else if($bulan=="10"){
          $namabulan="Oktober";
        }else if($bulan=="11"){
          $namabulan="November";
        }else if($bulan=="12"){
          $namabulan="Desember";
        }
      ?>
   <table border="1px" width="100%">
   	 <tr>
   	 	<td colspan="7">
   	 		<center>
				<h4>PT ADI KARYA GEMILANG<br/>Laporan Produksi<br>Bulan <?=$namabulan?> <?=$kriteria['tahun']?><br> (Dalam Rupiah)</h4>
			</center>
   	 	</td>
   	 </tr>
     <tr>
       <td colspan="7">&nbsp</td>
     </tr>
     <tr>
      <th>No</th>
      <th>ID Produksi</th>
      <th>Tanggal</th>
      <th>Nama Produk</th>
      <th>Jumlah Selesai</th>
      <th>Harga Per Unit</th>
      <th>Subtotal</th>
    </tr>	
    <?php
      $no=1;
      $total=0;
      foreach($list as $l){
        $total=$total+($l->jumlselesai*$l->biayaunit);
    ?>
    <tr>
      <td align="center"><?=$no++?></td>
      <td><?=$l->idproduksi?></td>
      <td><?=$l->tglmulai?></td>
      <td><?=$l->namaproduk?></td>
      <td align="right"><?php echo number_format($l->jumlselesai)?></td>
      <td align="right"><?php echo number_format($l->biayaunit,2,',','')?></td>
      <td align="right"><?php echo number_format($l->biayaunit*$l->jumlselesai)?></td>
    </tr>
    <?php
      }
    ?>
    <tr>
      <td colspan="6" align="left">Total</td>
      <td align="right"><?php echo number_format($total)?></td>
    </tr>
    <tr>
      <td colspan="7">&nbsp</td>
    </tr>
    <tr>
      
      <td colspan="7">
        <table border="0" width="100%">
          <tr>
            <td width="50%">&nbsp</td>
            <td width="50%" align="center">Bandarlampung,<?=date('d M Y')?></td>
          </tr>
          <tr>
            <td width="50%">&nbsp</td>
            <td width="50%" align="center">Mengetahui</td>
          </tr>
          <tr>
            <td width="50%">&nbsp</td>
            <td width="50%" align="center">Pimpinan</td>
          </tr>
          <tr>
            <td width="50%">&nbsp</td>
            <td width="50%" align="center">&nbsp</td>
          </tr>
          <tr>
            <td width="50%">&nbsp</td>
            <td width="50%" align="center">&nbsp</td>
          </tr>
          <tr>
            <td width="50%">&nbsp</td>
            <td width="50%" align="center">&nbsp</td>
          </tr>
          <tr>
            <td width="50%">&nbsp</td>
            <td width="50%" align="center">&nbsp</td>
          </tr>
          <tr>
            <td width="50%">&nbsp</td>
            <td width="50%" align="center">(Nama Pimpinan)</td>
          </tr>
        </table>
      </td>
    </tr>
    
   </table>	
</body>
</html>

