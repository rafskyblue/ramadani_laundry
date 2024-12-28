<div class="card">
   <div class="card-title card-flex">
      <div class="card-col">
         <h2>Daftar Transaksi - Cuci Satuan</h2>	
      </div>
   </div>
   
   <div class="card-body">
      <div class="tabel-kontainer">
         <table class="tabel-transaksi">
            <thead>
               <tr>
                  <th class="sticky">No</th>
                  <th class="sticky">No. Order</th>
                  <th class="sticky">Nama</th>
                  <th class="sticky">Jenis Paket</th>
                  <th class="sticky">Jumlah</th>
                  <th class="sticky">Total</th>
                  <th class="sticky">Status</th>
                  <th class="sticky" style="text-align: center;">Action</th>
               </tr>
            </thead>

            <tbody>
            <?php if (!empty($query_cs)) : ?>  
                  <?php $i = 1; ?>
                  <?php foreach($query_cs as $data_cs) : ?>
                     <tr>
                        <td><?=$i?></td>
                        <td><?=$data_cs['or_number']?></td>
                        <td style="max-width: 150px; overflow:hidden;"><?=$data_cs['pelanggan']?></td>
                        <td><?=$data_cs['j_paket']?></td>
                        <td><?=$data_cs['jml_pcs'] . " (Pcs)"?></td>
                        <td><?="Rp. " . $data_cs['total']?></td>
                        <td><span class="success"><?=$data_cs['status']?></span></td>
                        <td align="center">
                           <a href="<?=url('riwayat_transaksi/riwayat_cs/detail_cs.php')?>?id_cs=<?=$data_cs['id_cs']?>" class="btn btn-edit">Detail</a><br/>
                        </td>
                     </tr>
                     <?php $i++?>
                  <?php endforeach ?>
                  
                  <?php else : ?>
                     <tr>
                        <td colspan="10" class="txt-center">Data tidak tersedia</td>
                     </tr>
               <?php endif ?>
            </tbody>
         </table>
      </div>
   </div>
</div>