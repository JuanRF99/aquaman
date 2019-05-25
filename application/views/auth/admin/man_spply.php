<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>
<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Data Karyawan</h3> 
    </div> 
    <div class="panel-body">
	<br> 
          <table id="tabeldata" class="table datatable display">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no=1; 
				foreach ($supplier as $spply)  {?>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $spply['nama'] ?></td>
						<td><?php echo $spply['alamat'] ?></td>
						<td><?php echo $spply['telp'] ?></td>		
						<td><a class="btn-edit" href="<?php echo site_url('/dashboard/frm_edit_spply/'.$spply['id']) ?>">Edit</a> | <a message="Hapus data id <?php echo $spply['id'] ?>" class="btn-delete" href="<?php echo site_url('/dashboard/delete_spply/'.$spply['id']) ?>">Hapus</a></td>
					</tr>
					
				<?php $no++; }?>
			</tbody>

			</table>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
