<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Jenis Laundry</h3> 
    </div> 
    <div class="panel-body">
        <p><a href="<?php echo site_url('/dashboard/add_jl'); ?>" class="btns btn-success" style="margin-left:-5px; "><i class="fas fa-plus"></i> Tambah</a></p>
        <br>  
        <table id="tabeldata" class="table datatable display">
			<thead>
				<tr>
					<th>Jenis</th>
					<th>Harga / Kg</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($types as $jenis)  {?>
					<tr>
						<td><?php echo $jenis['jenis'] ?></td>
                        <td><?php echo $jenis['harga'] ?></td>
                        <td><a href="<?php echo site_url('/dashboard/edit_jl/'.$jenis['id']) ?>" class="btn-edit ">Edit</a> | <a message="Hapus data id <?php echo $jenis['id'] ?>" class="btn-delete" href="<?php echo site_url('/dashboard/delete_jl/'.$jenis['id']) ?>">Hapus</a></td>					
                    </tr>
				<?php }?>
			</tbody>

			</table>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
