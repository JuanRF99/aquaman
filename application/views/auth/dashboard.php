<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
?>
<section id="dashboard">
    <?php if ($this->session->userdata('akses') == 1) { ?>

        <div class="panel panel-border panel-primary">
          <div class="panel-heading"> 
            <h3 class="panel-title"><i class="fa fa-home"></i> Dashboard</h3> 
          </div> 
          <div class="panel-body">
            <center><h2><b>Hai <?= $this->session->userdata('nama'); ?>, Anda Masuk Sebagai Admin </b></h2></center>
          </div> 
        </div>

    <?php }elseif ($this->session->userdata('akses') == 2) { ?>
      <div class="panel panel-border panel-primary">
          <div class="panel-heading"> 
            <h3 class="panel-title"><i class="fa fa-home"></i> Dashboard</h3> 
          </div> 
          <div class="panel-body">
            <center><h2><b>Hai <?= $this->session->userdata('nama'); ?>, Anda Masuk Sebagai Kasir </b></h2></center>
          </div> 
        </div>
    <?php } ?>
</section>