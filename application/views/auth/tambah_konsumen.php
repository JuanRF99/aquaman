<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-user-plus"></i> &nbsp;Tambah Konsumen</h3> 
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
    <form action="<?php echo site_url('dashboard/add_cust') ?>" method="POST">
             <div class="form-group">
                 <label for="konsumen">Nama</label>
                 <br>
                 <input type="text" class="form-control" placeholder="Nama Konsumen" name="nm_konsumen" required>
             </div>

             <div class="form-group">
                 <label for="alamat">Alamat</label>
                 <br>
                 <input type="text" class="form-control" placeholder="Alamat Konsumen" name="alamat" required>
             </div>

             <div class="form-group">
                 <label for="telp">Telp</label>
                 <br>
                 <input type="text" class="form-control" maxlength="13" placeholder="No Telp" name="telp" required>
             </div>

             <div class="form-group">
                 <input type="submit" value="Tambah" class="btn-primary">
                 <a class="btn-edit" href="<?php echo site_url('dashboard/barang') ?>">Batal</a>
             </div>
         </form>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
