
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
<title>Kertas Kerja</title>
</head>
<body onload="window.print()" background="<?=base_url()?>/assets/bgh.jpg" >
   
   <table border="1px" width="100%">
   	 <tr>
   	 	<td colspan="7">
   	 		<center>
				<h4>PT ADI KARYA GEMILANG<br/>Laporan Produksi<br>No Produksi : <br> </h4>
			</center>
   	 	</td>
   	 </tr>
     <tr>
       <td colspan="7">&nbsp</td>
     </tr>
    
    <tr>
       <td colspan="7"><strong>Data Biaya Bahan Baku</strong></td>
    </tr>
    <tr>
       <td colspan="7">
         <table border="1px" width="100%">
           <tr>
            <th align="center">No</th>
            <th>Kode Bahan Baku</th>
            <th>Nama Bahan Baku</th>
            <th>Jenis Bahan Baku</th>
            <th>Biaya Satuan</th>
            
           </tr>
           <?php
           $totalbb=0;
           $no=1;
           foreach($bb as $b){
            $totalbb=$totalbb+$b->jumlahbiaya;
            if($b->statusbb==0){
              $ket="Bahan Baku Utama";
            }else{
              $ket="Bahan Baku Tambahan";
            }
           ?>
           <tr>
            <td><?=$no++?></td>
            <td><?=$b->idbb?></td>
            <td><?=$b->namabb?></td>
            <td><?=$ket?></td>
            <td><?=number_format($b->jumlahbiaya)?></td>
            
           </tr>
           <?php 
           }

           ?>
           <tr>
             <td colspan="4">
               Total Bahan Baku
             </td>
             <td>
               <?=number_format($totalbb)?>
             </td>
           </tr>
         </table>
       </td>
    </tr>
     <tr>
       <td colspan="7">&nbsp</td>
    </tr>
    <tr>
       <td colspan="7"><strong>Data Biaya Tenaga Kerja Langsung</strong></td>
    </tr>
    <tr>
       <td colspan="7">
         <table border="1px" width="100%">
           <tr>
            <th align="center">No</th>
            <th>Kode Tenaga Kerja Langsung</th>
            <th>Nama Tenaga Kerja Langsung</th>
            <th>Jenis Tenaga Kerja Langsung</th>
            <th>Biaya Satuan</th>
            
           </tr>
           <?php
           $totaltkl=0;
           $no=1;
           foreach($btk as $b){
            $totaltkl=$totaltkl+$b->jumlahtkl;
            if($b->statustkl==0){
              $ket="TKL Utama";
            }else{
              $ket="TKL Tambahan";
            }
           ?>
           <tr>
            <td><?=$no++?></td>
            <td><?=$b->idtkl?></td>
            <td><?=$b->namatkl?></td>
            <td><?=$ket?></td>
            <td><?=number_format($b->jumlahtkl)?></td>
            
           </tr>
           <?php 
           }

           ?>
           <tr>
             <td colspan="4">
               Total Tenaga Kerja Langsung
             </td>
             <td>
               <?=number_format($totaltkl)?>
             </td>
           </tr>
         </table>
       </td>
    </tr>
    <tr>
       <td colspan="7">&nbsp</td>
    </tr>
    <tr>
       <td colspan="7"><strong>Data Biaya Overhead Pabrik</strong></td>
    </tr>
    <tr>
       <td colspan="7">
         <table border="1px" width="100%">
           <tr>
            <th align="center">No</th>
            <th>Kode Overhead Pabrik</th>
            <th>Nama Overhead Pabrik</th>
            <th>Jenis Overhead Pabrik</th>
            <th>Biaya Satuan</th>
           
           </tr>
           <?php
           $totalop=0;
           $no=1;
           foreach($bop as $b){
            $totalop=$totalop+$b->jumlahbop;
            if($b->statusbop==0){
              $ket="BOP Utama";
            }else{
              $ket="BOP Tambahan";
            }
           ?>
           <tr>
            <td><?=$no++?></td>
            <td><?=$b->idop?></td>
            <td><?=$b->namaop?></td>
            <td><?=$ket?></td>
            <td><?=number_format($b->jumlahbop)?></td>
            
           </tr>
           <?php 
           }

           ?>
           <tr>
             <td colspan="4">
               Total Overhead Pabrik
             </td>
             <td>
               <?=number_format($totalop)?>
             </td>
           </tr>
         </table>
       </td>
    </tr>
     <tr>
       <td colspan="7">&nbsp</td>
    </tr>
    <tr>
       <td colspan="6"><strong>Total Biaya</strong></td>
       <td><?=number_format($totalbb+$totaltkl+$totalop)?></td>
    </tr>
    <tr>
       <td colspan="6"><strong>Jumlah Produksi</strong></td>
       <td><?=number_format($produksi->jumlproduksi)?></td>
    </tr>

    <tr>
       <td colspan="6"><strong>Harga Satuan Produk</strong></td>
       <td><?php if($produksi->jumlproduksi!=0){number_format(($totalbb+$totaltkl+$totalop)/$produksi->jumlproduksi,2);}else{0;}?></td>
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

