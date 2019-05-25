<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>
<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class='fa fa-clock-o'></i> Riwayat Transaksi</h3> 
    </div> 
    <div class="panel-body">
	<br> 
          <table id="tabeldata" class="table datatable display">
			<thead>
				<tr>
					<th> No</th>
					<th> Konsumen</th>
					<th> Jenis</th>
					<th> Tarif</th>
					<th> Berat</th>
					<th> Tanggal Transaksi</th>
					<th> Tanggal Ambil</th>

					<th> Kwitansi</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no=1; 
				foreach ($trans as $r)  {?>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $r['konsumen'];?></td>
                        <td><?php echo $r['jenis'];?></td>
						<td><?php echo'Rp.' . number_format( $r['tarif'], 0 , '' , '.' ) . ',-'?></td>
						<td><?php echo $r['berat']?> Kg</td>
						<td><?php echo $r['tgl_transaksi'];?></td>
						<td><?php echo $r['tgl_ambil'];?></td>
						<td><a href="<?php echo site_url('/dashboard/kwitansi/'.$r['id']) ?>" target="_blank">Lihat Kwitansi</a></td>	
					</tr>
					
				<?php $no++; }?>
			</tbody>

			</table>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
