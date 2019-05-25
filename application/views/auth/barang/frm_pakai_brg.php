<script type="text/javascript">
function startCalculate(){
interval=setInterval("Calculate()",10);
}

function Calculate(){
var a=document.form1.stok.value;
var b=document.form1.jumlah.value;
document.form1.sisa.value=(a-b);
}

function stopCalc(){
clearInterval(interval);
}

</script>
<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>
<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-list"></i> Pakai Barang</h3> 
    </div> 
    <div class="panel-body">
	     <form name="form1" action="<?php echo site_url('dashboard/pros_pakai_brg'.(isset($barang) && isset($barang) && !!$barang['id'] ? '/'.$barang['id'] : '')) ?>" method="POST">

             <div class="form-group">
                 <label for="nama_brg">Nama Barang</label>
                 <br>
                 <input type="text" class="form-control" name="nama_brg" value="<?= $barang['nama_brg']; ?>" readonly>
             </div>

             <div class="form-group">
                 <label for="stok">Stok</label>
                 <br>
                 <input type="text" class="form-control" name="stok" value="<?= $barang['stok']; ?>" disabled>
             </div>

             <div class="form-group">
                 <label for="jumlah">Jumlah Barang</label>
                 <br>
                 <input onchange='startCalculate()' type="number" class="form-control" size="16" name="jumlah" placeholder="Masukan Jumlah Barang yang Akan Dipakai">
             </div>

             <div class="form-group">
                 <label for="sisa">Sisa Stok</label>
                 <br>
                 <input type="number" class="form-control" size="16" name="sisa" readonly>
             </div>

             <div class="form-group">
                 <input type="submit" value="Update" class="btn-primary">
                 <a class="btn-edit" href="<?php echo site_url('dashboard/barang') ?>">Batal</a>
             </div>
         </form>
	</div>

</div>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
