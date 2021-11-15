   <script language="JavaScript" type="text/javascript">
    function cek_delete(){
        return confirm('Anda yakin ingin menghapus vendor ini ?');
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
              <li class="breadcrumb-item active">Data Pengiriman Barang / Vendor</li>
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
              <h3 class="card-title">Data Pengirim Barang / Vendor</h3>
            </div>
            <div class="card-header">
              <a href="<?=site_url('admin/tambah_pengirim_vendor')?>" class="btn btn-primary">Tambah Pengirim Vendor</a>
            </div>     
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x: scroll;">
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Vendor</th>
                  <th>Nomor PO</th>
                  <th>Jangka Waktu</th>
                  <th>Nama Barang</th>
                  <th>Tanggal Muat</th>
                  <th>Dari</th>
                  <th>Tujuan</th>
                  <th>Keterangan</th>
                  <th>Armada</th>
                  <th>Jumlah Barang</th>
                  <th>Nilai Invoice</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  if ($pengirim!='') { foreach ($pengirim as $data) {
                    $skg = date('Y-m-d');
                      ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$this->kode_converter->vendor($data['id_vendor'])?></td>
                    <td><?=$data['no_po']?></td>
                    <td><?=$data['jangka_waktu']?></td>
                    <td><?=$this->kode_converter->barang($data['nama_barang'])?></td>
                    <td><?=$data['tgl_muat']?></td>                    
                    <td><?=$this->kode_converter->kota($data['dari'])?></td>
                    <td><?=$this->kode_converter->kota($data['tujuan'])?></td>
                    <td><?=$data['keterangan']?></td>
                    <td><?=$this->kode_converter->armada($data['armada'])?></td>
                    <td><?=$data['jumlah_barang']?></td>
                    <td>Rp <?=number_format($data['nilai_inv'],2,',','.');?></td>
                    <?php if ($data['status']=='LUNAS') { ?>
                      <td style="background-color:#136BD4;color:white;text-align:center;"><b>LUNAS</b></td>
                    <?php }else{ if ($skg <= $data['jangka_waktu']) { ?>
                      <td style="background-color:green;color:white;text-align:center;"><b>AMAN</b></td>
                    <?php }else{ ?>
                      <td style="background-color:red;color:white;text-align:center;"><b>JATUH TEMPO</b></td>
                    <?php } }?>
                    <td>
                      <a href="<?=site_url('admin/edit_pengirim_vendor?id='.$data['id_pengirim'].'')?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?=site_url('admin/hapus_pengirim_vendor?id='.$data['id_pengirim'].'')?>" class="btn btn-sm btn-danger" onclick="return cek_delete()">Hapus</a> 
                      <?php if ($data['status']=='LUNAS') { ?>
                      <a href="<?=site_url('admin/vendor_batal_lunas?id='.$data['id_pengirim'].'')?>" class="btn btn-sm btn-warning" >Batalkan Lunas</a>
                      <?php }else{ ?>
                      <a href="<?=site_url('admin/vendor_lunas?id='.$data['id_pengirim'].'')?>" class="btn btn-sm btn-warning" >Lunas</a>
                      <?php } ?>

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