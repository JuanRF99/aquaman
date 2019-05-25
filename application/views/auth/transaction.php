<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>

<!-- Section -->
<div class="panel panel-border panel-primary">
    <div class="panel-heading"> 
        <h3 class="panel-title"><i class="fa fa-user-plus"></i> &nbsp; Buat Transaksi</h3> 
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
    <form method="POST" enctype='multipart/form-data'>

            <div class="form-group">
                <label for="konsumen">Konsumen</label>
                <select name="konsumen" class="form-control">
                    <?php foreach($konsumens as $kons) {?>
                    <option value="<?php echo $kons['nama']; ?>"><?php echo $kons['nama']; ?></option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis</label>
                <select name="jenis" class="form-control">
                    <?php foreach($types as $jenis) {?>
                    <option value="<?php echo $jenis['jenis']; ?>"><?php echo $jenis['jenis']; ?></option>
                    <?php }?>
                </select>
            </div>
                <!-- <input type="text" name="harga" value="<?php $jenis['harga']; ?>"> -->

             <div class="form-group">
                 <label for="berat">Berat (Dalam Kilogram)</label>
                 <br>
                 <input type="number" class="form-control" name="berat" placeholder="Masukan Berat Pakaian" required>
             </div>

             <div class="form-group">
                 <label for="tgl_ambil">Tanggal Ambil</label>
                 <br>
                 <input type="date" class="form-control" name="tgl_ambil" required>
             </div>

             <div class="form-group">
                 <input type="text" class="form-control" placeholder="*Setiap transaksi lebih dari 10kg akan mendapat potongan harga 10%" style="width:550px; border-bottom:none;" disabled>
             </div>


             <div class="form-group">
                 <input type="submit" value="Tambah" name="submit" class="btn-primary">
             </div>
         </form>
	</div>

</div>

<?php
if(isset($_POST['jenis'])){
    $konek = mysqli_connect("localhost","root","","aquaman");
    $jeniss	= $this->input->post('jenis');
    
$query = mysqli_query($konek,"SELECT * FROM jenis WHERE jenis = '$jeniss'");
$hasil = mysqli_fetch_array($query);
$harga= $hasil['harga'];
$usr = $this->session->userdata('nama');

$berat	= $_POST['berat'];
$konsumen	= $_POST['konsumen'];
if ($berat>10){
$tarif = $berat*$harga*90/100;
}else{
$tarif = $berat*$harga;
}
$tgl_ambil		= $_POST['tgl_ambil'];
$timezone = "Asia/Jakarta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$tgl_transaksi=date('Y-m-d');
    
        $input = mysqli_query($konek,"INSERT INTO transaksi VALUES(NULL, '$jeniss','$tarif', '0', '$tgl_transaksi', '$tgl_ambil', '$berat','$usr','$konsumen')") or die(mysql_error());
        if($input){
            $this->session->set_flashdata('message', 'Transaksi Berhasil <br> ==============================
            Konsumen : <b>'.$konsumen.'</b><br>
                Jenis Laundry : <b>'.$jeniss.'</b><br>
                Berat : <b>'.$berat.' Kg</b><br>
                Tarif : <b>Rp. ' .number_format($tarif, 0 , '' , '.' ) . ',-</b><br>
                Tanggal Transaksi : <b>'.$tgl_transaksi.'</b><br>
                Tanggal Ambil : <b>'.$tgl_ambil.'</b><br>
                ============================ ');
            redirect('dashboard/transaction');	
            
        }else{
            $this->session->set_flashdata('message','Gagal Menambahkan, <a href="site_url("dashboard/transaction")"> klik disini</a>');
            
        }
      }
?>

<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
