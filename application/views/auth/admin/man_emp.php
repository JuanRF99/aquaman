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
					<th>NIK</th>
					<th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Gender</th>
                    <th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no=1; 
				foreach ($pengguna as $kyw)  {?>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $kyw['nik'] ?></td>
						<td><?php echo $kyw['nama_user'] ?></td>
                        <td><?php echo $kyw['username'] ?></td>
						<td><?php echo $kyw['alamat'] ?></td>
						<td><?php echo $kyw['telp'] ?></td>
						<td><?php echo $kyw['gender'] ?></td>		
						<td><a class="btn-edit" href="<?php echo site_url('/dashboard/frm_updt_emp/'.$kyw['id_user']) ?>">Update</a> | <a message="Hapus data id <?php echo $kyw['id_user'] ?>" class="btn-delete" href="<?php echo site_url('/dashboard/delete_emp/'.$kyw['id_user']) ?>">Hapus</a></td>
					</tr>
					
				<?php $no++; }?>
			</tbody>

			</table>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
