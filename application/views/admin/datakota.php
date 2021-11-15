
<script language="JavaScript" type="text/javascript">
    function cek_delete(){
        return confirm('Anda yakin ingin menghapus kota ini  ?');
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
              <li class="breadcrumb-item active">Data Kota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Kota</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data"> 
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Kode Kota</label>
                        <div class="col-sm-4">
                          <input type="text" name="kode" class="form-control" value="<?=isset($kotabyid)?$kotabyid['kode']:'';?>" >
                        </div>
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Kota</label>
                        <div class="col-sm-4">
                          <input type="text" name="kota" class="form-control" value="<?=isset($kotabyid)?$kotabyid['kota']:'';?>" >
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
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Kota</h3>
            </div>  
            <!-- /.card-header -->
            <div class="card-body">
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th>kode</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  if ($kota!='') { foreach ($kota as $data) {
                      ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$data['kode']?></td>
                    <td><?=$data['kota']?></td>
                    <td>
                      <a href="<?=site_url('admin/editkota?id='.$data['id_kota'].'')?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?=site_url('admin/hapuskota?id='.$data['id_kota'].'')?>" class="btn btn-sm btn-danger" onclick="return cek_delete()">Hapus</a>
                    </td>

                  </tr>
              <?php }} ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->
    </section>    
    <!-- /.content -->
  </div>
</script>