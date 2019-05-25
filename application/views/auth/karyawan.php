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
					<th>NIK</th>
					<th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Gender</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no=1; 
				foreach ($pengguna as $users)  {?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $users['nik'] ?></td>
						<td><?php echo $users['nama_user'] ?></td>
                        <td><?php echo $users['username'] ?></td>
						<td><?php echo $users['alamat'] ?></td>
						<td><?php echo $users['telp'] ?></td>
						<td><?php echo $users['gender'] ?></td>							
                    </tr>
				<?php $no++; }?>
			</tbody>

			</table>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
