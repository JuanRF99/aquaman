<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-user-plus"></i> &nbsp;Tambah Supplier</h3> 
    </div> 
    <div class="panel-body">
    <?php if($this->session->flashdata('message')) { ?>
            <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
	        <p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
            </div>
    <?php } ?>    
    <form action="<?php echo site_url('dashboard/add_spply') ?>" method="POST">

            <div class="form-group">
                 <label for="nama">Nama</label>
                 <br>
                 <input type="text" class="form-control" placeholder="Nama Supplier" name="nama" required>
             </div>

             <div class="form-group">
                 <label for="alamat">Alamat</label>
                 <br>
                 <input type="text" class="form-control" placeholder="Alamat Supplier" name="alamat" required>
             </div>

             <div class="form-group">
                 <label for="telp">Telp</label>
                 <br>
                 <input type="text" class="form-control" maxlength="13" placeholder="No Telp" name="telp" required>
             </div>


             <div class="form-group">
                 <input type="submit" value="Tambah" name="submit" class="btn-primary">
             </div>
         </form>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
