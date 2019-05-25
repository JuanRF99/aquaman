<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-user-plus"></i> &nbsp;Edit Jenis Laundry</h3> 
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
    <form action="<?php echo site_url('dashboard/edit_jl'.(isset($jenis) && isset($jenis) && !!$jenis['id'] ? '/'.$jenis['id'] : '')) ?>" method="POST">

            <div class="form-group">
                 <label for="jenis">Jenis Laundry</label>
                 <br>
                 <input type="text" class="form-control" name="jenis" value="<?= $jenis['jenis']; ?>" required>
             </div>

             <div class="form-group">
                 <label for="harga">Harga/Kg</label>
                 <br>
                 <input type="number" class="form-control" name="harga" value="<?= $jenis['harga']; ?>" required>
             </div>

             <div class="form-group">
                 <input type="submit" value="Tambah" name="submit" class="btn-primary">
                 <a class="btn-edit" href="<?php echo site_url('dashboard/jl') ?>">Batal</a>
             </div>
         </form>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
