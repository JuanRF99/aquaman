<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-user-plus"></i> &nbsp;Tambah Karyawan</h3> 
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
    <form action="<?php echo site_url('dashboard/add_emp') ?>" method="POST" enctype='multipart/form-data'>

             <div class="form-group">
                 <label for="nik">NIK</label>
                 <br>
                 <input type="text" class="form-control" placeholder="Nomo Induk Karyawan" name="nik" required>
             </div>

             <div class="form-group">
                 <label for="nama">Nama</label>
                 <br>
                 <input type="text" class="form-control" placeholder="Nama Karyawan" name="nama" required>
             </div>

             <div class="form-group">
                 <label for="alamat">Alamat</label>
                 <br>
                 <input type="text" class="form-control" placeholder="Alamat Karyawan" name="alamat" required>
             </div>

             <div class="form-group">
                 <label for="telp">Telp</label>
                 <br>
                 <input type="text" class="form-control" maxlength="13" placeholder="No Telp" name="telp" required>
             </div>

             <div class="form-group">
                 <label for="gender">Gender</label>
                 <select name="gender" class="form-control">
                     <option value="Laki-Laki">Laki - Laki</option>
                     <option value="Perempuan">Perempuan</option>
                 </select>
             </div>

             <div class="form-group">
                 <label for="username">Username</label>
                 <br>
                 <input type="text" class="form-control" placeholder="Masukkan Username" name="username" required>
             </div>

             <div class="form-group">
                 <label for="password">Password</label>
                 <br>
                 <input type="password" class="form-control" placeholder="Password" name="password" required>
             </div>

             <div class="form-group">
                 <input type="submit" value="Tambah" name="submit" class="btn-primary">
             </div>
         </form>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
