<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT.Intan Daya Mandiri | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/dist/css/adminlte.min.css')?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
  body { 
  background: url(<?=base_url('assets/logo/bg.jpeg')?>) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
  </style>
</head>
<body class="hold-transition login-page" style="background: url(<?=base_url('assets/logo/bg.jpeg')?>) no-repeat center center fixed;">
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
<div class="login-box">
  <div class="login-logo"> 
    <img style="max-width:200px;max-height:150px;margin-bottom:50px;" src="<?=base_url('assets/logo/idm.png')?>"><br> 
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url('assets/admin/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/admin/dist/js/adminlte.min.js')?>"></script>

</body>
</html>
