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
              <li class="breadcrumb-item active">Tambah Pengirim/Vendor</li>
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
                <h3 class="card-title">Tambah Surat Jalan Intan Daya Mandiri</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">                                             
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nomor PO</label>
                        <div class="col-sm-10">
                          <input type="text" name="nopo" class="form-control" value="<?=isset($sj)?$sj['nopo']:'';?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Tanggal Surat Jalan</label>
                        <div class="col-sm-10">
                          <input type="text" name="tgl_sj" class="form-control pilihtanggal" value="<?=isset($sj)?date('d-m-Y',strtotime($sj['tgl_surat_jalan'])):date('d-m-Y');?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Tanggal Jatuh Tempo</label>
                        <div class="col-sm-10">
                          <input type="text" name="jt" class="form-control pilihtanggal" value="<?=isset($sj)?date('d-m-Y',strtotime($sj['tgl_jt_sj'])):date('d-m-Y');?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="ket" rows="5"><?=isset($sj)?$sj['keterangan']:'';?></textarea>
                        </div>
                      </div>
                      <br>
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