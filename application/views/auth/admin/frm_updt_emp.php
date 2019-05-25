<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>
<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Edit Karyawan</h3> 
    </div> 
    <div class="panel-body">
	     <form action="<?php echo site_url('dashboard/pros_updt_emp'.(isset($pengguna) && isset($pengguna) && !!$pengguna['id_user'] ? '/'.$pengguna['id_user'] : '')) ?>" method="POST" enctype='multipart/form-data'>
             <div class="form-group">
                 <label for="nik">NIK</label>
                 <br>
                 <input type="text" class="form-control" name="nik" value="<?= $pengguna['nik'];?>" disabled>
             </div>

             <div class="form-group">
                 <label for="nama">Nama</label>
                 <br>
                 <input type="text" class="form-control" name="nama_user" value="<?= $pengguna['nama_user']; ?>">
             </div>

             <div class="form-group">
                 <label for="username">Username</label>
                 <br>
                 <input type="text" class="form-control" name="username" value="<?= $pengguna['username']; ?>" disabled>
             </div>

             <div class="form-group">
                 <label for="alamat">Alamat</label>
                 <br>
                 <input type="text" class="form-control" name="alamat" value="<?= $pengguna['alamat']; ?>">
             </div>

             <div class="form-group">
                 <label for="telp">Telp</label>
                 <br>
                 <input type="text" class="form-control" name="telp" value="<?= $pengguna['telp']; ?>">
             </div>

             <div class="form-group">
                 <label for="gender">Gender</label>
                 <select name="gender" class="form-control">
                     <option value="Laki-Laki">Laki - Laki</option>
                     <option value="Perempuan">Perempuan</option>
                 </select>
             </div>

             <div class="form-group">
                 <input type="submit" value="Update" class="btn-primary">
                 <a class="btn-edit" href="<?php echo site_url('dashboard/barang') ?>">Batal</a>
             </div>
         </form>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
