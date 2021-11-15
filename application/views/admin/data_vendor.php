  <script language="JavaScript" type="text/javascript">
    function cek_delete(){
        return confirm('Anda yakin ingin menghapus Vendor ini ?');
    }
</script> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$this->session->userdata('rule')?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Vendor PT Intan Daya Mandiri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="row">       
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Vendor PT Intan Daya Mandiri</h3>
            </div>
            <div class="card-header">
              <a href="<?=site_url('admin/tambah_vendor')?>" class="btn btn-primary">Tambah Vendor</a>
            </div>     
            <!-- /.card-header -->
            <div class="card-body">
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Vendor</th>
                  <th>alamat Vendor</th>
                  <th>Nama PIC</th>
                  <th>Email </th>
                  <th>Nomor Telp</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  if ($vendor!='') { foreach ($vendor as $data) {

                      ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$data['nama_vendor']?></td>
                    <td><?=$data['alamat_vendor']?></td>
                    <td><?=$data['pic_vendor']?></td>
                    <td><?=$data['email_vendor']?></td>
                    <td><?=$data['telp_vendor']?></td>
                    <td>
                      <a href="<?=site_url('admin/edit_vendor?id='.$data['id_vendor'].'')?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?=site_url('admin/harga_vendor?id='.$data['id_vendor'].'')?>" class="btn btn-sm btn-warning">Harga Vendor</a>
                      <a href="<?=site_url('admin/hapus_vendor?id='.$data['id_vendor'].'')?>" class="btn btn-sm btn-danger" onclick="return cek_delete()">Hapus</a>
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