
<script language="JavaScript" type="text/javascript">
    function cek_delete(){
        return confirm('Anda yakin ingin menghapus Armada ini  ?');
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
                <h3 class="card-title">Tambah Barang</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data"> 
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nama_barang" value="<?=isset($barangbyid)?$barangbyid['nama_barang']:'';?>">
                        </div>
                        <label for="inputName" class="col-sm-2 col-form-label">Harga Barang</label>
                        <div class="col-sm-4">
                          <input type="number" name="harga_barang" class="form-control" value="<?=isset($barangbyid)?$barangbyid['harga_barang']:'';?>" >
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
              <h3 class="card-title">Data Barang</h3>
            </div>  
            <!-- /.card-header -->
            <div class="card-body">
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  if ($barang!='') { foreach ($barang as $data) {
                      ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$data['nama_barang']?></td>
                    <td><?=$data['harga_barang']?></td>
                    <td>
                      <a href="<?=site_url('admin/edit_barang?id='.$data['id_barang'].'')?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?=site_url('admin/hapus_barang?id='.$data['id_barang'].'')?>" class="btn btn-sm btn-danger" onclick="return cek_delete()">Hapus</a>
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