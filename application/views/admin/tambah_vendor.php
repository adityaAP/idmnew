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
              <li class="breadcrumb-item active">Tambah Vendor</li>
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
                <h3 class="card-title">Tambah Vendor Intan Daya Mandiri</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">   

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Vendor</label>
                        <div class="col-sm-4">
                          <input type="text" name="nama" class="form-control" value="<?=isset($vendor)?$vendor['nama_vendor']:'';?>" >
                        </div>
                        <label for="inputName" class="col-sm-2 col-form-label">Alamat Vendor</label>
                        <div class="col-sm-4">
                          <input type="text" name="alamat" class="form-control" value="<?=isset($vendor)?$vendor['alamat_vendor']:'';?>" >
                        </div>                        
                      </div> 
                      <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Nama PIC</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama_pic" class="form-control" value="<?=isset($vendor)?$vendor['pic_vendor']:'';?>" >
                        </div>  
                      </div>                     
                      <div class="form-group row">                      
                        <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                          <input type="email" name="email" class="form-control" value="<?=isset($vendor)?$vendor['email_vendor']:'';?>" >
                        </div>
                        <label for="inputName" class="col-sm-2 col-form-label">Telp </label>
                        <div class="col-sm-4">
                          <input type="text" name="telp" class="form-control" value="<?=isset($vendor)?$vendor['telp_vendor']:'';?>" >
                        </div>
                      </div>                                                                 
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Simpan</button>
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
