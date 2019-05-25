<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Data Konsumen</h3> 
    </div> 
    <div class="panel-body">
          <table id="tabeldata" class="table datatable display">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
                    <th>Telp</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no=1;
				foreach ($kons as $konsumen)  {?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $konsumen['nama'] ?></td>
                        <td><?php echo $konsumen['alamat'] ?></td>
                        <td><?php echo $konsumen['telp'] ?></td>					
                    </tr>
				<?php $no++; }?>
			</tbody>

			</table>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
