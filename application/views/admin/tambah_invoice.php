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
              <li class="breadcrumb-item active">Edit Admin</li>
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
                <h3 class="card-title">Edit Admin Intan Daya Mandiri</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">   
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Customer</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="nama_pabrik">
                            <option>-- Pilih Customer -- </option>
                            <?php if ($cust!='') { foreach ($cust as $value) { ?>
                              <option <?=isset($inv)&&$inv['id_cust']==$value['id_cust']?"selected":''; ?> value="<?=$value['id_cust']?>"><?=$value['nama_cust']?></option>
                            <?php }} ?>
                          </select>
                        </div>
                      </div>                       
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nomor Invoice</label>
                        <div class="col-sm-8">
                          <input type="text" name="no_inv" class="form-control" value="<?=isset($inv)?$inv['no_inv']:'';?>">
                        </div>
                      </div>                       
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Tanggal Invoice</label>
                        <div class="col-sm-8">
                          <input type="text" name="tgl_inv" class="form-control inputmask" value="<?=isset($inv)?date('d-m-Y',strtotime($inv['tgl_inv'])):'';?>" >
                        </div>
                      </div>                    
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Description</label>
                          <div class="col-sm-8">
                            <textarea class="form-control" rows="3" name="description"><?=isset($inv)?$inv['description']:'';?></textarea>
                          </div>
                        </div>                         
                                                                
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">DPP</label>
                          <div class="col-sm-8">
                            <input type="number" name="dpp" class="form-control" value="<?=isset($inv)?$inv['dpp']:'';?>" >
                          </div>
                        </div>                    
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
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
