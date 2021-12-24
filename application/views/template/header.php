<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Intan Daya Mandiri</title>
  <link rel="icon" href="<?=base_url('assets/logo/idm.png')?>">
  <meta name="robots" content="index,follow"/>
  <meta name="description" content="PT INTAN DAYA MANDIRI adalah perusahaan yang bergerak di bidang jasa pengiriman barang, kami menyediakan berbagai layanan yang murah, cepat, aman, dan terpercaya"/>
<meta name="keywords" content="skincare, skin care, beauty in the pot, pembersih wajah, pemutih wajah, glowing, serum, paket skincare"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="PT Intan Daya Mandiri Your Business Partner"/>
<meta property="og:url" content="https://ptintandayamandiri.co.id/"/>
<meta property="og:title" content="PT Intan Daya Mandiri Your Business Partner"/>
<meta property="og:description" content="PT INTAN DAYA MANDIRI adalah perusahaan yang bergerak di bidang jasa pengiriman barang, kami menyediakan berbagai layanan yang murah, cepat, aman, dan terpercaya"/>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
  
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/jqvmap/jqvmap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/dist/css/adminlte.min.css')?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/select2/css/select2.min.cs')?>">
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')?>">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    .jeda {
      margin:5px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">

<script src="<?=base_url('assets/dist/js/jquery-slim.min.js')?>"></script>
<script src="<?=base_url('assets/dist/js/popper.min.js')?>"></script>
<script src="<?=base_url('assets/dist/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/dist/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/dist/js/bootstrap-notify.js')?>"></script>

  <script type="text/javascript">
    <?php 
      if ($this->session->flashdata('warning')!='')
          {echo "notify('".$this->session->flashdata('warning')."','warning');";} 
      if ($this->session->flashdata('danger')!='')
          {echo "notify('".$this->session->flashdata('danger')."','danger');";} 
      if ($this->session->flashdata('success')!='')
          {echo "notify('".$this->session->flashdata('success')."','success');";} 
      ?>
      function notify(message,type) {
      $.notify({
              icon: "pe-7s-gift",
              message: message
          },{
              type: type,
              timer: 10000,
              placement: {
                  from: 'top',
                  align: 'right'
              }
          });
      }
  </script>
    <div id="notifikasi">
 <?php 
  if (validation_errors()!=null&&validation_errors()!=''){
    $error = explode('<p>', validation_errors());
    for ($i=1; $i < count($error); $i++) { 
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
    <strong>".$error[$i]."</strong></div>";
    }
  }
  ?>
</div>
<script type="text/javascript">
setTimeout(function(){$("#notifikasi").html('');}, 3000);
</script>  
  <script language="JavaScript" type="text/javascript">
    function logout(){
        return confirm('Anda yakin ingin keluar ?');
    }
</script> 
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link"  href="<?=site_url('login/logout')?>" onclick="return logout()"><i class="fas fa-sign-out-alt"></i></a>
      </li>      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=site_url('admin/')?>" class="brand-link">
      <img src="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PT. Intan Daya Mandiri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('assets/logo/user.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?=site_url('admin/profile?id='.$this->session->userdata('user_id'))?>" class="d-block"><?=$this->session->userdata('nama')?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=site_url('admin/dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>  
        
          <?php if ($this->session->userdata('rule')!='admin_jkt') { ?>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  SETTING ADMIN
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if ($this->session->userdata('rule')=='superadmin'||$this->session->userdata('rule')=='admin_smg') { ?>
                <li class="nav-item">
                  <a href="<?=site_url('admin/data_admin')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Admin</p>
                  </a>
                </li>
                <?php } ?>
                <li class="nav-item">
                  <a href="<?=site_url('admin/datakota')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kota</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=site_url('admin/data_customer')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Customer</p>
                  </a>
                </li>              
                <li class="nav-item">
                  <a href="<?=site_url('admin/data_vendor')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Vendor</p>
                  </a>
                </li>              
                <li class="nav-item">
                  <a href="<?=site_url('admin/data_armada')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Armada</p>
                  </a>
                </li>              
              </ul>
            </li>    

            <li class="nav-header">VERIFIKASI</li>
              <li class="nav-item">
                <a href="<?=site_url('verif/datapengiriman')?>" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Pengiriman
                    <span class="badge badge-info right"><?=$ttlp?></span>
                  </p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="<?=site_url('verif/invoice')?>" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Invoice
                    <span class="badge badge-info right"><?=$ttlv?></span>
                  </p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="<?=site_url('verif/suratjalan')?>" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Surat Jalan
                    <span class="badge badge-info right"><?=$ttls?></span>
                  </p>
                </a>
              </li> 

          <?php } ?>
          <li class="nav-header">DATA PENGIRIMAN</li>
          <li class="nav-item">
            <a href="<?=site_url('admin/datapengiriman')?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Data Pengiriman
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="<?=site_url('admin/suratjalan')?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Data Surat jalan
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="<?=site_url('admin/data_invoice')?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Data Invoice
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="<?=site_url('admin/data_pengirim_vendor')?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Data Pengirim / Vendor
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="<?=site_url('laporan')?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>