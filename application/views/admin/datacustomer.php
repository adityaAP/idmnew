  <script language="JavaScript" type="text/javascript">
    function cek_delete(){
        return confirm('Anda yakin ingin menghapus customer ini ?');
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
              <li class="breadcrumb-item active">Data Customer PT Intan Daya Mandiri</li>
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
              <h3 class="card-title">Data Customer PT Intan Daya Mandiri</h3>
            </div>
            <div class="card-header">
              <a href="<?=site_url('admin/tambah_cust')?>" class="btn btn-primary">Tambah Customer</a>
            </div>     
            <!-- /.card-header -->
            <div class="card-body">
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Customer</th>
                  <th>alamat Customer</th>
                  <th>Email</th>
                  <th>Nomor Telp</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  if ($cust!='') { foreach ($cust as $data) {

                      ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$data['nama_cust']?></td>
                    <td><?=$data['alamat_cust']?></td>
                    <td><?=$data['email_cust']?></td>
                    <td><?=$data['telp_cust']?></td>
                    <td>
                      <a href="<?=site_url('admin/edit_cust?id='.$data['id_cust'].'')?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?=site_url('admin/hapus_cust?id='.$data['id_cust'].'')?>" class="btn btn-sm btn-danger" onclick="return cek_delete()">Hapus</a>
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