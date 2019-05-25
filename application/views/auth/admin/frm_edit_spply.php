<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>
<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Edit Supplier</h3> 
    </div> 
    <div class="panel-body">
	     <form action="<?php echo site_url('dashboard/pros_edit_spply'.(isset($supplier) && isset($supplier) && !!$supplier['id'] ? '/'.$supplier['id'] : '')) ?>" method="POST" enctype='multipart/form-data'>

             <div class="form-group">
                 <label for="nama">Nama</label>
                 <br>
                 <input type="text" class="form-control" name="nama" value="<?= $supplier['nama']; ?>">
             </div>

             <div class="form-group">
                 <label for="alamat">Alamat</label>
                 <br>
                 <input type="text" class="form-control" name="alamat" value="<?= $supplier['alamat']; ?>">
             </div>

             <div class="form-group">
                 <label for="telp">Telp</label>
                 <br>
                 <input type="text" class="form-control" name="telp" value="<?= $supplier['telp']; ?>">
             </div>

             <div class="form-group">
                 <input type="submit" value="Update" class="btn-primary">
                 <a class="btn-edit" href="<?php echo site_url('dashboard/man_spply') ?>">Batal</a>
             </div>
         </form>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
