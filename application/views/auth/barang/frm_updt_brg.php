<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>
<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Tambah Stok Barang</h3> 
    </div> 
    <div class="panel-body">
	     <form action="<?php echo site_url('dashboard/proses_update_brg'.(isset($barang) && isset($barang) && !!$barang['id'] ? '/'.$barang['id'] : '')) ?>" method="POST" enctype='multipart/form-data'>
             <div class="form-group">
                 <label for="supplier">Supplier</label>
                 <br>
                 <input type="text" class="form-control" name="nm_sup" value="<?= $supplier['nama'];?>" readonly>
             </div>

             <div class="form-group">
                 <label for="nama_brg">Nama Barang</label>
                 <br>
                 <input type="text" class="form-control" name="nm_brg" value="<?= $barang['nama_brg']; ?>" readonly>
             </div>

             <div class="form-group">
                 <label for="harga">Harga</label>
                 <br>
                 <input type="text" class="form-control" name="hrg" value="<?= $barang['harga']; ?>" readonly>
             </div>

             <div class="form-group">
                 <label for="jumlah">Jumlah</label>
                 <br>
                 <input type="text" class="form-control" name="stok" value="<?= $barang['stok']; ?>">
             </div>

             <div class="form-group">
                 <input type="submit" value="Update" class="btn-primary">
                 <a class="btn-edit" href="<?php echo site_url('dashboard/barang') ?>">Batal</a>
             </div>
         </form>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
