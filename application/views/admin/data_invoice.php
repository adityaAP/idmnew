   <script language="JavaScript" type="text/javascript">
    function cek_delete(){
        return confirm('Anda yakin ingin menghapus Invoice ini ?');
    }    
    function cek_lunas(){
        return confirm('Anda yakin invoice ini sudah lunas ?');
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
              <li class="breadcrumb-item active">Data Invoice</li>
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
              <h3 class="card-title">Data Invoice</h3>
            </div>
            <div class="card-header">
              <a href="<?=site_url('admin/tambah_invoice')?>" class="btn btn-primary">Tambah Invoice</a>
            </div>     
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x: scroll;">
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Customer</th>
                  <th>Nomor Invoice</th>
                  <th width="100px">Tanggal Invoice</th>
                  <th width="100px">Jatuh Tempo</th>
                  <th>Description</th>
                  <th>DPP</th>
                  <th>PPN 1%</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th width="150px">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  if ($invoice!='') { foreach ($invoice as $data) {
                    $skg = date('Y-m-d');
                    $jatuhtempo = date('Y-m-d', strtotime("+3 months", strtotime($data['tgl_inv'])));                    
                      ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$this->kode_converter->customer($data['id_cust'])?></td>
                    <td><?=$data['no_inv']?></td>
                    <td><?=$data['tgl_inv']?></td>
                    <td><?=$jatuhtempo?></td>
                    <td><?=$data['description']?></td>
                    <td>Rp <?=number_format($data['dpp'],2,',','.');?></td>
                    <td>Rp <?=number_format($data['ppn'],2,',','.');?></td>
                    <td>Rp <?=number_format($data['total'],2,',','.');?></td>
                    <?php if ($data['status_inv']=='LUNAS') { ?>
                      <td style="background-color:#136BD4;color:white;text-align:center;"><b>LUNAS</b></td>
                    <?php }else{ if ($skg <= $jatuhtempo) { ?>
                      <td style="background-color:green;color:white;text-align:center;"><b>AMAN</b></td>
                    <?php }else{ ?>
                      <td style="background-color:red;color:white;text-align:center;"><b>JATUH TEMPO</b></td>
                    <?php } }?>
                    <td>
                      <a href="<?=site_url('admin/edit_invoice?id='.$data['id_inv'].'')?>" class="btn btn-xs btn-info">Edit</a>
                      <a href="<?=site_url('admin/hapus_invoice?id='.$data['id_inv'].'')?>" class="btn btn-xs btn-danger" onclick="return cek_delete()">Hapus</a>      
                      <?php if ($data['status_inv'] == 'LUNAS') { ?>
                      <a href="<?=site_url('admin/batal_lunas_invoice?id='.$data['id_inv'].'')?>" class="btn btn-xs btn-warning">Batalkan Lunas</a>                      
                    <?php }else{ ?>
                      <a href="<?=site_url('admin/lunas_invoice?id='.$data['id_inv'].'')?>" class="btn btn-xs btn-warning" onclick="return cek_lunas()">Lunas</a>
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