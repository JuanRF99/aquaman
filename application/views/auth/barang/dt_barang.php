<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>
<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Data Barang</h3> 
    </div> 
    <div class="panel-body">
	<p><a href="<?php echo site_url('/dashboard/tambah_brg'); ?>" class="btns btn-success" style="margin-left:-5px; "><i class="fas fa-plus"></i> Tambah</a></p>
        <br> 
          <table id="tabeldata" class="table datatable display">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Stok</th>
                    <th>Tanggal Update Stok</th>
                    <th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no=1; 
				foreach ($barangs as $barang)  {?>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $barang['nama_brg'] ?></td>
                        <td><?php echo $barang['stok'] ?></td>
                        <td><?php echo $barang['tgl_update'] ?></td>
						<td><a class="btn-edit" href="<?php echo site_url('/dashboard/frm_updt_brg/'.$barang['id']) ?>">Update Stok</a> | <a class="btn-edit" href="<?php echo site_url('/dashboard/pakai_barang/'.$barang['id']) ?>">Pakai</a>  | <a message="Hapus data id <?php echo $barang['id'] ?>" class="btn-delete" href="<?php echo site_url('/dashboard/delete_barang/'.$barang['id']) ?>">Hapus</a></td>
					</tr>
					
				<?php $no++; }?>
			</tbody>

			</table>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
