<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Data Pembelian</h3> 
    </div> 
    <div class="panel-body">
          <table id="tabeldata" class="table datatable display">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Supplier</th>
                    <th>Tanggal Pembelian</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no=1; 
				foreach ($sells as $beli)  {?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $beli['barang'] ?></td>
						<td><?php echo $beli['totalq'] ?></td>
                        <td><?php echo $beli['totalh'] ?></td>
						<td><?php echo $beli['supplier'] ?></td>
						<td><?php echo $beli['tgl'] ?></td>							
                    </tr>
				<?php $no++; }?>
			</tbody>

			</table>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
