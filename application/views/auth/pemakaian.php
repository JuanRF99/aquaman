<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Data Karyawan</h3> 
    </div> 
    <div class="panel-body">
          <table id="tabeldata" class="table datatable display">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
                    <th>Tanggal Pakai</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no=1; 
				foreach ($uses as $pakai)  {?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $pakai['barang'] ?></td>
						<td><?php echo $pakai['jumlah'] ?></td>
                        <td><?php echo $pakai['tgl_pakai'] ?></td>					
                    </tr>
				<?php $no++; }?>
			</tbody>

			</table>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
