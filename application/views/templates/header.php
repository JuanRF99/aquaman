<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo asset_url()?>css/style.css">
    <title>Aquaman ~ Laundry Cleaning</title>
  
<!-- DataTable -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script src="<?php echo asset_url()?>dist/js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.css"/>

<!-- End DataTable -->

</head>
<body>
    <?php if ($this->session->userdata('logged_in') == FALSE) { ?>
      <!-- <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
      <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" class="page-scroll" href="#login_frm">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </div> -->
    <?php } ?>
  
  <?php if ($this->session->userdata('akses') == 1) 
  { ?>
  <div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="<?= site_url('dashboard'); ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= site_url('dashboard/transaction') ?>">Buat Transaksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= site_url('dashboard/trhistory'); ?>">Riwayat Transaksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= site_url('dashboard/addc'); ?>">Tambah Konsumen</a>
                </li>
                <li class="nav-item dropdown">
						      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="fa fa-list"></i> Data <span class="caret"></span></a>
                  <div class="dropdown-menu" aria-labelledby="themes">
                    <a class="dropdown-item" href="<?=site_url('dashboard/barang');?>">Barang</a>
                    <a class="dropdown-item" href="<?=base_url('dashboard/kns');?>">Konsumen</a>
                    <a class="dropdown-item" href="<?=base_url('dashboard/spply');?>">Supplier</a>
                    <a class="dropdown-item" href="<?=base_url('dashboard/kryw');?>">Karyawan</a>
                    <a class="dropdown-item" href="<?=base_url('dashboard/jl');?>">Jenis Laundry</a>
                    <a class="dropdown-item" href="<?=base_url('dashboard/sell');?>">Pembelian</a>
                    <a class="dropdown-item" href="<?=base_url('dashboard/pakai');?>">Pemakaian</a>
                  </div>
					      </li>
                <li class="nav-item dropdown">
						      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Admin Menu<span class="caret"></span></a>
                  <div class="dropdown-menu" aria-labelledby="themes">
                    <a class="dropdown-item" href="<?=base_url('dashboard/add_emp');?>">Tambah Karyawan</a>
                    <a class="dropdown-item" href="<?=base_url('dashboard/man_emp');?>">Olah Karyawan</a>
                    <a class="dropdown-item" href="<?=base_url('dashboard/add_spply');?>">Tambah Supplier</a>
                    <a class="dropdown-item" href="<?=base_url('dashboard/man_spply');?>">Olah Supplier</a>
                  </div>
					      </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="fas fa-user"></i> <?= 
                $this->session->userdata('nama');?><span class="caret"></span></a>
                <div class="dropdown-menu" aria-labelledby="themes">
                    <a class="dropdown-item" href="<?php echo site_url('/landing/logout/'); ?>"><i class="fas fa-power-off"></i> Logout</a>
                </div>
                </li>
            </ul>
        </div>
    </div>
  </div>

 <?php }else if($this->session->userdata('akses') == 2) {?>

  <div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="<?= site_url('dashboard') ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" class="page-scroll" href="<?= site_url('transaction'); ?>">Buat Transaksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" class="page-scroll" href="#trhistory">Riwayat Transaksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" class="page-scroll" href="#addc">Tambah Konsumen</a>
                </li>
                <li class="nav-item dropdown">
						      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Data <span class="caret"></span></a>
                  <div class="dropdown-menu" aria-labelledby="themes">
                    <a class="dropdown-item" href="<?=base_url('barang');?>">Barang</a>
                    <a class="dropdown-item" href="<?=base_url('addcat');?>">Konsumen</a>
                    <a class="dropdown-item" href="<?=base_url('satuan');?>">Supplier</a>
                    <a class="dropdown-item" href="<?=base_url('addcat');?>">Karyawan</a>
                    <a class="dropdown-item" href="<?=base_url('satuan');?>">Jenis Laundry</a>
                    <a class="dropdown-item" href="<?=base_url('addcat');?>">Pembelian</a>
                    <a class="dropdown-item" href="<?=base_url('satuan');?>">Pemakaian</a>
                  </div>
					      </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><?= 
                $this->session->userdata('nama');?><span class="caret"></span></a>
                <div class="dropdown-menu" aria-labelledby="themes">
                    <a class="dropdown-item" href="<?php echo site_url('/landing/logout/'); ?>"><i class="fas fa-power-off"></i> Logout</a>
                </div>
                </li>
            </ul>
        </div>
    </div>
  </div>

 <?php } ?>