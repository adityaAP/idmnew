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
                        <label for="inputName" class="col-sm-2 col-form-label">Asal Muatan</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="dari">
                            <option>-- Pilih Kota -- </option>                            
                            <?php foreach ($kota as $value) { ?>
                                <option <?=isset($harga)&&$harga['dari']==$value['kode']?"selected":''; ?> value="<?=$value['kode']?>"><?=$value['kota']?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <label for="inputName" class="col-sm-2 col-form-label">Tujuan Muatan</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="tujuan">
                            <option>-- Pilih Kota -- </option>                            
                            <?php foreach ($kota as $value) { ?>
                                <option <?=isset($harga)&&$harga['tujuan']==$value['kode']?"selected":''; ?> value="<?=$value['kode']?>"><?=$value['kota']?></option>
                            <?php } ?>
                          </select>
                        </div>                        
                      </div>                       
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Armada</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="armada">
                              <option>-- Pilih Armada -- </option>
                              <?php if ($armada!='') { foreach ($armada as $value) { ?>
                                <option <?=isset($harga)&&$harga['armada']==$value['id_armada']?"selected":''; ?> value="<?=$value['id_armada']?>"><?=$value['nama_vendor']?> - <?=$value['jenis_armada']?></option>
                              <?php }} ?>
                            </select>
                        </div>
                        <label for="inputName" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="harga" value="<?=isset($harga)?$harga['harga']:'';?>">
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
