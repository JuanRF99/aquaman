<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-plus"></i> Tambah Barang</h3> 
    </div> 
    <div class="panel-body">
        <form action="<?php echo site_url('dashboard/proses_tambah_brg') ?>" method="POST" enctype='multipart/form-data'>
            <div class="form-group">
                <label for="supplier">Suppplier</label>
                <select name="nama_supplier" class="form-control">
                    <option value="">...</option>
                    <?php foreach($supplies as $supplier) {?>
                    <option value="<?php echo $supplier['nama']; ?>"><?php echo $supplier['nama']; ?></option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="namabarang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_brg" placeholder="Masukkan Nama Barang" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah Barang</label>
                <br>
                <input type="number" name="stok">
            </div>

            <div class="form-group">
            <input class="btn-success" type="submit" name="btn-submit" value="Submit" /> | <a class="btn-edit" href="<?php echo site_url('dashboard/barang') ?>">batal</a>
            </div>
        </form>    
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
