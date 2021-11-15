  <script language="JavaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Anda yakin ingin membatalkan cuti ini ?');
    }
</script>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$this->session->userdata('nama')?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Admin Intan Daya Mandiri</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">   

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input type="email" name="email" class="form-control" value="<?=isset($admin)?$admin['email']:'';?>" >
                        </div>
                      </div> 
                      <?php if (isset($admin)) { ?>

                      <?php }else{ ?>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8">
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>
                      <?php } ?>
                      <br><hr>                       
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                          <input type="text" name="nama" class="form-control" value="<?=isset($admin)?$admin['nama']:'';?>" >
                        </div>
                      </div>                        
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-8">
                          <input type="text" name="telp" class="form-control" value="<?=isset($admin)?$admin['telp']:'';?>" >
                        </div>
                      </div>                        
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>      
    <!-- /.content -->
  </div>
