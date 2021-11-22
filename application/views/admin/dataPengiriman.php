   <script language="JavaScript" type="text/javascript">
    function cek_delete(){
        return confirm('Anda yakin ingin menghapus pengiriman ini ?');
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
              <li class="breadcrumb-item active">Data Pengiriman Barang</li>
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
              <h3 class="card-title">Data Pengiriman Barang</h3>
            </div>
            <div class="card-header">
              <a href="<?=site_url('admin/tambahpengiriman')?>" class="btn btn-primary">Tambah Pengiriman</a>
            </div>     
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x: scroll;">
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th width="150px">Aksi</th>
                  <th>Nama Customer</th>
                  <th>Nomor PO</th>
                  <th>Jangka Waktu</th>
                  <th>Nama Barang</th>
                  <th>Dari</th>
                  <th>Tujuan</th>
                  <th>Keterangan</th>
                  <th>Vendor</th>
                  <th>Armada</th>
                  <th>Jumlah Barang</th>
                  <th>Nilai Invoice</th>
                  <th>Status Pengiriman</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  if ($pengiriman!='') { foreach ($pengiriman as $data) {
                    $skg = date('Y-m-d');
                      ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td>
                      <a href="<?=site_url('admin/editpengiriman?id='.$data['id'].'')?>" class="btn btn-xs btn-info">Edit</a>
                      <a href="<?=site_url('admin/edit_status_pengiriman?id='.$data['id'].'')?>" class="btn btn-xs btn-warning">Status Pengiriman</a>
                      <a href="<?=site_url('admin/hapuspengiriman?id='.$data['id'].'')?>" class="btn btn-xs btn-danger" onclick="return cek_delete()">Hapus</a>
                    </td>
                    <td><?=$this->kode_converter->customer($data['id_customer'])?></td>
                    <td><?=$data['no_po']?></td>
                    <td><?=$data['jangka_waktu']?></td>
                    <td><?=$this->kode_converter->barang($data['nama_barang'])?></td>
                    <td><?=$this->kode_converter->kota($data['dari'])?></td>
                    <td><?=$this->kode_converter->kota($data['tujuan'])?></td>
                    <td><?=$data['keterangan']?></td>
                    <td><?=$this->kode_converter->vendor($data['vendor'])?></td>
                    <td><?=$this->kode_converter->armada($data['armada'])?></td>
                    <td><?=$data['jumlah_barang']?></td>
                    <td>Rp <?=number_format($data['nilai_inv'],2,',','.');?></td>
                    <td><?=$data['status_pengiriman']?></td>
                    

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