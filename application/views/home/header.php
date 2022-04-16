<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <link href="<?=  base_url().'assets/css/bootstrap.min.css';?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url().'assets/css/navbar.css';?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/modal.css'; ?>">
    <!-- <link rel="stylesheet" href="<?= base_url().'assets/css/detail.css'; ?>"> -->
    <link rel="stylesheet" href="<?= base_url().'assets/css/details.css'; ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/shop.css'; ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/shop-sidebar.css'; ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/keranjang.css'; ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/checkout.css'; ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/pembayaran.css'; ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/riwayat.css'; ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/pengaturan_akun.css'; ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/main.css'; ?>">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <title>Tigalapan Kaos</title>
  </head>



  <body>
   
 
  
  <div class="container-fluid">
    <div class="row"  style="background:#f5f5f4;">
    <div class="col px-md-5 mt-1 mb-1 text-muted">
    <div class="header-contact">
      <div class="telephone">
        <i class="bi bi-telephone"></i>
        <p> 081356597776 </p>
      </div>
      <div class="header-email">
        <i class="bi bi-envelope "></i>
        <p> join.us@tigalapankaos.com</p>
      </div>
    </div>
    </div>
     
    <div class="col px-md-5 mt-1 mb-1 text-end text-muted">
      <div  class="flash-sale">
          <span>     
          Flash Sale<b> 30% OFF</b>. Berakhir<b> 2 Hari 12:47:09</b>. <a href="">Shop Now <i class="bi bi-arrow-right"></i>     </a> 
          </span>
      </div>
    </div>
  </div>
</div>


 
<div class="sidebar-nav">
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header" style="background:#ECEAEA; height:120px;">
    <div class="container">
  
      <img class="avatar" src="<?= base_url().'assets/foto_profil/'.$userx[0]->foto; ?>" style=" float: left;"/>  
 
      <h6 class="name" style="float:left;margin-top:10px; margin-left:25px; "><?= $userx[0]->nama; ?></h6><br><br>
      <h6 class="text-muted" style="float:left;margin-left:25px;">Poin Kamu <?= $userx[0]->poin ; ?></h6>
    </div>
    
      
    </div>
    <div class="offcanvas-body"  style="font-size: 1.2rem;color:black;">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo base_url().'dashboard' ?>" class="nav-link text-black">
          <i class="bi bi-house"></i>
             <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url().'dashboard' ?>" class="nav-link text-black">
          <i class="bi bi-clock-history"></i>
     
             <span>Riwayat Transaksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url().'dashboard' ?>" class="nav-link text-black">
 
          <i class="bi bi-gear"></i>
             <span>Pengaturan Akun</span>
          </a>
        </li>
        <li class="nav-item">
          
          <a href="<?= base_url().'home/art' ?>" class="nav-link text-black">
          <i class="bi bi-box-arrow-right"></i>
          
             <span>Keluar</span>
          </a>
        </li>
     
       
      
    </div>
  </div>
</div>
  
 
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="list-btn">
        <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" >
          <i class="bi bi-list"></i>
        </a>
      </div>
    </div>
    <div class="col text-center">
      <div class="logo-38">
      <img src="<?= base_url().'assets/logo/logo.png'; ?>" id="logo" alt="">
     </div>
    </div>
    <div class="col text-end position-relative">
      <div class="header-links">
        <a href="<?= base_url("home/keranjang"); ?>" class="text-black">
          <i class="bi bi-cart px-md-1 mt-1 mb-1 position-relative"><small class="badge rounded-pill bg-dark position-absolute translate-middle notif">2</small></i>
        </a>
        <a href="" class="text-black">
          <i class="bi bi-heart px-md-1 mt-1 mb-1"></i>
        </a>
        <a href="" class="text-black">
          <i class="bi bi-person px-md-1 mt-1 mb-1"></i>
        </a>
      </div>
    </div>
  </div>
</div>
     
    
     
      
    
  </div>
</nav>