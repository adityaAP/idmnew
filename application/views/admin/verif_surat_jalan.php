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
              <li class="breadcrumb-item active">Verifikasi Surat Jalan</li>
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
              <h3 class="card-title">Verifikasi Surat Jalan</h3>
            </div>   
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x: scroll;">
              <table style="overflow-x: scroll;" id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th width="100px">Aksi</th>
                  <th>Status</th>
                  <th>Nomor PO</th>
                  <th>Tanggal Surat Jalan</th>
                  <th>Tanggal Jatuh Tempo</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                  <?php $skg = date('Y-m-d'); $no=1; if ($sj!='') { foreach ($sj as $value) { ?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td>
                          <a href="<?=site_url('verif/verifikasisuratjalan?id='.$value['id_sj'].'')?>" class="btn btn-sm btn-primary jeda">Verifikasi</a>
                      </td>
                      <?php if ($value['status']=='LUNAS') { ?>
                      <td style="background-color:#136BD4;color:white;text-align:center;"><b>LUNAS</b></td>
                      <?php }else{ if ($skg <= $value['tgl_jt_sj']) { ?>
                        <td style="background-color:green;color:white;text-align:center;"><b>AMAN</b></td>
                      <?php }else{ ?>
                        <td style="background-color:red;color:white;text-align:center;"><b>JATUH TEMPO</b></td>
                      <?php } }?>
                      <td><?=$value['nopo']?></td>
                      <td><?=date('d-m-Y',strtotime($value['tgl_surat_jalan']))?></td>
                      <td><?=date('d-m-Y',strtotime($value['tgl_jt_sj']))?></td>
                      <td><?=$value['keterangan']?></td>
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